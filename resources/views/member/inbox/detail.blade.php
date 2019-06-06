@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    Title: {{$message->title}}
    Text: {{$message->text}}
    Send by:{{$message->user()->first()->name}}

@endsection
