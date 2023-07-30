<!-- the bootstrap styles will be applied to this page , refer to the documentation for borrowing the code !-->
@extends('main')

@section('content')


<section> 
    <section>
        <div class="custom-container">
            <div class="row align-items-end">
                <div class="col-md-8 col-lg-6 align-self-start">
                    <h1 style="margin-bottom: 10px;">Home</h1>
                    <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
                </div>
            </div>
        </div>

       
        <form class="hf-form">
        <div class="Contact-Form">
                <label class="ps-labels" for="fullname">Name</label>
                <br>
                <input class="ps-box" type="text" placeholder="Enter your name" pattern="[a-zA-Z ]{1,30}" id="fullname" name="full_name" title="(required)" required>
            </div>

            <div class="Contact-Form">
                <div>
                    <label class="ps-Labels" for="email">Email</label>
                </div>
                <input class="ps-box" type="text" placeholder="Enter your email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" id="email" title="(required)" name="email" required>
            </div>

            <div class="Contact-Form">
                <div>
                    <label class="ps-Labels" for="tracking number">Tracking Number(If applicable)</label>
                </div>
                <input class="ps-box" type="text" placeholder="Enter your tracking number" pattern="^\d{3}-\d{3}-\d{4}$" id = "phonenumber" name="phone" title="(123-456-7890)" required>
            </div>

            <div class="Contact-Form">
                <div>
                    <label class="ps-Labels" for="comments">Reason for contact *</label>
                </div>
                <input class="ps-box" type="text" placeholder="Enter your reason" pattern="[a-zA-Z0-9]" id="comments" name="comments" required>
            </div>

            <div class="hf-center">
                <input type="submit" class="hf-submitbtn" value="Submit">
            </div>
        </form>
    </div>
</section>


@endsection