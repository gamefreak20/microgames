@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
    <script src="{{asset('js/createInbox.js')}}"></script>
@endsection

@section('lateJavascript')
@endsection


@section('content')

    {!! Form::open(['method'=>'post', 'action'=>'MemberInboxController@store', 'files'=>true]) !!}
        To who: <input type="text" id="searchUser">
        <div id="searchedUsers"></div>
        <input type="hidden" name="user_id_receiver" id="user_id_receiver">

        Title: <input type="text" name="title">
        Text: <textarea name="text"></textarea>
        <input type="submit" name="submit" value="send">
    {!! Form::close() !!}

@endsection
