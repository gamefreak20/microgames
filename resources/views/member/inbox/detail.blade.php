@extends('layouts.main')

@section('css')
<link href="{{ asset('./css/create.css') }}" rel="stylesheet">
<link href="{{ asset('./css/inbox.css') }}" rel="stylesheet">
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')
  <div class="messageBox">
    <p><a href="{{route('memberInboxIndex')}}">Go back</a></p>
  </div>
  <div class="mailBox container">
    <p class="messageTitle">{{$message->title}}</p>
    <div class="messageSender"><p class="tome">From: </p><p class="nameSender">{{$message->user()->first()->name}}</p><p class="tome"> to me</p></div>
    <div>
      <p class="messageText">{{$message->text}}</p>
    </div>

  </div>


@endsection
