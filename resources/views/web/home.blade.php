
@extends('main') <!-- layouts.app !-->

@section('content')

<div class="custom-container">
    <div class="col-md-8 col-lg-6 cust-cont">
        <h1 style="margin-bottom: 10px;">Home</h1>
        <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
        <div class="image">
            <img src="{{ asset('img/deliveryman.jpg') }}" alt="delivery man">
        </div>
    </div>
</div>

<div class="page-cont">
    <!--- Page Content needs to go here --->
 


<div class="home-content"> 
 <h1 class="welcome-text"> Welcome to Pro Shipping </h1>
 <p class="home-paragraph"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<br> ex ea commodo consequat. Duis aute irure 
    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
    proident, sunt in culpa qui officia deserunt <br> mollit anim id est laborum Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>
    
<p>
</div>


<div class="home-gallery">
    
    <div class="homeimg-1">
        <img src="{{ asset('img/airfreight.jpg') }}" alt="airplane">
        <p> The best way to ship! Ship your items with Pro shipping <br> today and recieve them in no time <p>
        <a href="{{ route('products') }}" class="view-more1">View More</a>
    </div>

    <div class="homeimg-2">
        <img src="{{ asset('img/image2.jpg') }}" alt="deliveryman">
        <p> The best way to ship! Ship your items with Pro shipping <br> today and recieve them in no time <p>
        <a href="{{ route('services') }}" class="view-more2">View More</a>
    </div>
    <div class="homeimg-3">
        <img src="{{ asset('img/image3.jpg') }}" alt="delivercustomer">
        <p> The best way to ship! Ship your items with Pro shipping today <br> and recieve them in no time <p>
        <a href="{{ route('contact') }}" class="view-more3">View More</a>
    </div>
</div>

</div>


@endsection







