<section class="margin-top-md">
  <div class="drag-gallery js-drag-gallery container max-width-adaptive-lg">
    <ul class="drag-gallery__list gap-md">
      @foreach($posts as $post)
        <li class="drag-gallery__item">
          <div class="card">
            @if($post->thumbnail)
                <figure class="card__img">
                <a href="http://127.0.0.1:8000/site1/blog" draggable="false" ondragstart="return false;">
                    <img src="{{ $post->showThumbnail() }}" alt="Card preview img">
                </a>
                </figure>
            @endif

            <div class="card__content card-v8 bg">
              <p class="text-sm color-contrast-medium margin-bottom-sm">
                {{ $post->title }}
              </p>
              <div class="text-component">
                @if($post->description)
                    <h4>
                        <div class="card-v8__title">
                            <x-editorjs-block :data="$post->description" :excerpt="true" />
                        </div>
                    </h4>
                @endif
            </div>
          </div>
        </li>
      @endforeach
    </ul>
    <div aria-hidden="true" class="drag-gallery__gesture-hint"></div>
    <div class="custom-drag-gallery-end-overlay right"></div><!-- /.custom-gallery-end-overlay -->
  </div><!-- /.drag-gallery js-drag-gallery container max-width-adaptive-lg -->
</section>