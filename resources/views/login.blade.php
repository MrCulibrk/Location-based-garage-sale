
@extends('layouts/app')

@section('content')

@component('components/navbar')

@endcomponent

<div class="loginContainer">
    <div class="">
        <div class="header">
            <h1>Login</h1>
        </div>
    </div>

    <div class="">
        <div class="loginForm">
            <form action="" method="post">
                @if($flash=session('error'))
                <div class="alert alert-danger">{{ $flash }}</div>
                @endif

                {{ csrf_field() }}
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email">

                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">

                <input class="btn btn-primary" type="submit" value="Login">
            </form>
        </div>
    </div>
</div>

@endsection