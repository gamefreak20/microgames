<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Microgames') }}</title>

      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&display=swap" rel="stylesheet">

      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('./css/style.css') }}" rel="stylesheet">
      @yield('css')

      <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="{{ asset('js/header.js') }}"></script>
      @yield('javascript')

  </head>

  <body>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light"
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
{{--          <form class="form-inline my-2 my-lg-0 left">--}}
            {!! Form::open(['method'=>'get', 'action'=>'MemberGameController@searchBar', 'class'=>'form-inline my-2 my-lg-0 left']) !!}
                <input class="formControl mr-sm-2" name="name" type="search" placeholder="Search a game..." aria-label="Search">
                <button class="boxIcon">
                  <svg id="searchImg" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                    <path d="M67.86,61.064a8.113,8.113,0,0,0-5.839,5.8,2.667,2.667,0,0,1-5.293-.467c0-1.92,1.613-4.84,3.813-7.026,2.16-2.133,4.733-3.64,6.852-3.64a2.709,2.709,0,0,1,2.667,2.707A2.675,2.675,0,0,1,67.86,61.064Zm36.651,34.958a5.293,5.293,0,1,1-7.479,7.493L81.713,88.208A23.341,23.341,0,1,1,89.2,80.716ZM86.059,68.4A16.666,16.666,0,1,0,69.393,85.062,16.671,16.671,0,0,0,86.059,68.4Z" transform="translate(-46.062 -45.065)"  fill-rule="evenodd"/>
                  </svg>
                </button>
            </form>
          <div class="boxBar center">
            <div class="boxIcon">
              <p class="levelText">lvl <b class="levelTitle">
                      @if (\Illuminate\Support\Facades\Auth::check())
                          {{\Illuminate\Support\Facades\Auth::user()->level}}
                      @else
                          0
                      @endif
                  </b></p>
          </div>
          <div class="boxTxtBar">
            <p class="boxText" id="xp">xp
                @if (\Illuminate\Support\Facades\Auth::check())
                    {{\Illuminate\Support\Facades\Auth::user()->exp}}
                    |
                    {{150 * \Illuminate\Support\Facades\Auth::user()->level * (\Illuminate\Support\Facades\Auth::user()->level/3)}}
                @else
                    0|150
                @endif


            </p>
          </div>
        </div>
        @if (\Illuminate\Support\Facades\Auth::check())
        <div class="boxBar right" id="profile" onclick="dropDown()">
          <div class="boxIcon">
          </div>
          <div class="boxTxtBar">
            <p class="boxText">
                    {{\Illuminate\Support\Facades\Auth::user()->name}}
              <svg xmlns="http://www.w3.org/2000/svg" class="arrow" width="73.693" height="43.918" viewBox="0 0 73.693 43.918">
                <g data-name="Group 1" transform="translate(-857.505 -479.577)">
                  <line id="Line_1" data-name="Line 1" y1="42.109" transform="translate(864.576 486.648) rotate(-45)" stroke-linecap="square" stroke-width="10"/>
                  <line id="Line_3" data-name="Line 3" x1="42.109" transform="translate(894.352 516.424) rotate(-45)" stroke-linecap="square" stroke-width="10"/>
                </g>
              </svg>
            </p>
          </div>
          <div>
            <ul class="dropdown">
              <li class="dropItem">
                <a href="{{route('memberProfile')}}"><p class="dropdownText">Profile</p></a>
              </li>
              <li class="dropItem">
                <a href="{{route('memberInboxIndex')}}"><p class="dropdownText">Inbox</p></a>
              </li>
              <li class="dropItem">
                <a href="{{route('creatorGameCreate')}}"><p class="dropdownText">Create game</p></a>
              </li>
{{--              <li class="dropItem">--}}
{{--                <a href="{{route('memberProfile')}}"><p class="dropdownText">Options</p></a>--}}
{{--              </li>--}}

              <li class="dropItem">
                  <form id="logoutForm" action="{{route('logout')}}" method="post">
                      {{ csrf_field() }}
                        <a href="#" onclick="document.getElementById('logoutForm').submit();"><p class="dropdownText">Logout</p></a>
                  </form>
              </li>
            </ul>
          </div>
        </div>

        @else
        <div class="boxBar right" id="profile">
          <div class="boxTxtBarLogout">
            <p class="boxText">
              <a href="{{route('login')}}">login</a>
            </p>
          </div>
        </div>
        @endif
      </nav>
      <div class="xpBar">
        <div class="xpDone">
        </div>
        <div class="xpTransition">
        </div>
        <div class="xpNeeded">
        </div>
      </div>
    </div>
    @yield('content')
    @yield('lateJavascript')

  </body>

</html>
