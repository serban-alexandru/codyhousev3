@extends('site1.layouts.app')
@section('content')
<section class="margin-top-md">
    <div class="container max-width-adaptive-lg">
      <p class="text-xl margin-bottom-md">{{ $page_title }}</p>
      <ul class="grid-auto-md gap-md">
      @foreach($posts as $key => $post)
        <li>
          <span class="card-v8 bg radius-lg shadow-none">
            <a href="
              {{
                  route(
                      'pages.post',
                      [
                          'locale' => config('app.locale'),
                          'slug'   => $post->slug
                      ]
                  )
              }}
            ">
            @if($post->thumbnail)
                <figure class="card__img card__img-cropped">
                    <img src="{{ $post->showThumbnail('medium') }}" alt="Image of {{ $post->title }}">
                </figure>
            @else
                <span class="card__img card__img-cropped bg-black bg-opacity-50%"></span>
            @endif
            </a>

            <footer class="padding-sm">
              <p class="text-sm color-contrast-medium margin-bottom-sm post-thumbnail-tags-sm">
                @php
                    $tag_categories = Modules\Tag\Entities\TagCategory::all();
                    $posts_tags     = $post->postsTag;
                    $category_names = [];
                @endphp
                @foreach($tag_categories as $key => $tag_category)
                    @php
                        $show_category = false;

                        foreach($posts_tags as $post_tag){
                            $tag = Modules\Tag\Entities\Tag::find($post_tag->tag_id);

                            if($tag->tag_category_id === $tag_category->id){
                                $show_category = true;
                                break;
                            }
                        }

                        if($show_category){
                            array_push($category_names, $tag_category->name);
                        }
                    @endphp

                @endforeach
                @foreach($category_names as $cn_key => $category_name)
                    <a
                      href="{{ route('pages.tag-categories', $category_name) }}"
                      class="color-contrast-medium post-thumbnail-tags-pill"
                      draggable="false" ondragstart="return false;"
                    >
                      {{ $category_name }}
                    </a>
                    @if($cn_key < count($category_names) - 1)
                        ,
                    @endif
                @endforeach
                &nbsp;
              </p>
              <div class="text-component">
                <h4>
                  <a href="
                    {{
                        route(
                            'pages.post',
                            [
                                'locale' => config('app.locale'),
                                'slug'   => $post->slug
                            ]
                        )
                    }}
                  " class="card-v8__title text-sm">
                    {{ $post->title }}
                  </a>
                </h4>
              </div>
            </footer>
          </span>
        </li>
      @endforeach
      </ul>
    </div>
  </section>
@endsection