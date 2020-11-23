<section class="margin-top-md">
  <div class="drag-gallery js-drag-gallery container max-width-adaptive-lg">
    <ul class="drag-gallery__list drag-gallery__list-align-top gap-md">
      @foreach($posts as $post)
        <li class="drag-gallery__item">
          <div class="card shadow-none">
            @if($post->thumbnail)
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
                " draggable="false" ondragstart="return false;" class="card__img card__img-cropped">
                    <img src="{{ $post->showThumbnail('medium') }}" alt="Image of {{ $post->title }}">
                </a>
            @else
                <span class="card__img card__img-cropped bg-black bg-opacity-50%"></span>
            @endif

            <div class="card__content card-v8 bg">
              <p class="text-sm color-contrast-medium margin-bottom-sm">
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
                    {{ $category_name }}
                    @if($cn_key < count($category_names) - 1)
                        ,
                    @endif
                @endforeach
                &nbsp;
              </p>
              <div class="text-component">
                <h4>
                    <span class="card-v8__title">
                        {{ $post->title }}
                    </span>
                </h4>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
    <div aria-hidden="true" class="drag-gallery__gesture-hint"></div>
    <div class="custom-drag-gallery-end-overlay right"></div><!-- /.custom-gallery-end-overlay -->
  </div><!-- /.drag-gallery js-drag-gallery container max-width-adaptive-lg -->
</section>