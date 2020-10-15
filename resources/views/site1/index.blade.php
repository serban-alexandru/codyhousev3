@extends('site1.layouts.app')

@section('content')
	@include('partials.posts.draggable-gallery')
	<div class="margin-top-md container max-width-lg">
		<div class="flex justify-between">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>bookmark-2</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="1" transform="translate(0.5 0.5)" fill="#a8a8a8" stroke="#a8a8a8"><polygon fill="none" stroke="#a8a8a8" stroke-miterlimit="10" points="20,22 12,17 4,22 4,1 20,1 " transform="translate(0, 0)"></polygon></g></svg>
		  <p class="text-md">Best of Saigon</p>
		  <div class="margin-left-sm">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>ic_keyboard_arrow_right_24px</title><rect data-element="frame" x="0" y="0" width="24" height="24" rx="12" ry="12" stroke="none" fill="#fcfcfc"></rect>
				<g fill="#a8a8a8">
					<path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
				</g>
			</svg>
		</div>
		</div>
	  </div>
	@include('partials.posts.justified-grid')
@endsection

@section('before-end')
	@include('custom-scripts.infinite-scroll')
@endsection
