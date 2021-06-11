@extends('templates.layouts.index')

@isset($page_title)
  @section('title-tag'){!! $page_title !!}@endsection
@endisset

@section('content')
<x-posts.lists.masonry-v1 type="gif" />
@endsection
