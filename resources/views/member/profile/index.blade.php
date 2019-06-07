@extends('layouts.main')

@section('css')
  <link href="{{ asset('./css/profile.css') }}" rel="stylesheet">
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

  <div class="welcomeBar">
    <p class="welcome">Welcome</p><p class="username"> {{$user->first_name}} {{$user->last_name}} ({{$user->name}})</p>
  </div>
  <div>
    <div class="container">
      <div class="row inputFields">
        <div class="col-sm">
          <p>Username: </p><input type="text" value="{{$user->name}}" disabled class="form-control"/>
        </div>
      </div>
      <div class="row inputFields">
        <div class="col-sm">
          <p>First name: </p><input type="text" value="{{$user->first_name}}" disabled class="form-control"/>
        </div>
        <div class="col-sm">
          <p>Last name: </p><input type="text" value="{{$user->last_name}}" disabled class="form-control"/>
        </div>
      </div>
      <div class="row inputFields">
        <div class="col-sm">
          <p>Email: </p><input type="text" value="{{$user->email}}" disabled class="form-control"/>
        </div>
        <div class="col-sm">
          <p>Level: </p><input type="text" value="{{$user->level}}" disabled class="form-control"/>
        </div>
      </div>
      <div class="row inputFields">
        <div class="col-sm">
          <p>Exp: </p><input type="text" value="{{$user->exp}}" disabled class="form-control"/>
        </div>
        <div class="col-sm">
          <p>Role: </p><input type="text" value="{{$user->roles->first()->name}}" disabled class="form-control"/>
        </div>
      </div>
      <div class="row inputFields">
        <div class="col-sm">
          <button type="button" name="submit" class="btn btnPrimary btnInput" onclick="window.location='{{route('memberProfileEditForm')}}'">Edit</button>
        </div>
      </div>
    </div>
  </div>



@endsection
