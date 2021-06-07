@extends('layouts/app')

@section('title')
sell new item
@endsection

@section('content')

@component('components/navbar')

@endcomponent

<div class="wrapper bg-light">
    <form method="post" action="/uploadProducts" enctype="multipart/form-data">
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
                <input type="text" name="geolng" class="geolng" value="" hidden>
                <input type="text" name="geolat" class="geolat" value="" hidden>

            </div>
            <button onclick="updateLocation(event)">Click for location</button>
        </div>

        <label for="category">Category</label>

        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault1" name="category" value="Car" checked>
            <label class="form-check-label" for="flexRadioDefault1" >
                Car
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault2" name="category" value="kitchen"  >
            <label class="form-check-label" for="flexRadioDefault2">
                Kitchen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault1" name="category" value="Music">
            <label class="form-check-label" for="flexRadioDefault1">
                Music
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault2" name="category" value="ICT">
            <label class="form-check-label" for="flexRadioDefault2">
                ICT
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault1" name="category" value="Books">
            <label class="form-check-label" for="flexRadioDefault1">
                Books
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="flexRadioDefault2" name="category" value="Cloths">
            <label class="form-check-label" for="flexRadioDefault2">
                Cloths
            </label>
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

<script>
    function updateLocation(event) {
        event.preventDefault();

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