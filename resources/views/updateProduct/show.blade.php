@extends('layouts/app')

@section('content')

@component('components/navbar')

@endcomponent
<div class="wrapper bg-light">
    <form method="post" action="/updateProduct/{{$product->id}}" enctype="multipart/form-data">
        <h1>change product </h1>

        {{ csrf_field() }}
        

        <div class="form-group row">
            <label for="productName" class="col-sm-2 col-form-label">Change The product name</label>
            <div class="col-sm-10">
                <input type="text" value="{{ $product->productName }}" name="productName" id="productName" class="form-control" >
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" >{{ $product->description }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="location" class="col-sm-2 col-form-label">location</label>
            <div class="col-sm-10">
                <input type="text" name="location" id="location" value="{{ $product->location }}" class="form-control">
                <input type="text" name="geolng" class="geolng" value="" hidden>
                <input type="text" name="geolat" class="geolat" value="" hidden>
            </div>
        </div>

        

        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control">
            </div>
        </div>
        <img src="{{ asset('/storage/images/' . $product->Pics) }}" alt="{{ $product->productName }} picture " width="100px">
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">update the picture of the product</label>
            <div class="col-sm-10">
                <input type="file" name="image">
            </div>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary float-right">

    </form>
    <button onclick="updateLocation()">update location</button>
</div>
<script>
    function updateLocation() {

        var geolng = document.querySelector(".geolng");
        var geolat = document.querySelector(".geolat");

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(changePosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }


        function changePosition(position) {
            geolng.value = position.coords.longitude;
            geolat.value = position.coords.latitude;
        }
    }
</script>
@endsection