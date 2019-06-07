@extends('layouts.main')

@section('css')
  <link href="{{ asset('./css/profile.css') }}" rel="stylesheet">
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['MemberProfileController@patch', $user->id]]) !!}

<div class="welcomeBar">
  <p class="welcome">Welcome</p><p class="username"> {{$user->first_name}} {{$user->last_name}} ({{$user->name}})</p>
</div>
<div>
  <div class="container">
    <div class="row inputFields">
      <div class="col-sm">
        <p>Username: </p><input type="text" name="name" value="{{$user->name}}" class="form-control required"/>
      </div>
    </div>
    <div class="row inputFields">
      <div class="col-sm">
        <p>First name: </p><input type="text" name="first_name" value="{{$user->first_name}}" class="form-control required"/>
      </div>
      <div class="col-sm">
        <p>Last name: </p><input type="text" name="last_name" value="{{$user->last_name}}" class="form-control required"/>
      </div>
    </div>
    <div class="row inputFields">
      <div class="col-sm">
        <p>Email: </p><input type="text" name="email" value="{{$user->email}}" class="form-control required"/>
      </div>
    </div>
    <div class="row inputFields">
      @if ($user->password != null)
      <div class="col-sm">
        <p>New password: </p><input type="password" name="password1" class="form-control">
      </div>
      <div class="col-sm">
        <p>Repeat password: </p><input type="password" name="password2" class="form-control">
      </div>
      @else
      <div class="col-sm">
        <p>You cannot change your password, because you have logged in with a external account</p>
      </div>
      @endif
    </div>
    <div class="row inputFields">
      <div class="col-sm">
        <input type="submit" name="submit" class="btn btnPrimary btnInput" value="Save">
      </div>
    </div>
    @if ($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
  </div>
</div>
{!! Form::close() !!}

@endsection
