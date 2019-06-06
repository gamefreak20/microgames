@extends('layouts.main')

@section('css')
@endsection

@section('javascript')
@endsection

@section('lateJavascript')
@endsection


@section('content')

    @foreach($users as $user)

        Name: {{$user->name}}<br>
        Role: {{$user->roles->first()->name}}<br>
        Set role:
        {!! Form::open(['method'=>'post', 'action'=>'AdminUsersController@assignRole']) !!}
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <input type="submit" name="role" value="Member">
            <input type="submit" name="role" value="Creator">
            <input type="submit" name="role" value="Admin">

        {!! Form::close() !!}<br>

    @endforeach

    {{ $users->links() }}

@endsection
