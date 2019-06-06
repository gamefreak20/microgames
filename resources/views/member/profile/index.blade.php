@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    Name: {{$user->name}}<br>
    First name: {{$user->first_name}}<br>
    Last name: {{$user->last_name}}<br>
    Email: {{$user->email}}<br>
    Level: {{$user->level}}<br>
    Exp: {{$user->exp}}<br>
    Role: {{$user->roles->first()->name}}<br>

    <a href="{{route('memberProfileEditForm')}}">edit</a>

@endsection
