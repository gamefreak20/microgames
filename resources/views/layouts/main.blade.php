<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Microgames') }}</title>

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      @yield('css')

      <script src="{{ asset('js/app.js') }}" defer></script>
      @yield('javascript')

  </head>

  <body>
    <div>
      <button class="btn btn-blue">
        Button
      </button>
    </div>
    @yield('content')
    @yield('lateJavascript')

  </body>

</html>
