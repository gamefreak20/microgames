@extends('layouts.main')

@section('css')
<link href="{{ asset('./css/create.css') }}" rel="stylesheet">
<link href="{{ asset('./css/login.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row fullHeight">
  <div class="col-sm sidePictureLogin">
    <div class="layer">
    </div>
  </div>
  <div class="col-sm">
    <div class="formWrap">
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <hr class="formHr"/>
        <div class="form-group">
          <p class="formTitle">Username</p>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">
          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <hr class="formHr"/>

        <div class="form-group">
          <p class="formTitle">First name</p>
          <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First name">
          @error('first_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <hr class="formHr"/>

        <div class="form-group">
          <p class="formTitle">Last name</p>
          <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Last name">
          @error('last_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <hr class="formHr"/>

        <div class="form-group">
          <p class="formTitle">Email address</p>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <hr class="formHr"/>

        <div class="form-group">
          <p class="formTitle">Password</p>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <input id="password-confirm" type="password" class="form-control inputPassword" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirmation">
        </div>

        <hr class="formHr"/>

        <input type="submit" name="submit" class="btn btnPrimary" value="Register">

        <hr class="formHr"/>
      </div>
    </div>
  </div>
@endsection
