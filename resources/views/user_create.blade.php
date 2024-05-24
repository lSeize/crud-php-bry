@extends('master')

@section('content')

<h2>Create</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="login" placeholder="Your Login">
    <input type="text" name="firstName" placeholder="Your First Name">
    <input type="text" name="lastName" placeholder="Your Last Name">
    <input type="text" name="company" placeholder="Your Company">
    <input type="text" name="cpf" placeholder="Your CPF">
    <input type="text" name="email" placeholder="Your Email">
    <input type="text" name="adress" placeholder="Your Adress">
    <input type="text" name="password" placeholder="Your Password">


    <button type="submit">Create</button>
</form>

@endsection
