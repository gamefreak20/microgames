@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
    <script src="{{asset('js/createGame.js')}}"></script>
@endsection

@section('lateJavascript')
@endsection


@section('content')

    {!! Form::open(['method'=>'post', 'action'=>'CreatorGameController@store', 'files'=>true]) !!}

        Title: <input type="text" name="title"><br>

        Game: <input type="file" name="game"><br>

        Main picture: <input type="file" name="mainPicture"><br>

        Search tags<input type="text" id="searchTags"><br>
        Searching:<div id="searchedTags"></div>

        Selected tags:<div id="selectedTags"></div>

        <input type="hidden" name="selectedTags" id="selectedTagsHidden">

        <input type="submit" name="submit" value="create game"><br>

    {!! Form::close() !!}

@endsection
