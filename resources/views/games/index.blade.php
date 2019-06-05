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

@endsection
