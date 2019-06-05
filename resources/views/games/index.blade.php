@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    @foreach($games as $game)

        {{$game->name}}
        <img src="{{asset('images/games/main/'.$game->id.'.png')}}" alt="image of {{$game->name}}">

        @foreach($game->tags()->get() as $tag)
            {{$tag->name}}
        @endforeach

    @endforeach

@endsection
