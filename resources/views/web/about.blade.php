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
                    <h1 style="margin-bottom: 10px;">About Us</h1>
                    <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
                <div class="image">
                    <img src="{{ asset('img/deliveryman.jpg') }}" alt="delivery man">
                </div>
                <div class="second-section">
                    <img src="{{ asset('img/deliveryguywithcustomer.jpg') }}" alt="delivery">
                </div>
               
                
                </div>
            </div>
        </div>
        <div class="text">
                    <p>At Pro Shipping, we prioritize customer satisfaction and strive to exceed expectations.<br>
                       Experience the difference with Pro Shipping and let us simplify your shipping experience 
                        like never before.
                    </p>
                    <h4>Our Locations</h4>
                    <p>132nd St SE Ste C <br>
                       Everett, WA 98208 US <br>
                       425-232-2345
                    </p>
                </div>
    </section>
</body>
</html>


</section>






@endsection
