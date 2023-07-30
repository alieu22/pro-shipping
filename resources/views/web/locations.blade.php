<!-- the bootstrap styles will be applied to this page , refer to the documentation for borrowing the code !-->
@extends('main')

@section('content')


<section> 
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
    <section>
        <div class="custom-container">
            <div class="row align-items-end">
                <div class="col-md-8 col-lg-6 align-self-start">
                    <h1 style="margin-bottom: 10px;">Locations</h1>
                    <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
                    <img src="{{ asset('img/deliveryguy.jpg') }}" alt="delivery guy">
                </div>
            </div>
        </div>
        <p> Find a store near you</p>
        <div class="imagecontainer">
        <img class= "image1" src="{{ asset('img/shippingbox.jpg') }}" alt="shipping box">
        <img class= "image2" src="{{ asset('img/shippingbox.jpg') }}" alt="shipping box">
        <img class= "image3" src="{{ asset('img/shippingbox.jpg') }}" alt="shipping box">
    </div>
    </section>
</body>
</html>


</section>


@endsection