<section class="feature-bottom container max-width-adaptive-lg margin-top-md margin-bottom-md">
    <div class="grid gap-md">
      <div class="col-9@md featured-post margin-bottom-xl">

        @if($featured_post)
            @if($featured_post->thumbnail)
                <a href="#0" class="featured__img-wrapper">
                    <figure>
                        <img src="{{ $featured_post->showThumbnail() }}" alt="Image of {{ $featured_post->title }}">
                    </figure>
                </a>
            @endif
            <h1 class="featured__headline-main line-height-xxxl feature-v12__offset-item text-left padding-left-sm">
                <a href="#0">{{ $featured_post->title }}</a>
            </h1>
        @endif
      </div>

      <div class="col-6@md">
        <div class="stories">
            @foreach($featured_list as $key => $post)
                <li class="stories__story">
                    @if($post->thumbnail)
                        <a href="#0" class="stories__img-wrapper">
                            <figure>
                                <img src="{{ $post->showThumbnail() }}" alt="Image of {{ $post->title }}">
                            </figure>
                        </a>
                    @else
                        <span class="post-table-image-wrapper post-table-image bg-black bg-opacity-50% margin-right-sm"></span>
                    @endif

                    <div class="featured__headline line-height-xl v-space-sm text-sm">
                        <h4 class="padding-bottom-md">
                            <a href="#0">
                                {{ $post->title }}
                            </a>
                        </h4>
                        <div class="author author--minimal padding-bottom-xs">
                        <a href="#0" class="author__img-wrapper">
                            <img src="{{ asset('assets/img/team-img-1.jpg') }}" alt="Author picture">
                        </a>

                        <div class="author__content">
                            <h4 class="stories__metadata">
                                by
                                <a href="#0" rel="author">
                                    {{ $post->user->name }}
                                </a>
                            </h4>
                        </div>
                        </div>
                        <p class="stories__metadata padding-bottom-xs">
                            <time datetime="{{ $post->created_at->format('Y-m-d') }}">
                                {{ $post->created_at->format('F d, Y') }}
                            </time>
                            <span class="stories__separator" role="separator"></span>
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
                                    <a href="#0" data-key="{{ $key }}" data-count="{{ $tag_categories->count() }}">{{ $tag_category->name }}</a>
                                @endif
                            @endforeach
                        </p>
                    </div>
                </li>
            @endforeach
        </div>

      </div>
    </div>
  </section>