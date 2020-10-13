@extends('site1.layouts.app')

@section('content')
	@include('partials.posts.justified-grid')
@endsection

@section('before-end')
	@include('custom-scripts.infinite-scroll')
@endsection
