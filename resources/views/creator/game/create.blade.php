@extends('layouts.main')

@section('css')
<link href="{{ asset('./css/create.css') }}" rel="stylesheet">
@endsection

@section('javascript')
    <script src="{{asset('js/createGame.js')}}"></script>
@endsection

@section('lateJavascript')
@endsection


@section('content')

    {!! Form::open(['method'=>'post', 'action'=>'CreatorGameController@store', 'files'=>true]) !!}

      <div class="row">
        <div class="col-sm sidePicture">
          <div class="layer">
          </div>
        </div>
        <div class="col-sm">
          <div class="formWrap">
            <form>
              <hr class="formHr"/>
              <div class="form-group">
                <p class="formTitle">Title of your game</p>
                <input type="text" name="title" class="form-control" placeholder="Title of your game">
              </div>
              <hr class="formHr"/>
              <div class="form-group">
                <p class="formTitle">Upload your game</p>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="game">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <hr class="formHr"/>
              <div class="form-group">
                <p class="formTitle">Upload your thumbnail</p>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="mainPicture">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <hr class="formHr"/>
              <p class="formTitle">Search tags</p><input type="text" id="searchTags" class="form-control" placeholder="Search tags"><br>
              <div id="searchedTags" class="searchedTags"></div>

              <p class="formTitle" id="SelectTags">Selected tags:</p><div id="selectedTags" class="searchedTags"></div>
              <input type="hidden" name="selectedTags" id="selectedTagsHidden">
              <hr class="formHr"/>
              <input type="submit" name="submit" class="btn btnPrimary" value="create game">
              <hr class="formHr"/>
            </form>
        </div>
        </div>
      </div>

    {!! Form::close() !!}

@endsection
