@extends('site1.layouts.app')
@section('content')
<section class="margin-top-md">
<div class="js-infinite-scroll container max-width-adaptive-lg" data-path="/app/components/source/infinite-scroll/infinite-scroll-{n}.txt" data-container=".js-infinite-scroll__content">
    <p class="text-xl margin-bottom-md">Tag Title, Category Title or Search Term</p>

    <ul class="js-infinite-scroll__content grid gap-md" aria-live="true">

      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>
  
      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>
  
      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>
  
      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>
  
      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>
  
      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>
  
      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>
  
      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>
  
      <li class="dcol-6 col-5@sm">
        <div class="card">
          <figure class="card__img">
            <a href="http://127.0.0.1:8000/site1/blog">
              <img src="{{ asset('assets/img/team-img-12.jpg') }}" alt="Card preview img">
            </a>
          </figure>

          <div class="card__content card-v8 bg">
            <p class="text-sm color-contrast-medium margin-bottom-sm">Restaurant</p>
            <div class="text-component">
              <h4><span class="card-v8__title">Almost before we knew it, we had left the ground.</span></h4>
          </div>
        </div>
      </li>

    </ul>
  
    <div class="text-center margin-y-md is-hidden js-infinite-scroll__loader" aria-hidden="true">
      <svg class="icon icon--md icon--is-spinning" viewBox="0 0 32 32"><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" stroke="currentColor" fill="none"><circle cx="16" cy="16" r="15" opacity="0.4"></circle><path d="M16,1A15,15,0,0,1,31,16" stroke-linecap="butt"></path></g></svg>
    </div>
  
    <div class="margin-top-md flex justify-center">
      <button class="btn btn--primary js-infinite-scroll__btn">Load More</button>
    </div>
  </div>
</section>
@endsection