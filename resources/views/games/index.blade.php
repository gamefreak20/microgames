@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    @if (Auth::check())
        LoggedIn
    @else
        LoggedOut
    @endif

    <form action="{{route('logout')}}" method="post">
        {{ csrf_field() }}
        <input type="submit">
    </form>

@endsection
