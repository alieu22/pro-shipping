@extends('main')

@section('content')
<div class="custom-container">
    <div class="col-md-8 col-lg-6 cust-cont">
        <h1 style="margin-bottom: 10px;">Services</h1>
        <h4>"Eat sleep, meet our customers' needs, repeat" - Pro Shipping</h4>
        <div class="image">
            <img src="{{ asset('img/deliveryman.jpg') }}" alt="delivery man">
        </div>
    </div>
</div>

<div class="page-cont">
    <div class="services-page">
        <div class="services-text">Shipping</div>
        <p>
            Ship within the <strong>US</strong>, <strong>Africa</strong>, <strong>Asia</strong>, <br>
            <strong>Europe</strong>, <strong>Middle East</strong>, etc., and <br>
            receive your package in no time.
        </p>

        <p>
            Experience a seamless and top-notch <br>
            shipping experience when you ship with Pro Shipping.
        </p>

        <div class="images">
            <div class="serviceimg-1">
                <img src="{{ asset('img/shippingbox.jpg') }}" alt="boxes">
            </div>
            <div class="serviceimg-2">
                <img src="{{ asset('img/mansigningbox.jpg') }}" alt="signing box">
            </div>
            <div class="serviceimg-3">
                <img src="{{ asset('img/shippingbox.jpg') }}" alt="boxes">
            </div>
        </div>
    </div>
</div>
@endsection



