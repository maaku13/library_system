@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <!-- resources/views/auth/login.blade.php -->

    <div style="padding-top: 100px; width: 400px;" class="center-block">
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-default">Login</button>
        </div>
    </form>
    </div>
    
</div>
@stop