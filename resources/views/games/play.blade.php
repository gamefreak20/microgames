@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
    <script src="{{asset('js/playGame.js')}}"></script>
@endsection

@section('lateJavascript')
@endsection


@section('content')

    @php(require_once asset('games/'.$id.'/index.html'))

@endsection
