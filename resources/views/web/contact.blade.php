<!-- the bootstrap styles will be applied to this page , refer to the documentation for borrowing the code !-->
@extends('main')

@section('content')
<div class="custom-container">
    <div class="col-md-8 col-lg-6 cust-cont">
        <h1 style="margin-bottom: 10px;">Contact</h1>
        <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
        <div class="image">
            <img src="{{ asset('img/deliveryman.jpg') }}" alt="delivery man">
        </div>
    </div>
</div>

<div class="page-cont">
    <form action="">
        <div class="Contact-Form"> 
            <label class = "ps-labels" for="fullname">Name</label>
            <br>
            <input class = "ps-box" type="text" placeholder = "Enter your name" pattern="[a-zA-Z ]{1,30}" id = "fullname" name="full_name" title="(required)" required>
        </div>

        <div class = "Contact-Form">
            <label class = "ps-Labels" for="phonenumber"> Phone Number</label>
            <br>
            <input class = "ps-box" type="text" placeholder = "Enter your phone number"   pattern="^\d{3}-\d{3}-\d{4}$" id = "phonenumber" name="phone" title="(123-456-7890)" required>
        </div>

        <div class = "Contact-Form">
            <label class = "ps-Labels" for="email">Email </label>
            
            <input class = "ps-box" type="text" placeholder = "Enter your email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" id = "email" title="(required)" name="email" required >
        </div>

        <div class="Contact-Form">
            <label class="ps-Labels" for="comments">Reason for contact *</label>
            <input class = "ps-box" type="text" placeholder = "Enter your reason"  pattern="[a-zA-Z0-9]">
            

            <div class="ps-submit">
                <input class = "ps-submitbtn" type="submit">
            </div>
        </div>
    </form>
</div>


@endsection