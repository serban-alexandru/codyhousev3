@extends('site1.layouts.app')
@section('content')
@include('site1.partials.alert')
@include('site1.partials.draggable-gallery')
<section class="margin-bottom-lg">
    <div class="container max-width-adaptive-lg">
        <h3 class="border-left border-4 padding-left-xxs color-contrast-medium border-primary radius-sm">New</h3>
    </div>
</section>
@include('site1.partials.article-gallery')
@include('site1.partials.footer')
@endsection