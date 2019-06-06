@extends('layouts.main')

@section('css')
<link href="{{ asset('./css/create.css') }}" rel="stylesheet">
@endsection

@section('javascript')
    <script src="{{asset('js/createGame.js')}}"></script>
@endsection

@section('lateJavascript')
@endsection


@section('content')

    {!! Form::open(['method'=>'post', 'action'=>'AdminUsersController@createTag']) !!}

        Name: <input type="text" name="name">

        <input type="submit" value="create">

    {!! Form::close() !!}

@endsection
