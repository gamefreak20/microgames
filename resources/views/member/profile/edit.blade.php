@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')
    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['MemberProfileController@patch', $user->id]]) !!}

        Name: <input type="text" name="name" value="{{$user->name}}" required><br>
        First name: <input type="text" name="first_name" value="{{$user->first_name}}"><br>
        Last name: <input type="text" name="last_name" value="{{$user->last_name}}"><br>
        Email: <input type="email" name="email"  value="{{$user->email}}" required><br>

        @if ($user->password != null)

            New password: <input type="password" name="password1"><br>
            Repeat password: <input type="password" name="password2"><br>

            Your password: <input type="password" name="oldPassword" placeholder="*****" required><br>

        @else
            You cannot change your password, because you have logged in with a external account<br>
        @endif


    <input type="submit" value="change">

    {!! Form::close() !!}


@endsection
