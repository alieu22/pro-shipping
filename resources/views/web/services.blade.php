<!-- the bootstrap styles will be applied to this page , refer to the documentation for borrowing the code !-->
@extends('main')


@section('content')
<div class="custom-container">
    <div class="col-md-8 col-lg-6 cust-cont">
        <h1 style="margin-bottom: 10px;">Services</h1>
        <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
        <div class="image">
            <img src="{{ asset('img/deliveryman.jpg') }}" alt="delivery man">
        </div>
    </div>
</div>

<div class="services-page">

    <div>
        <div>
            <button type="button">Shipping</button>

            <p>Ship within the US, Africa, Asia, Europe, Middle East etc. and recieve your package in no time.</p>

            <p>Experience a seamless and top notch shipping experience when you ship with Pro Shipping. <br> 
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci aperiam tempora natus velit <br>
             culpa aut modi eum cumque, sapiente mollitia inventore exercitationem voluptate officia quidem <br>
              expedita tempore placeat. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi fuga, <br> commodi velit, sunt ut dolorem cumque molestias suscipit doloremque deleniti ipsum iusto cum <br> unde odit quibusdam. Architecto, tempora repellendus. Quasi. Lorem ipsum dolor sit amet 
            </p>
        
        </div>
        
        
            <div class= "images">
                <img  src="{{ asset('img/shippingbox.jpg') }}" alt="boxes">
                <img  src="{{ asset('img/mansigningbox.jpg') }}" alt="signing box">
                <img  src="{{ asset('img/trucks.jpg') }}" alt="trucks">

            </div>

            
        </div>
    </div>
    
    <!--- Page Content needs to go here --->
</div>

@endsection

