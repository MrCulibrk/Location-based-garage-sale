
@extends('layouts/app')

@section('content')




@section('content')
@component('components/navbar')

@endcomponent
<div class="signUpContainer">
    <div class="container">
        <div class="header">
            <h1>Register</h1>
            @if($flash=session('error'))
            <div class="alert alert-danger">{{ $flash }}</div>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="loginForm">
            <form action="" method="post">
                {{ csrf_field() }}
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">

                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email">

                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">

                <label for="confirmPassword">Confirm password</label>
                <input class="form-control" type="password" name="confirmPassword" id="password">

                <input class="btn btn-primary" type="submit" value="register">
            </form>
        </div>
    </div>
</div>    

@endsection