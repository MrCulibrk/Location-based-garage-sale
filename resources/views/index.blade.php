
@extends('layouts/app')

    @section('content')

    @component('components/navbar')

    @endcomponent
    
    <h1>all names</h1> 

    @foreach( $users as $user )
        <h3><a href="/{{ $user->id}}">{{ $user->name}}</a></h3>
    @endforeach     

@endsection
