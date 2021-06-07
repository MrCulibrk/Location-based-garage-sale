@extends('layouts/app')

@section('content')

@component('components/navbar')

@endcomponent

<h1>all names</h1>

<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
@foreach( $products as $product )

<form action="/buy" method="POST">
{{ csrf_field() }}
    <h3><a href="{{ $product->id }}">{{ $product->productName }}</a></h3>
    <p>{{ $product->price }} &euro;</p>
    <p>{{ $product->description }}</p>
    <img src="{{ asset('/storage/images/' .  $product->Pics )}}" alt="{{ $product->productName }} picture">
    <p>Created at: {{ $product->created_at }}</p>
    <input type="text" name="product_id" value="{{ $product->id }}" hidden>     
    <input type="submit" value="buy"  class="btn btn-primary float-right">
    
</form>
@endforeach

@endsection