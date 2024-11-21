@extends('Layout.app')
@section('content')
    <h1>Create a user</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name" placeholder="name" autocomplete="off">
        <label>Email</label>
        <input type="email" name="email" placeholder="email" autocomplete="off">
        <label>Password</label>
        <input type="password" name="password" placeholder="password">
        <button type="submit">Create</button>
    </form>
@endsection
