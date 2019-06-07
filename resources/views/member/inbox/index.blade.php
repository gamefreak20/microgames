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



<div>
  <div class="messageBox">
    <p><a href="{{route('memberInboxCreateForm')}}">Make a new message</a></p>
  </div>
  <div class="gradientBox">
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titel:</th>
            <th scope="col">Verstuurd door:</th>
            <th scope="col">Actie:</th>
          </tr>
        </thead>
        <tbody>
        @foreach($inbox as $message)
          <tr>
            <th scope="row">1</th>
            <td>{{$message->title}}</td>
            <td>{{$message->user()->first()->name}}</td>
            <td><a href="{{route('memberInboxDetail', $message->id)}}">Lees bericht</a>
              {!! Form::open(['method'=>'DELETE', 'action'=>['MemberInboxController@destroy', $message->id], 'id' => 'deleteInboxForm']) !!}
              {{--<form id="deleteInboxForm" action="{{route('memberInboxDelete')}}" method="post">--}}
                    {{ csrf_field() }}
                    <a href="#" onclick="document.getElementById('deleteInboxForm').submit();">Delete</a>
                  </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
