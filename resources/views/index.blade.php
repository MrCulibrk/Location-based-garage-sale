
@extends('layouts/app')

    @section('content')

    @component('components/navbar')

    @endcomponent
    
    <h1>all names</h1> 

    @foreach( $products as $product )
        <h3><a href="{{ $product->id }}">{{ $product->productName }}</a></h3>
        <p>{{ $product->price }} &euro;</p>
        <p>{{ $product->description }}</p>
        <img src="{{ $product->Pics }}" alt="{{ $product->productName }} picture">
        <p>{{ $product->location }}</p>
        <p>Created at: {{ $product->created_at }}</p>
    @endforeach     

@endsection
