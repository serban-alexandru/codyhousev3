<section class="margin-top-md">
  <div class="drag-gallery js-drag-gallery container max-width-adaptive-lg">
    <ul class="drag-gallery__list gap-md">
      @foreach($posts as $post)
        <li class="drag-gallery__item">
          <div class="card">
            <a href="http://127.0.0.1:8000/site1/blog" draggable="false" ondragstart="return false;">
              <figure class="card__img card__img-cropped bg-black bg-opacity-50%">
                @if($post->thumbnail)
                  <img src="{{ $post->showThumbnail('medium') }}" alt="Card preview img">
                @endif
              </figure>
            </a>

            <div class="card__content card-v8 bg">
              <p class="text-sm color-contrast-medium margin-bottom-sm">
                @php
                    $tag_categories = Modules\Tag\Entities\TagCategory::all();
                    $posts_tags     = $post->postsTag;
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
                    @endphp

                    @if($show_category)
                        @if($key > 0)
                            ,
                        @endif
                        {{ $tag_category->name }}
                    @endif
                @endforeach
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