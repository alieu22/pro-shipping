<!-- the bootstrap styles will be applied to this page , refer to the documentation for borrowing the code !-->
@extends('main')

@section('content')
<div class="custom-container">
    <div class="col-md-8 col-lg-6 cust-cont">
        <h1 style="margin-bottom: 10px;">About Us</h1>
        <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
        <div class="image">
            <img src="{{ asset('img/deliveryman.jpg') }}" alt="delivery man">
        </div>
    </div>
</div>

<div class="page-cont">
    <div class="about-us">
        <div class="about-content-1">
            <img src="{{ asset('img/deliveryguywithcustomer.jpg') }}" alt="delivery">
        </div>
        
        <div class="about-content-2">
            <p>At Pro Shipping, we prioritize customer satisfaction and strive to exceed expectations.
                Experience the difference with Pro Shipping and let us simplify your shipping experience 
                like never before.
            </p>
        <div class="about-content-3">
            <h4>Our Locations</h4>
            <p>132nd St SE Ste C <br>
                Everett, WA 98208 US <br>
                425-232-2345
            </p>
        </div>

    <div class="about-gallery left-images">
    
        <div class="last-section">
            <img src="{{ asset('img/airfreight.jpg') }}" alt="airplane">
        </div>

        <div class="about-content-4">
            <img src="{{ asset('img/image2.jpg') }}" alt="deliveryman">
        </div>
        <div class="about-image-3">
            <img src="{{ asset('img/image3.jpg') }}" alt="delivercustomer">
        </div>
    </div>
</div>


@endsection
