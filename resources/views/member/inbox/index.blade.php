@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    <a href="{{route('memberInboxCreateForm')}}">make</a>

    @foreach($inbox as $message)
        Title: {{$message->title}}
        Send by: {{$message->user()->first()->name}}
        <a href="{{route('memberInboxDetail', $message->id)}}">detail</a>
        {!! Form::open(['method'=>'DELETE', 'action'=>['MemberInboxController@destroy', $message->id], 'id' => 'deleteInboxForm']) !!}
{{--        <form id="deleteInboxForm" action="{{route('memberInboxDelete')}}" method="post">--}}
            {{ csrf_field() }}
            <a href="#" onclick="document.getElementById('deleteInboxForm').submit();">Delete</a>
        </form>
    @endforeach

@endsection
