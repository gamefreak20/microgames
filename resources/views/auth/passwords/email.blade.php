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
      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif

        <div class="form-group">
          <p class="formTitle">E-Mail Address</p>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail...">
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <button type="submit" class="btn btnPrimary">
            {{ __('Send Password Reset Link') }}
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
