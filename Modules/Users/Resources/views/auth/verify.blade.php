@extends('site1.layouts.app')

@section('content')
<div class="container max-width-lg">
    <div class="row justify-content-center">
        <div class="margin-top-md margin-bottom-md">
            <div class="">
                <h4 class="margin-bottom-sm">{{ __('Verify Your Email Address') }}</h4>

                <div>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn--primary btn-link p-0 m-0 align-baseline">{{ __('click here') }}</button>{{ __(' to request another') }}.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
