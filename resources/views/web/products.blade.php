<!-- the bootstrap styles will be applied to this page , refer to the documentation for borrowing the code !-->
@extends('main')

@section('content')
<div class="custom-container">
    <div class="col-md-8 col-lg-6 cust-cont">
        <h1 style="margin-bottom: 10px;">Products</h1>
        <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
        <div class="image">
            <img src="{{ asset('img/deliveryman.jpg') }}" alt="delivery man">
    </div>
    </div>
</div>

<div class="products">
    <div class="productspage">
        <p>We ship envelopes and packages weighing up to 150lbs throughout <br>the <strong>US, Africa, Asia, Europe, Middle East</strong> etc.</p>
        <!--- Page Content needs to go here --->
        <p> Ship worldwide with Pro shipping and get your package <br> in no time with Pro Shipping!</p>
    </div>

    <div class="images">
        
            <img src="{{ asset('img/shippingbox.jpg') }}" alt="boxes">
        
            <img src="{{ asset('img/shippingbox.jpg') }}" alt="boxes">
        
            <img src="{{ asset('img/airfreight.jpg') }}" alt="airfreight">
        
            <img src="{{ asset('img/orangeenvelope.jpg') }}" alt="orange envelope">
        
    </div>
</div>



@endsection