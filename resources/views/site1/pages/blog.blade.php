@extends('site1.layouts.app')
@section('content')

<article class="padding-bottom-lg">
  <div class="t-article-v2__hero">
    <div
      class="t-article-v2__cover"
      aria-hidden="true"
      @if($post->thumbnail)
        style="background-image: url('{{ $post->showThumbnail() }}');"
      @endif
    ></div>

    <div class="t-article-v2__intro container max-width-adaptive-sm margin-bottom-lg">
      <div class="text-component text-center">
        <h1 class="text-xxxl">{{ $post->title }}</h1>
        <p class="text-sm">
          By
          <a href="{{ route('pages.profile.user', $post->user->username) }}">
            {{ $post->user->name }}
          </a>
        </p>
      </div>

      <div class="t-article-v2__divider margin-top-lg" aria-hidden="true"><span></span></div>
    </div>
  </div>

  <div class="container max-width-adaptive-sm">
    <div class="line-height-sm v-space-sm">
      <div class="sticky-banner bg shadow-sm js-sticky-banner" data-target-in="#sticky-banner-target">
        <section class="socials text-right">
          <div class="container max-width-sm">
            <div class="padding-sm margin-xxxxs">

            <ul class="socials__btns flex flex-center gap-sm flex-wrap">

              <li>
                It was going to be a lonely trip back to the real world Share:
              </li>

              <li>
                <a href="#0">
                  <svg class="icon" viewBox="0 0 32 32"><title>Follow us on Twitter</title><g><path d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3 c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5 c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"></path></g></svg>
                </a>
              </li>

              <li>
                <a href="#0">
                  <svg class="icon" viewBox="0 0 32 32"><title>Follow us on Facebook</title><path d="M32,16A16,16,0,1,0,13.5,31.806V20.625H9.438V16H13.5V12.475c0-4.01,2.389-6.225,6.043-6.225a24.644,24.644,0,0,1,3.582.312V10.5H21.107A2.312,2.312,0,0,0,18.5,13v3h4.438l-.71,4.625H18.5V31.806A16,16,0,0,0,32,16Z"></path></svg>
                </a>
              </li>

            </ul>
          </div>
        </section>
      </div>

      <section class="max-height-100vh bg-contrast-lower" id="sticky-banner-target">
        <div class="container max-width-sm min-height-100vh flex flex-center">
          <div class="text-component text-center">
            <h1>Sticky Banner</h1>
            <p>👇 The banner becomes visible when you scroll past this section.</p>
          </div>
        </div>
      </section>

      <div class="container max-width-sm padding-y-xxl">
        <div class="text-component line-height-lg v-space-md">
          <x-editorjs-block :data="$post->description" />
        </div>
      </div>

<!-- Begin Comments -->
    <section class="comments margin-top-xl margin-bottom-xxxxl">
      <div class="margin-bottom-lg">
        <div class="flex gap-sm flex-column flex-row@md justify-between items-center@md">
          <div>
            <h1 class="text-md">Comments</h1>
          </div>

          <form aria-label="Choose sorting option">
            <div class="flex flex-wrap gap-sm text-sm">
              <div class="position-relative">
                <input class="comments__sorting-label" type="radio" name="sortComments" id="sortCommentsPopular" checked>
                <label for="sortCommentsPopular">Popular</label>
              </div>

              <div class="position-relative">
                <input class="comments__sorting-label" type="radio" name="sortComments" id="sortCommentsNewest">
                <label for="sortCommentsNewest">Newest</label>
              </div>
            </div>
          </form>
        </div>
      </div>

      <ul class="margin-bottom-lg">
        <li class="comments__comment">
          <div class="flex items-start">
            <a href="#0" class="comments__author-img">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>

            <div class="comments__content margin-top-xxxs">
              <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit sit sed cupiditate vel, sapiente aspernatur, reiciendis repellat ad delectus quia ea ipsam minima in dignissimos commodi velit nemo voluptatibus quisquam.</p>
              </div>

              <div class="margin-top-xs text-sm">
                <div class="flex gap-xxs items-center">
                  <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                    <span class="comments__vote-icon-wrapper">
                      <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                    </span>

                    <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                  </button>

                  <span class="comments__inline-divider" aria-hidden="true"></span>

                  <button class="reset comments__label-btn js-tab-focus">Reply</button>

                  <span class="comments__inline-divider" aria-hidden="true"></span>

                  <time class="comments__time" aria-label="1 hour ago">1h</time>
                </div>
              </div>
            </div>
          </div>
        </li>

        <li class="comments__comment">
          <div class="flex items-start">
            <a href="#0" class="comments__author-img">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>

            <div class="comments__content margin-top-xxxs">
              <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
              </div>

              <div class="margin-top-xs text-sm">
                <div class="flex gap-xxs items-center">
                  <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                    <span class="comments__vote-icon-wrapper">
                      <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                    </span>

                    <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                  </button>

                  <span class="comments__inline-divider" aria-hidden="true"></span>

                  <button class="reset comments__label-btn js-tab-focus">Reply</button>

                  <span class="comments__inline-divider" aria-hidden="true"></span>

                  <time class="comments__time" aria-label="1 hour ago">1h</time>
                </div>
              </div>
            </div>
          </div>

          <details class="comments__details details js-details">
            <summary class="details__summary color-primary js-details__summary text-sm" role="button">
              <span class="flex items-center">
                <svg class="icon icon--xxs margin-right-xxs" aria-hidden="true" viewBox="0 0 12 12"><path d="M2.783.088A.5.5,0,0,0,2,.5v11a.5.5,0,0,0,.268.442A.49.49,0,0,0,2.5,12a.5.5,0,0,0,.283-.088l8-5.5a.5.5,0,0,0,0-.824Z"></path></svg>
                <span>View 2 replies</span>
              </span>
            </summary>

            <div class="details__content js-details__content">
              <ul>
                <li class="comments__comment">
                  <div class="flex items-start">
                    <a href="#0" class="comments__author-img">
                      <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
                    </a>

                    <div class="comments__content margin-top-xxxs">
                      <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                        <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
                      </div>

                      <div class="margin-top-xs text-sm">
                        <div class="flex gap-xxs items-center">
                          <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                            <span class="comments__vote-icon-wrapper">
                              <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                            </span>

                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                          </button>

                          <span class="comments__inline-divider" aria-hidden="true"></span>

                          <button class="reset comments__label-btn js-tab-focus">Reply</button>

                          <span class="comments__inline-divider" aria-hidden="true"></span>

                          <time class="comments__time" aria-label="1 hour ago">1h</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="comments__comment">
                  <div class="flex items-start">
                    <a href="#0" class="comments__author-img">
                      <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
                    </a>

                    <div class="comments__content margin-top-xxxs">
                      <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                        <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
                      </div>

                      <div class="margin-top-xs text-sm">
                        <div class="flex gap-xxs items-center">
                          <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                            <span class="comments__vote-icon-wrapper">
                              <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                            </span>

                            <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                          </button>

                          <span class="comments__inline-divider" aria-hidden="true"></span>

                          <button class="reset comments__label-btn js-tab-focus">Reply</button>

                          <span class="comments__inline-divider" aria-hidden="true"></span>

                          <time class="comments__time" aria-label="1 hour ago">1h</time>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </details>
        </li>

        <li class="comments__comment">
          <div class="flex items-start">
            <a href="#0" class="comments__author-img">
              <img src="{{ asset('assets/img/author-img-1.jpg') }}" alt="Author picture">
            </a>

            <div class="comments__content margin-top-xxxs">
              <div class="text-component text-sm v-space-xs line-height-sm read-more js-read-more" data-characters="150" data-btn-class="comments__readmore-btn js-tab-focus">
                <p><a href="#0" class="comments__author-name" rel="author">Olivia Gribben</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, accusantium consequatur. Perspiciatis!</p>
              </div>

              <div class="margin-top-xs text-sm">
                <div class="flex gap-xxs items-center">
                  <button class="reset comments__vote-btn js-comments__vote-btn js-tab-focus" data-label="Like this comment along with 5 other people" aria-pressed="false">
                    <span class="comments__vote-icon-wrapper">
                      <svg class="icon block" viewBox="0 0 12 12" aria-hidden="true"><path d="M11.045,2.011a3.345,3.345,0,0,0-4.792,0c-.075.075-.15.225-.225.3-.075-.074-.15-.224-.225-.3a3.345,3.345,0,0,0-4.792,0,3.345,3.345,0,0,0,0,4.792l5.017,4.718L11.045,6.8A3.484,3.484,0,0,0,11.045,2.011Z"></path></svg>
                    </span>

                    <span class="margin-left-xxxs js-comments__vote-label" aria-hidden="true">5</span>
                  </button>

                  <span class="comments__inline-divider" aria-hidden="true"></span>

                  <button class="reset comments__label-btn js-tab-focus">Reply</button>

                  <span class="comments__inline-divider" aria-hidden="true"></span>

                  <time class="comments__time" aria-label="1 hour ago">1h</time>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>

      <form>
        <fieldset>
          <legend class="form-legend">Add a new comment</legend>

          <div class="margin-bottom-xs">
            <label class="sr-only" for="commentNewContent">Your comment</label>
            <textarea class="form-control width-100%" name="commentNewContent" id="commentNewContent"></textarea>
          </div>

          <div>
            <button class="btn btn--primary">Post comment</button>
          </div>
        </fieldset>
      </form>
    </section>
<!-- End Comments -->
  </div>
</section>
@endsection