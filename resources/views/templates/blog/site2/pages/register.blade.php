@extends('templates.blog.site2.layouts.home')
@section('content')
<section class="container max-width-adaptive-xs margin-top-md margin-bottom-md text-center">
    <h1>Register</h1>
    <x-auth.register-form />
</section>
@endsection
