@extends('admin::layouts.master')

@section('title', 'Login')
@section('content')
<div class="parent grid justify-center padding-md height-100vh" style="align-items: center;">
    <div class="col-12@sm col-8@md">
        <form class="login-form" action="{{ route('admins.login') }}" method="POST">
            @csrf
            <div class="text-component text-center margin-bottom-sm">
                <h1>Log in</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="margin-bottom-sm">
                <label class="form-label margin-bottom-xxxs" for="email">Email</label>
                <input class="form-control width-100%" type="email" name="email" id="email"
                    placeholder="email@myemail.com" value="{{ old('email') }}"
                    @if ($errors->any() && $errors->get('email')) aria-invalid="true" @endif>
                    @if (($errors->any() && $error = $errors->get('email')))
                        <small class="color-error error-message">
                            {!! implode("<br/>", $error) !!}
                        </small>
                    @endif
            </div>

            <div class="margin-bottom-sm">
                <div class="flex justify-between margin-bottom-xxxs">
                    <label class="form-label" for="inputPassword1">Password</label>
                    <span class="text-sm"><a href="#0">Forgot?</a></span>
                </div>

                <input class="form-control width-100%" type="password"
                    name="password" id="password" placeholder="***********"
                    @if ($errors->any() && $errors->get('password')) aria-invalid="true" @endif>
                    @if (($errors->any() && $error = $errors->get('password')))
                        <small class="color-error error-message">
                            {!! implode("<br/>", $error) !!}
                        </small>
                    @endif
            </div>

            <div class="margin-bottom-sm">
                <button type="submit" class="btn btn--primary btn--md width-100%">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function () {
    $('.form-control[aria-invalid="true"]').on('keydown', function () {
        $('.error-message').hide();
        $(this).attr('aria-invalid', false);
    });
});
</script>
@endpush