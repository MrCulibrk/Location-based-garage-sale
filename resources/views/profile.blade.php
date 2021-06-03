@extends('layouts/app')

@section('content')

@component('components/navbar')

@endcomponent

<div class="Wrapper bg-light">
    <h1>Profile settings</h1>

    @if (Auth::user()->profilePics)
    <img src="{{ asset('/storage/images/' . Auth::user()->profilePics) }}" alt="profile picture" height="150px">
    @endif

    <h2>Hello {{ Auth::user()->firstname }}!</h2>
    <p>This is where you can make changes to your profile!</p>

    <form class="form-group" action="/upload" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label for="image">Profile picture</label><br>
        <input type="file" name="image">
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="Upload">
    </form>

    @foreach( $products as $product )
        <h3><a href="{{ $product->id }}">{{ $product->productName }}</a></h3>
        <p>{{ $product->description }}</p>
        <p>{{ $product->location }}</p>
        <p>Created at: {{ $product->created_at }}</p>
    @endforeach     
</div>

@endsection