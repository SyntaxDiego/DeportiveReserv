@extends('Layout.app')
@section('content')
    <h1>Details of user</h1>
    <p><strong>Name: </strong>{{$user->name}}</p>
    <p><strong>Email: </strong>{{$user->email}}</p>
@endsection
