@extends('layouts.main')

@section('css')
<link href="{{ asset('./css/detail.css') }}" rel="stylesheet">
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    @foreach($pages as $page)

        @if ($page->kind == 'title')
            <div class="titleBox">{{$page->what}}</div>
        @elseif ($page->kind == 'text')
            <div class="textBox">{{$page->what}}</div>
        @elseif ($page->kind == 'file')
            <div class="imgBox"><img src="{{asset('images/games/page/'.$page->what)}}"></div>
        @endif

    @endforeach

@endsection
