<?php

namespace Modules\Users\Http\Controllers;

use Arr, Str, Image, File, Imagick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Modules\Post\Entities\{ PostSetting, Post, PostsTag, PostsMeta };
use Modules\Tag\Entities\{Tag, TagCategory};

class DashboardGifsController extends Controller
{

    public function cleanupEditorImages()
    {
        // `$directory` path value must be the value from `uploadImage` method
        // `uploadImage` method at app/Http/Controllers/EditorjsController.php

        $directory = 'public/editorjs-images';
        $files     = Storage::files($directory);

        foreach ($files as $file) {
            $file_name    = basename($file);
            $file_on_gif = Post::where( 'post_type', 'gif' )->firstWhere('description', 'LIKE', '%' . $file_name . '%');

            // model is null -> delete
            if (!$file_on_gif) {
                Storage::delete($file);
            }
        }
    }

    public function index()
    {
        // Cleanup unused images created with editorjs
        $this->cleanupEditorImages();

        $view = request()->ajax() ? 'users::gifs.table' : 'users::gifs.index';

        $gifs = Post::leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->select([
                'posts.id',
                'title',
                'slug',
                'posts.created_at as created_at',
                'thumbnail',
                'thumbnail_medium',
                'status',
                'users.username as username'
            ])->orderBy('created_at', 'desc');

        // Get only 'gif' type
        $gifs->where( 'post_type', 'gif' );

        if (!auth()->user()->isAdmin()) {
            // get user specific posts only
            $gifs = $gifs->where('user_id', auth()->user()->id);
        }

        if(request()->has('gifsearch')){
            $gifs->where('title', 'LIKE', '%' . request('gifsearch') . '%')
            ->orWhere('users.name', 'LIKE', '%' . request('gifsearch') . '%');
        }

        $gifs = (request()->has('status')) ? $gifs->where('status', request('status')) : $gifs->where('status', 'published');

        $limit = request('limit') ? request('limit') : 25;

        $gifs = $gifs->paginate($limit);

        if (auth()->user()->isAdmin()) {
            // get all gifs count
    
            $gifs_published_count = Post::where( 'post_type', 'gif' )->where('status', 'published')->count();
            $gifs_draft_count = Post::where( 'post_type', 'gif' )->where('status', 'draft')->count();
            $gifs_pending_count = Post::where( 'post_type', 'gif' )->where('status', 'pending')->count();
            $gifs_deleted_count = Post::where( 'post_type', 'gif' )->where('status', 'deleted')->count();
    
        } else {
            // get user specific gifs count
            $gifs_published_count = Post::where('post_type', 'gif')->where('status', 'published')->where('user_id', auth()->user()->id)->count();
            $gifs_draft_count = Post::where('post_type', 'gif')->where('status', 'draft')->where('user_id', auth()->user()->id)->count();
            $gifs_pending_count = Post::where('post_type', 'gif')->where('status', 'pending')->where('user_id', auth()->user()->id)->count();
            $gifs_deleted_count = Post::where('post_type', 'gif')->where('status', 'deleted')->where('user_id', auth()->user()->id)->count();    
        }

        $availableLimit = ['25', '50', '100', '150', '200'];

        $image_width = '40';
        $image_height = '40';
        $gifs_settings = PostSetting::where( 'post_type', 'gif' )->first();
        if(!is_null($gifs_settings)){
            $image_width = $gifs_settings->medium_width;
            $image_height = $gifs_settings->medium_height;
        }

        $request   = request();
        $status    = request('status');
        $gifsearch = request('gifsearch');

        $tag_categories = TagCategory::all();
        
        // get all tags
        $tags_by_category = array();
        $tags = Tag::where('published', true)->orderBy('name', 'asc')->get();
        foreach($tags as $tag) {
            if (!isset($tags_by_category[$tag->tag_category_id]))
                $tags_by_category[$tag->tag_category_id] = array();
            $tags_by_category[$tag->tag_category_id][] = $tag->name;
        }
        $tags_by_category = json_encode($tags_by_category);

        // Generate `slug` if it's not yet set
        foreach ($gifs as $gif) {
            if (!$gif->slug) {
                $slug               = Str::slug($gif->title, '-');
                $gif_with_same_slug = Post::where('slug', $slug)->where('id', '<>', $gif->id)->first();

                if ($gif_with_same_slug) {
                    $slug .= '-2';
                }

                $gif->slug = $slug;
                $gif->save();
            }
        }

        // get rejected gifs
        $rejected_gifs = [];
        if ($status == 'pending') {
            $rejected_gifs = $this->getRejectedGifs();
        }

        return view($view, compact(
            'gifs', 'rejected_gifs', 'gifs_published_count', 'gifs_draft_count', 'gifs_pending_count', 'gifs_deleted_count',
            'availableLimit', 'limit', 'image_width', 'image_height', 'request', 'gifsearch', 'status', 'tag_categories', 'tags_by_category'
            )
        );
    }

    public function addGif() {
        if (auth()->user()->isAdmin()) {
            // get all gifs count
            $gifs_published_count = Post::where( 'post_type', 'gif' )->where('status', 'published')->count();
            $gifs_draft_count = Post::where( 'post_type', 'gif' )->where('status', 'draft')->count();
            $gifs_pending_count = Post::where( 'post_type', 'gif' )->where('status', 'pending')->count();
            $gifs_deleted_count = Post::where( 'post_type', 'gif' )->where('status', 'deleted')->count();
    
        } else {
            // get user specific gifs count
            $gifs_published_count = Post::where('post_type', 'gif')->where('status', 'published')->where('user_id', auth()->user()->id)->count();
            $gifs_draft_count = Post::where('post_type', 'gif')->where('status', 'draft')->where('user_id', auth()->user()->id)->count();
            $gifs_pending_count = Post::where('post_type', 'gif')->where('status', 'pending')->where('user_id', auth()->user()->id)->count();
            $gifs_deleted_count = Post::where('post_type', 'gif')->where('status', 'deleted')->where('user_id', auth()->user()->id)->count();    
        }

        $tag_categories = TagCategory::all();

        // get all tags
        $tags_by_category = array();
        $tags = Tag::where('published', true)->orderBy('name', 'asc')->get();
        foreach($tags as $tag) {
            if (!isset($tags_by_category[$tag->tag_category_id]))
                $tags_by_category[$tag->tag_category_id] = array();
            $tags_by_category[$tag->tag_category_id][] = $tag->name;
        }
        $tags_by_category = json_encode($tags_by_category);

        return view('users::gifs.new-gif-page', compact(
            'gifs_published_count', 'gifs_draft_count', 'gifs_pending_count', 'gifs_deleted_count', 'tag_categories', 'tags_by_category'
            )
        );
    }

    public function settings()
    {
        if (auth()->user()->isAdmin()) {
            // get all gifs count
            $gifs_published_count = Post::where( 'post_type', 'gif' )->where('status', 'published')->count();
            $gifs_draft_count = Post::where( 'post_type', 'gif' )->where('status', 'draft')->count();
            $gifs_pending_count = Post::where( 'post_type', 'gif' )->where('status', 'pending')->count();
            $gifs_deleted_count = Post::where( 'post_type', 'gif' )->where('status', 'deleted')->count();
    
        } else {
            // get user specific gifs count
            $gifs_published_count = Post::where('post_type', 'gif')->where('status', 'published')->where('user_id', auth()->user()->id)->count();
            $gifs_draft_count = Post::where('post_type', 'gif')->where('status', 'draft')->where('user_id', auth()->user()->id)->count();
            $gifs_pending_count = Post::where('post_type', 'gif')->where('status', 'pending')->where('user_id', auth()->user()->id)->count();
            $gifs_deleted_count = Post::where('post_type', 'gif')->where('status', 'deleted')->where('user_id', auth()->user()->id)->count();    
        }

        $gifs_settings = PostSetting::where('post_type', 'gif')->first();

        return view('users::gifs.settings', compact(
            'gifs_published_count', 'gifs_draft_count', 'gifs_pending_count', 'gifs_deleted_count', 'gifs_settings'
            )
        );
    }

    /**
     * Store the gifs settings.
     * @return view
     */
    public function settingsStore()
    {
        return $this->createOrUpdateSettings('create', 'created');
    }

    /**
     * Update the gifs settings.
     * @return view
     */
    public function settingsUpdate()
    {
        return $this->createOrUpdateSettings('update', 'updated');
    }

    /**
     * Store or update gifs settings.
     * @return view
     */
    public function createOrUpdateSettings($method, $message)
    {
        $this->validate(request(), [
            'medium_width' => 'required|max:255',
            'medium_height' => 'required|max:255',
            // 'image_setting' => 'in:maintain,crop'
        ]);

        if($method == 'create'){
            PostSetting::create([
                'medium_width'     => request('medium_width'),
                'medium_height'    => request('medium_height'),
                'post_type'        => 'gif'
            ]);
        } else{
            $gifs_settings = PostSetting::where('post_type', 'gif')->first();
            $gifs_settings->update(request()->except(['_token']));
        }

        return redirect('/gifs/settings')->with("gifs-settings-alert", "Settings has been $message!");
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('gif::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store()
    {

        $this->validate(request(), [
            'title' => 'required|max:255',
        ]);

        if(request()->has('thumbnail')){
            $settings_width = 40;
            $settings_height = 40;

            if(!is_null($gifs_settings = PostSetting::where( 'post_type', 'gif' )->first())){
                $settings_width = $gifs_settings->medium_width;
                $settings_height = $gifs_settings->medium_height;
            }

            $gif_path = storage_path() . '/app/public/gifs';

            // Ensure that original, and thumbnail folder exists
            File::ensureDirectoryExists($gif_path . '/original');
            File::ensureDirectoryExists($gif_path . '/thumbnail');

            // Save orignal image to file system
            $thumbnail = request()->file('thumbnail')->store('public/gifs/original');
            $thumbnail_name = Arr::last(explode('/', $thumbnail));

            // Save thumbnail (medium) image to file system
            $thumbnail_medium = new Imagick($gif_path . '/original/' . $thumbnail_name);
            $thumbnail_medium = $thumbnail_medium->coalesceImages();
            do {
                $thumbnail_medium->resizeImage( $settings_width, $settings_height, Imagick::FILTER_BOX, 1, true );
            } while ( $thumbnail_medium->nextImage());

            $thumbnail_medium = $thumbnail_medium->deconstructImages();
            $thumbnail_medium_name = 'thumbnailcrop' . Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
            $thumbnail_medium->writeImages($gif_path . '/thumbnail/' . $thumbnail_medium_name, true);
        }

        // Generate slug
        $slug                = Str::slug(strip_tags(request('title')), '-');
        $gif_with_same_slug  = Post::firstWhere('slug', $slug);

        if ($gif_with_same_slug) {
            $slug .= '-2';
        }

        $status = request('status') ? request('status') : 'published';
        if ( $status == 'published' ) {
            $status = auth()->user()->isRegisteredUser() ? 'pending' : 'published';
        }

        $gif = Post::create([
            'user_id'          => auth()->user()->id,
            'title'            => strip_tags(request('title')),
            'slug'             => $slug,
            'description'      => request('description'),
            'thumbnail'        => (request()->has('thumbnail')) ? $thumbnail_name : NULL,
            'thumbnail_medium' => (request()->has('thumbnail')) ? $thumbnail_medium_name : NULL,
            'seo_page_title'   => request('page_title') ?: NULL,
            'tags'             => (request()->has('tags')) ? implode(',', request('tags')) : NULL,
            'post_type'        => 'gif',
            'status'           => $status
        ]);

        $tag_categories = TagCategory::all();

        foreach ($tag_categories as $key => $tag_category) {
            if (request()->has('tag_category_' . $tag_category->id)) {

                $tags_input = request('tag_category_' . $tag_category->id);

                foreach ($tags_input as $key => $tag_input) {
                    $tag = Tag::firstWhere('name', $tag_input);

                    // If tag doesn't exist yet, create it
                    if (!$tag) {
                        $tag                  = new Tag;
                        $tag->name            = $tag_input;
                        $tag->tag_category_id = $tag_category->id;
                        $tag->published       = true;
                        $tag->save();
                    }

                    // Insert posts_tag
                    $gifs_tag          = new PostsTag;
                    $gifs_tag->post_id = $gif->id;
                    $gifs_tag->tag_id  = $tag->id;

                    $gifs_tag->save();
                }
            }
        }

        $alert = [
            'message' => 'Gif has been created!',
            'class'   => 'alert--success',
        ];

        if ($status == 'pending') {
            $alert['message'] = 'Your Gif will be reviewed soon.';
        }

        if (request()->has('redirect'))
            return redirect('gifs')->with('alert', $alert);
        else
            return redirect()->back()->with('alert', $alert);
    }

    public function fetchDataAjax($id)
    {
        $gif = $this->getGif($id);
        if(!$gif){
            return response()->json([
                'status' => false,
                'message' => 'Gif does not exists.'
            ]);
        }

        if (!auth()->user()->isAdmin() && $gif->status == 'published') {
            $alert = [
                'status' => false,
                'message' => 'Published gif cannot be edited. Please email us if there is a mistake on your gif',
                'class'   => 'alert--error',
            ];
    
            return json_encode($alert);
        }

        $data = [];

        $data['id']           = $gif->id;
        $data['title']        = $gif->title;
        $data['description']  = html_entity_decode($gif->description);
        $data['thumbnail']    = asset("storage/gifs/original/{$gif->thumbnail}");
        $data['post_date']    = Date('d/m/Y', strtotime($gif->created_at));
        $data['status']       = $gif->status;

        $tag_categories        = TagCategory::all();
        $gifs_tags            = $gif->postsTag()->get();
        $all_tags_per_category = [];

        foreach ($tag_categories as $key => $tag_category) {
            $tags_per_category = '';

            foreach ($gifs_tags as $gif_tags_key => $gifs_tag) {
                $tag = Tag::find($gifs_tag->tag_id);

                // If they belong to the current tag category -> append
                if ($tag->tag_category_id == $tag_category->id) {
                    $tags_per_category .= $tag->name . ',';
                }
            }

            $tags_per_category = rtrim($tags_per_category, ',');

            $tags_html = ($tags_per_category) ?
                        '<option selected>' .
                            implode('</option><option selected>',
                                explode(',', $tags_per_category)
                            ) .
                        '</option>' : '';

            array_push(
                $all_tags_per_category,
                [
                    'tag_category_id' => $tag_category->id,
                    'tags'            => $tags_html
                ]
            );

        }

        $data['tags'] = json_encode($all_tags_per_category);

        return $data;
    }

    public function ajaxUpdate()
    {
        $gif = $this->getGif(request('gif_id'));
        if (!$gif) {
            $alert = [
                'message' => 'Gif does not exists!',
                'class'   => 'alert--error',
            ];
    
            return redirect()->back()->with('alert', $alert);    
        }

        if (!auth()->user()->isAdmin() && $gif->status == 'published') {
            $alert = [
                'message' => 'You are not authorized to edit published gif',
                'class'   => 'alert--error',
            ];
    
            return redirect()->back()->with('alert', $alert);    
        }

        if(request()->has('thumbnail')){
            $settings_width = 40;
            $settings_height = 40;

            if(!is_null($gifs_settings = PostSetting::where('post_type', 'gif')->first())){
                $settings_width = $gifs_settings->medium_width;
                $settings_height = $gifs_settings->medium_height;
            }

            $gif_path = storage_path() . '/app/public/gifs';

            // Ensure that original, and thumbnail folder exists
            File::ensureDirectoryExists($gif_path . '/original');
            File::ensureDirectoryExists($gif_path . '/thumbnail');

            // Save orignal image to file system
            $thumbnail = request()->file('thumbnail')->store('public/gifs/original');
            $thumbnail_name = Arr::last(explode('/', $thumbnail));

            // Save thumbnail (medium) image to file system
            $thumbnail_medium = new Imagick($gif_path . '/original/' . $thumbnail_name);
            $thumbnail_medium = $thumbnail_medium->coalesceImages();
            do {
                $thumbnail_medium->resizeImage( $settings_width, $settings_height, Imagick::FILTER_BOX, 1, true );
            } while ( $thumbnail_medium->nextImage());

            $thumbnail_medium = $thumbnail_medium->deconstructImages();
            $thumbnail_medium_name = 'thumbnailcrop' . Str::random(27) . '.' . Arr::last(explode('.', $thumbnail));
            $thumbnail_medium->writeImages($gif_path . '/thumbnail/' . $thumbnail_medium_name, true);

            // Delete thumbnail if exists.
            if(file_exists($gif->getThumbnail())){
                unlink($gif->getThumbnail());
            }

            if(file_exists($gif->getThumbnail('medium'))){
                unlink($gif->getThumbnail('medium'));
            }
        }

        $status = ($gif->status == 'published' && auth()->user()->isAdmin()) ? 'published' : ((request('status') == 'published' && !auth()->user()->isRegisteredUser()) ? 'published' : 'draft');
        $status = (request('status') == 'published' && auth()->user()->isRegisteredUser()) ? 'pending' : $status;

        // change Gif Created Time "created_at"
        $created_time = strtotime($gif->created_at);
        $created_h = date("H", $created_time);
        $created_m = date("i", $created_time);
        $created_s = date("s", $created_time);

        if (request('post_date')) {
            $date_array = explode('/', request('post_date'));

            $day = $date_array[0];
            $month = $date_array[1];
            $year = $date_array[2];

        } else {
            $day = date("d", time());
            $month = date("m", time());
            $year = date("Y", time());
        }

        $datetime_format = "%s/%s/%s %s:%s:%s";
        $post_date = strtotime(sprintf($datetime_format, $year, $month, $day, $created_h, $created_m, $created_s));

        $gif->update([
            'title'            => strip_tags(request('title')),
            'description'      => request('description'),
            'thumbnail'        => (request()->has('thumbnail')) ? $thumbnail_name : $gif->thumbnail,
            'thumbnail_medium' => (request()->has('thumbnail')) ? $thumbnail_medium_name : $gif->thumbnail_medium,
            'tags'             => (request()->has('tags')) ? implode(',', request('tags')) : NULL,
            'created_at'       => $post_date,
            'status'           => $status
        ]);

        $tag_categories = TagCategory::all();

        // Delete all previous tags on `posts_tags` table with this gif
        $delete_gifs_tags = PostsTag::where('post_id', $gif->id)->delete();

        foreach ($tag_categories as $key => $tag_category) {
            if (request()->has('tag_category_' . $tag_category->id)) {

                $tags_input = request('tag_category_' . $tag_category->id);

                foreach ($tags_input as $key => $tag_input) {
                    $tag = Tag::where(
                        [
                            'name'            => $tag_input,
                            'tag_category_id' => $tag_category->id
                        ]
                    )->first();

                    // If tag doesn't exist yet, create it
                    if (!$tag) {
                        $tag                  = new Tag;
                        $tag->name            = $tag_input;
                        $tag->tag_category_id = $tag_category->id;
                        $tag->published       = true;
                        $tag->save();
                    }

                    // Insert posts_tag
                    $gifs_tag          = new PostsTag;
                    $gifs_tag->post_id = $gif->id;
                    $gifs_tag->tag_id  = $tag->id;

                    $gifs_tag->save();
                }
            }
        }

        $alert = [
            'message' => 'Gif has been updated!',
            'class'   => 'alert--success',
        ];

        if ($status == 'pending') {
            $alert['message'] = 'Your gif will be reviewed soon.';
        }

        return redirect()->back()->with('alert', $alert);
    }

    public function saveRejectedReason( $gif_id, $content ) {
        $post_meta             = new PostsMeta;
        $post_meta->post_id    = $gif_id;
        $post_meta->meta_key   = 'rejected_reason';
        $post_meta->meta_value = $content;
        $post_meta->save();
    }

    public function deleteRejectedReason( $gif_ids ) {
        $post_meta = PostsMeta::whereIn( 'post_id', !is_array($gif_ids) ? [$gif_ids] : $gif_ids )->where('meta_key', 'rejected_reason')->delete();
    }

    public function delete()
    {
        $gif = $this->getGif(request('gif_id'));
        if (!$gif) {
            $alert = [
                'message' => 'Gif does not exists.',
                'class'   => 'alert--error',
            ];            
            return redirect()->back()->with('alert', $alert);
        }

        // Clear Rejected reason.
        $this->deleteRejectedReason( $gif->id );

        $gif->update(['status' => 'deleted']);

        return redirect('gifs');
    }

    public function deleteGif($gif= null)
    {
        if (!$gif) {
            return;
        }

        $description      = json_decode($gif->description);
        $blocks           = $description->blocks ?? [];

        // Delete thumbnails
        if ($gif->thumbnail) {
            Storage::delete('public/gifs/original/' . $gif->thumbnail);
        }

        if ($gif->thumbnail_medium) {
            Storage::delete('public/gifs/thumbnail' . $gif->thumbnail_medium);
        }

        // Delete records on `posts_tags` table
        $gifs_tags = $gif->postsTag;

        foreach ($gifs_tags as $gifs_tag) {
            $gifs_tag->delete();
        }

        // Finally, delete gif
        return $gif->delete();
    }

    public function deletePermanently()
    {
        if (!auth()->user()->isAdmin()) {
            $alert = [
                'message' => 'You are not authorized to delete gif permanently.',
                'class'   => 'alert--error',
            ];            
            return redirect()->back()->with('alert', $alert);
        }

        $gif= Post::where('post_type', 'gif')->find(request('post_id'));

        if (!$gif) {
            $alert = [
                'message' => 'Gif does not exists.',
                'class'   => 'alert--error',
            ];            
            return redirect()->back()->with('alert', $alert);
        }

        $this->deleteGif($gif);

        return redirect('gifs');

    }

    public function deleteMultiple(Request $request)
    {
        $selectedIDs     = $request->input('selectedIDs');

        // if nothing is selected just return
        if ($selectedIDs == null) {
            return back();
        }

        // Clear Rejected reason.
        $this->deleteRejectedReason( $selectedIDs );

        if ( auth()->user()->isAdmin() ) {
            Post::where('post_type', 'gif')->whereIn('id', $selectedIDs)->update(['status' => 'deleted']);
        } else {
            Post::where('post_type', 'gif')->where('user_id', auth()->user()->id)->whereIn('id', $selectedIDs)->update(['status' => 'deleted']);
        }

        $alert = [
            'message' => 'Gifs has been deleted!',
            'class'   => '',
        ];
        return back()->with('alert', $alert);
    }

    public function emptyTrash()
    {
        // Get gifs on trash
        if ( auth()->user()->isAdmin() ) {
            $trashed_gifs = Post::where('post_type', 'gif')->where('status', 'deleted')->get();
        } else {
            $trashed_gifs = Post::where('post_type', 'gif')->where('user_id', auth()->user()->id)->where('status', 'deleted')->get();
        }

        foreach ($trashed_gifs as $gif) {
            $this->deleteGif($gif);
        }

        return redirect('gifs');
    }

    public function restore($id)
    {
        $gif = $this->getGif($id);
        if (!$gif) {
            $alert = [
                'message' => 'Gif does not exists.',
                'class'   => 'alert--error',
            ];            
            return redirect()->back()->with('alert', $alert);
        }

        // Clear Rejected reason.
        if ( $gif->status == 'rejected' ) {
            $this->deleteRejectedReason( $gif->id );
        }

        $gif->update(['status' => 'draft']);

        return redirect('gifs');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('gif::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('gif::forms');
    }

    public function makeGifDraft($id) {
        $gif = $this->getGif($id);
        if (!$gif) {
            $alert = [
                'message' => 'Gif does not exists.',
                'class'   => 'alert--error',
            ];            
            return redirect()->back()->with('alert', $alert);
        }

        // Clear Rejected reason.
        $this->deleteRejectedReason( $id );

        $gif->update(['status' => 'draft']);

        return redirect('gifs');
    }

    public function makeGifPublish($id) {
        $gif = $this->getGif($id);
        if (!$gif) {
            $alert = [
                'message' => 'Gif does not exists.',
                'class'   => 'alert--error',
            ];            
            return redirect()->back()->with('alert', $alert);
        }

        // Clear Rejected reason.
        $this->deleteRejectedReason( $id );

        if (auth()->user()->isRegisteredUser()) {
            $gif->update(['status' => 'pending']);
        } else {
            $gif->update(['status' => 'published']);
        }

        return redirect('gifs');
    }

    public function makeGifReject() {
        $gif = $this->getGif(request('id'));
        if (!$gif) {
            return response()->json([
                'status' => false,
                'message' => 'Gif does not exists!'
            ]);
    
            return redirect()->back()->with('alert', $alert);    
        }

        if (!auth()->user()->isAdmin() && ! $gif->status != 'pending') {
            return response()->json([
                'status' => false,
                'message' => 'You are not authorized to edit published gif'
            ]);
    
            return redirect()->back()->with('alert', $alert);    
        }

        // Save Rejected reason.
        $this->saveRejectedReason( $gif->id, request('message') );

        $gif->update(['status' => 'rejected']);
        
        return response()->json([
            'status' => true,
            'message' => 'Gif has been rejected.'
        ]);
    }

    public function getGif($id) {
        if (auth()->user()->isAdmin()) {
            // admin has full authority for all gifs
            $gif= Post::where('post_type', 'gif')->find($id);

        } else {
            // normal users (Editor, Registered) only have authority for their gifs
            $gif = Post::where('post_type', 'gif')->where('user_id', auth()->user()->id)->find($id);
        }

        return $gif;
    }

    public function getRejectedGifs()
    {
        $gifs = Post::leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->leftJoin('posts_metas', 'posts.id', '=', 'posts_metas.post_id')
            ->select([
                'posts.id',
                'title',
                'slug',
                'posts.created_at as created_at',
                'thumbnail',
                'thumbnail_medium',
                'status',
                'posts_metas.meta_value as reject_reason',
                'users.username as username'
            ])->orderBy('created_at', 'desc');

        if (!auth()->user()->isAdmin()) {
            // get user specific gifs only
            $gifs = $gifs->where('user_id', auth()->user()->id);
        }

        if(request()->has('gifsearch')){
            $gifs->where('title', 'LIKE', '%' . request('gifsearch') . '%')
            ->orWhere('users.name', 'LIKE', '%' . request('gifsearch') . '%');
        }

        $gifs = $gifs->where( 'post_type', 'gif' )->where('status', 'rejected')->where('meta_key', '=', 'rejected_reason');

        $limit = request('limit') ? request('limit') : 25;

        $gifs = $gifs->paginate($limit, ['*'], 'r_page');

        return $gifs;
    }    
}
