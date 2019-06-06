@extends('layouts.main')

@section('css')
<link href="{{ asset('./css/create.css') }}" rel="stylesheet">
<link href="{{ asset('./css/editor.css') }}" rel="stylesheet">
@endsection

@section('javascript')
  <script src="{{asset('js/editor.js')}}"></script>
@endsection

@section('lateJavascript')
@endsection


@section('content')

<div class="height">
  <span id='createDivs'>

  </span>
  <div class="plusDiv">
    <button type="button" class="plus" data-toggle="modal" data-target="#exampleModal">
      <p class="plusText">+</p>
    </button><input type="submit" name="submit" class="btn btnSecondry" value="Save your page"><br>
  </div><hr />
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Element</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="elementGroup">
          <div onclick="selected(1)" id="1">
            <img src="{{asset('images/games/editor/text.png')}}" alt="" />
            <p class="elementText">Text</p>
          </div>
          <div onclick="selected(2)" id="2">
            <img src="{{asset('images/games/editor/title.png')}}" alt="" />
            <p class="elementText">Title</p>
          </div>
          <div onclick="selected(3)" id="3">
            <img src="{{asset('images/games/editor/photo.png')}}" alt="" />
            <p class="elementText">Image</p>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btnPrimary" onclick="createDiv()">Create element</button>
      </div>
    </div>
  </div>
</div>



@endsection
