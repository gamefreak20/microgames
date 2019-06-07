@extends('layouts.main')

@section('css')
<link href="{{ asset('./css/detail.css') }}" rel="stylesheet">
@endsection

@section('javascript')
<script src="{{ asset('./js/detail.js') }}"></script>
<script>
function setDirLink()
{
    $(".playBox").html("<iframe src=\"{{asset('games/'.$id)}}\" height=\"800\" width=\"1350\"></iframe>");
}
</script>
@endsection

@section('lateJavascript')
@endsection


@section('content')
    <div class="playBox">
      <button class="btn btnPrimary" onclick="setDirLink()">Play!</button>
    </div>
    @foreach($pages as $page)

        @if ($page->kind == 'title')
            <div class="titleBox">{{$page->what}}</div>
        @elseif ($page->kind == 'text')
            <div class="textBox">{{$page->what}}</div>
        @elseif ($page->kind == 'file')
            <div class="imgBox"><img class="img" src="{{asset('images/games/page/'.$page->what)}}"></div>
        @endif

    @endforeach

@endsection
