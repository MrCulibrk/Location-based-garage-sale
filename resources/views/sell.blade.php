@extends('layouts/app')

@section('title')
sell new item
@endsection

@section('content')

@component('components/navbar')

@endcomponent

<div class="wrapper bg-light">
    <form method="post" action="/upload">
        <h1>Sell a new product </h1>

        {{ csrf_field() }}

        <div class="form-group row">
            <label for="productName" class="col-sm-2 col-form-label">Product name</label>
            <div class="col-sm-10">
                <input type="text" name="productName" id="productName" class="form-control">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="location" class="col-sm-2 col-form-label">location</label>
            <div class="col-sm-10">
                <input type="text" name="location" id="location" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="text" name="price" id="price" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Upload a picture of the product</label>
            <div class="col-sm-10">
                <input type="file" name="image">
            </div>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary float-right">
        
    </form>
</div>

@endsection