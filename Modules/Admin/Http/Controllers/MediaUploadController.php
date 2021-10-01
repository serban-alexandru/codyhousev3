<?php

namespace Modules\Admin\Http\Controllers;

use Arr, Str, Image, Imagick, File, Thumbnail;
use FFMpeg\FFProbe;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Modules\Post\Entities\{ PostSetting };

class MediaUploadController extends Controller
{
    public function uploadPostMedia(Request $request) {
        $data = $this->uploadMedia($request, 'post');

        return response()->json($data);
    }

    public function uploadTagMedia(Request $request) {
        $data = $this->uploadMedia($request, 'tag');

        return response()->json($data);
    }

    public function uploadMedia(Request $request, $type = 'post') {
        $request->validate([
            'media' => 'required',
		]);

        $status = true;

        $settings_width = 40;
        $settings_height = 40;

        if(!is_null($posts_settings = PostSetting::first())){
            $settings_width = $posts_settings->medium_width;
            $settings_height = $posts_settings->medium_height;
        }

        $subpath = $type == 'tag' ? 'tags' : ($type == 'post' ? 'posts' : false);
        if (!$subpath) {
            return [
                'status' => false,
                'message' => 'Invalid request'
            ];
        }

        $media_path = storage_path() . "/app/public/{$subpath}";

        // Ensure that original, and thumbnail folder exists
        File::ensureDirectoryExists($media_path . '/original');
        File::ensureDirectoryExists($media_path . '/thumbnail');

        // Save thumbnail image in file system
        $media = request()->file('media')->store("public/{$subpath}/original");
        $media_name = Arr::last(explode('/', $media));

        $mime_type = request()->file('media')->getMimeType();

        $media_type = substr($mime_type, 0, 5) === 'image' ? 'image' : 'video';

        if ($media_type === 'image') {
            $thumbnail = $media_name;
            if ($mime_type == 'image/gif') {
                // Save thumbnail (medium) image to file system
                $thumbnail_medium = new Imagick($media_path . '/original/' . $thumbnail);
                $thumbnail_medium = $thumbnail_medium->coalesceImages();
                do {
                    $thumbnail_medium->resizeImage( $settings_width, $settings_height, Imagick::FILTER_BOX, 1, true );
                } while ( $thumbnail_medium->nextImage());

                $thumbnail_medium = $thumbnail_medium->deconstructImages();
                $thumbnail_medium_name = Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
                $thumbnail_medium->writeImages($media_path . '/thumbnail/' . $thumbnail_medium_name, true);

            } else {
                $thumbnail_medium = Image::make(request()->file('media'));
                $thumbnail_medium->resize($settings_width, $settings_height, function($constraint){
                    $constraint->aspectRatio();
                });
                $thumbnail_medium_name = Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
                $thumbnail_medium->save($media_path . '/thumbnail/' . $thumbnail_medium_name);
            }

            $message = 'You have successfully upload file.';

        } else if ($media_type === 'video') {
            $ffprobe = FFProbe::create();
            $video_dimensions = $ffprobe
                ->streams( $media_path . '/original/' . $media_name )   // extracts streams informations
                ->videos()                      // filters video streams
                ->first()                       // returns the first video stream
                ->getDimensions();              // returns a FFMpeg\Coordinate\Dimension object
            $width = $video_dimensions->getWidth();
            $height = $video_dimensions->getHeight();

            $height = ceil($height * (1024/$width));
            $width = 1024; // Limit max thumbnail width as 1024
            $settings_height = ceil($height * ($settings_width/$width));
            config(['thumbnail.dimensions.width' => $width]);
            config(['thumbnail.dimensions.height' => $height]);

            // generate thumbnail from video
            $thumbnail = Arr::first(explode('.', $media_name)) . '.jpg';

            // get video length and process it
            // assign the value to time_to_image (which will get screenshot of video at that specified seconds)
            $time_to_image = 5; // Capture first frame

            $thumbnail_status = Thumbnail::getThumbnail($media_path . '/original/' . $media_name, $media_path . '/original/', $thumbnail, $time_to_image);
            if($thumbnail_status) {
                $message = "Thumbnail generated";
                $thumbnail_medium = Image::make($media_path . '/original/' . $thumbnail);
                $thumbnail_medium->resize($settings_width, $settings_height, function($constraint){
                    $constraint->aspectRatio();
                });
                $thumbnail_medium_name = Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
                $thumbnail_medium->save($media_path . '/thumbnail/' . $thumbnail_medium_name);
            } else {
                $status = false;
                $message = "thumbnail generation has failed";
                $thumbnail_medium_name = '';
            }
        }

        return [
                'status' => $status,
                'message' => $message,
                'video' => ($media_type === 'video') ? $media_name : '',
                'video_url' => ($media_type === 'video') ? asset("storage/{$subpath}/original/{$media_name}") : '',
                'video_type' => ($media_type === 'video') ? $mime_type : '',
                'thumbnail' => $thumbnail,
                'thumbnail_url' => asset("storage/{$subpath}/original/{$thumbnail}"),
                'thumbnail_medium' => $thumbnail_medium_name
        ];
    }
}
