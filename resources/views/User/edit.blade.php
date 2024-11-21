@extends('Layout.app')
@section('content')
    <h1>Edit the user</h1>
    <form action="{{ route('user.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}">
        <label>Password</label>
        <input type="password" name="password" placeholder="Update your password">
        <button type="submit">Save</button>
    </form>
@endsection
