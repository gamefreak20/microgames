@extends('layouts.main')

@section('css')
<link href="{{ asset('./css/index.css') }}" rel="stylesheet">
@endsection

@section('javascript')
<script src="{{ asset('js/index.js') }}"></script>
@endsection

@section('lateJavascript')
@endsection


@section('content')

  <div class="wrapper">
    @foreach($games as $game)


        <a href=""><div class="innerDiv">
          <div class="gameName">
            {{$game->name}}
          </div>

          <div class="totalImg">
            <div>
              <img src="{{asset('images/games/main/'.$game->id.'.png')}}" alt="image of {{$game->name}}" class="banner">
            </div>
            <div class="underImage">
            </div>
          </div>

          @foreach($game->tags()->get() as $tag)
              {{$tag->name}}
          @endforeach

        </div></a>
    @endforeach
  </div>
@endsection
