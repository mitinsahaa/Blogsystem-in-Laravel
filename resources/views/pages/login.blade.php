@extends('layout/master')
@section('title','Login')
@section('content')
@if(!Auth::user())
<div class="container">
<h2>Login</h2>
@if(Session::has('error'))
    <div class="text-danger">
        {{Session::get('error')}}
    </div>
@endif
    <form action="{{url('login')}}" method="post">
        @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-success">Login</button>
    </div>
    </form>
    <a class="text-success" href="{{url('/signup')}}">Not Member yet, Sign Up Here</a>
</div>
@else
<script>window.location.href="{{url('/admin')}}"</script>
@endif
@stop