@extends('site1.layouts.app')

@section('content')
	@include('partials.posts.featured-post')
	<div class="margin-bottom-lg"></div>
	@include('partials.posts.draggable-gallery')

	<div class="margin-top-md container max-width-lg">
		<div class="flex justify-between">
		  <p class="text-xl divider-title">Best of Saigon</p>
		  	<div class="margin-left-sm">
				<a href="{{ url('/') }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><title>ic_chevron_right_36px</title><rect data-element="frame" x="0" y="0" width="36" height="36" rx="18" ry="18" stroke="none" fill="#e5e5e5"></rect>
						<g fill="#a8a8a8">
							<path d="M15 9l-2.12 2.12L19.76 18l-6.88 6.88L15 27l9-9z"></path>
					</g>
				</a>
				</svg>
			</div>
		</div>
	  </div>
	  @include('partials.posts.draggable-gallery-simple')

	  <div class="margin-top-md container max-width-lg">
		<div class="flex justify-between">
		  <p class="text-xl divider-title">News</p>
		  	<div class="margin-left-sm">
				<a href="{{ url('/') }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><title>ic_chevron_right_36px</title><rect data-element="frame" x="0" y="0" width="36" height="36" rx="18" ry="18" stroke="none" fill="#e5e5e5"></rect>
						<g fill="#a8a8a8">
							<path d="M15 9l-2.12 2.12L19.76 18l-6.88 6.88L15 27l9-9z"></path>
					</g>
				</a>
				</svg>
			</div>
		</div>
	  </div>
	  @include('partials.posts.draggable-gallery-simple')

	  <div class="margin-top-md container max-width-lg">
		<div class="flex justify-between">
		  <p class="text-xl divider-title">Food & Drinks</p>
		  	<div class="margin-left-sm">
				<a href="{{ url('/') }}">
					<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><title>ic_chevron_right_36px</title><rect data-element="frame" x="0" y="0" width="36" height="36" rx="18" ry="18" stroke="none" fill="#e5e5e5"></rect>
						<g fill="#a8a8a8">
							<path d="M15 9l-2.12 2.12L19.76 18l-6.88 6.88L15 27l9-9z"></path>
					</g>
				</a>
				</svg>
			</div>
		</div>
	  </div>
	  @include('partials.posts.draggable-gallery-simple')
@endsection

@section('before-end')
	@include('custom-scripts.infinite-scroll')
@endsection
