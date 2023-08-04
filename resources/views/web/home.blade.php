
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
</div>


@endsection

<!--  <img src="img/Driver.jpeg" alt="Ps-picture" class="img-fluid rounded custom-image"> !-->
<!--  <img src="img/Driver2.jpeg" alt="Ps-picture" class="img-fluid rounded custom-image"> !-->