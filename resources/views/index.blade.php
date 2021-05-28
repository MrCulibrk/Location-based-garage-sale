
@extends('layouts/app')

    @section('content')

    @component('components/navbar')

    @endcomponent
    
    <h1>all names</h1> 

    @foreach( $products as $product )
        <h3><a href="{{ $product->id }}">{{ $product->productName }}</a></h3>
        <p>{{ $product->description }}</p>
        <p>{{ $product->location }}</p>
        <p>Created at: {{ $product->created_at }}</p>
    @endforeach     

@endsection
