<section class="margin-top-md">
    <div class="drag-gallery js-drag-gallery container max-width-adaptive-lg">
      <ul class="drag-gallery__list gap-md">
        @foreach($posts as $post)
            <li class="drag-gallery__item">
                <div class="card">
                    @if($post->thumbnail)
                        <figure class="card__img">
                            <a href="http://127.0.0.1:8000/site1/blog" draggable="false" ondragstart="return false;">
                                <img src="{{ $post->showThumbnail('medium') }}" alt="Card preview img">
                            </a>
                        </figure>
                    @endif

                    <div class="card__content">
                    <div class="featured__headline">
                        <h4 class="margin-bottom-md">
                        <a href="#0" draggable="false" ondragstart="return false;">
                            {{ $post->title }}
                        </a>
                        </h4>
                        @if($post->description)
                            <div class="text-sm color-contrast-medium">
                                <x-editorjs-block :data="$post->description" :excerpt="true" />
                            </div>
                        @endif
                    </div>

                    <div class="author author--meta margin-top-md">
                        @if($post->user->avatar)
                            <a href="http://127.0.0.1:8000/site1/profile" class="author__img-wrapper" draggable="false" ondragstart="return false;">
                                <img src="{{ $post->user->getAvatar() }}" alt="Author picture">
                            </a>
                        @else
                            <span class="author__img-wrapper"></span>
                        @endif

                        <div class="featured__headline v-space-xxs">
                            <h4 class="text-sm">
                                <a href="#0" rel="author" draggable="false" ondragstart="return false;">
                                    {{ $post->user->name }}
                                </a>
                            </h4>
                            <p class="text-sm color-contrast-medium">
                                <time datetime="{{ $post->created_at->format('Y-m-d') }}">
                                    {{ $post->created_at->format('F d, Y') }}
                                </time>
                                &mdash; 5 min read
                            </p>
                        </div>
                    </div>

                    </div>
                </div>
            </li>
        @endforeach

      </ul>
      <div aria-hidden="true" class="drag-gallery__gesture-hint"></div>
      <div class="custom-drag-gallery-end-overlay right"></div><!-- /.custom-gallery-end-overlay -->
    </div><!-- /.drag-gallery js-drag-gallery container max-width-adaptive-lg -->
  </section>