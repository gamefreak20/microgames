@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    @foreach($pages as $page)

        @if ($page->kind == 'title')
            What: {{$page->what}}
        @elseif ($page->kind == 'text')
            What: {{$page->what}}
        @elseif ($page->kind == 'file')
            <img src="{{asset('images/games/page/'.$page->what)}}">
        @endif

        <hr>

    @endforeach

@endsection
