<!-- the bootstrap styles will be applied to this page , refer to the documentation for borrowing the code !-->
@extends('main')

@section('content')

<div class="custom-container">
    <div class="col-md-8 col-lg-6 cust-cont">
        <h1 style="margin-bottom: 10px;">Locations</h1>
        <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
        <div class="image">
            <img src="{{ asset('img/deliveryman.jpg') }}" alt="delivery man">
        </div>
    </div>
</div>
<div>
    <p> Find a store near you</p>
    <div class="imagecontainer">
        <img class= "image1" src="{{ asset('img/shippingbox.jpg') }}" alt="shipping box">
        <img class= "image2" src="{{ asset('img/shippingbox.jpg') }}" alt="shipping box">
        <img class= "image3" src="{{ asset('img/shippingbox.jpg') }}" alt="shipping box">
    </div>
</div>

@endsection