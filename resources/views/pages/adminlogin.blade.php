@extends('layouts.app')
@section('content')
<form class="login-form max-width-adaptive-xs position-relative">
    <div class="text-component text-center margin-bottom-sm">
  
    <div class="margin-bottom-sm">
      <label class="form-label margin-bottom-xxxs" for="inputEmail1">Email</label>
      <input class="form-control width-100%" type="email" name="inputEmail1" id="inputEmail1" placeholder="email@myemail.com">
    </div>
  
    <div class="margin-bottom-sm">
      <div class="flex justify-between margin-bottom-xxxs">
        <label class="form-label" for="inputPassword1">Password</label> 
        <span class="text-sm"><a href="#0">Forgot?</a></span>
      </div>
  
      <input class="form-control width-100%" type="password" name="inputPassword1" id="inputPassword1">
    </div>
  
    <div class="margin-bottom-sm">
      <button class="btn btn--primary btn--md width-100%">Login</button>
    </div>
  
    <div class="text-center">
    </div>
  </form>
@endsection