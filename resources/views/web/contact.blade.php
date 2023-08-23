@extends('main')

@section('content')
<section class="hf-sections">
    <div class="hf-contactMain">
        <!--<h1 class="h-first hf-contact-header">Interested in Contacting us?</h1> -->
       <p class="hf-contact-para">For any questions regarding Pro Shipping,<br> please complete this form.</p> 

        <form class="hf-form" action="" method="post">
            @csrf

            <div class="hf-name">
                <label class="hf-Labels" for="fullname">Name * (John Doe)</label>
                <input class="hf-box" type="text" placeholder="Enter your name" pattern="[a-zA-Z ]{1,30}" id="fullname" name="full_name" title="(required)" required>
            </div>

            <div class="hf-number">
                <label class="hf-Labels" for="phonenumber"> Tracking Number (If Applicable)</label>
                <input class="hf-box" type="tel" placeholder="Enter your Tracking number" pattern="^\d{3}-\d{3}-\d{4}$" id="phonenumber" name="phone" title="(123-456-7890)" required>
            </div>

            <div class="hf-email">
                <label class="hf-Labels" for="email">Email * (abc@email.com)</label>
                <input class="hf-box" type="email" placeholder="Enter your email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" id="email" title="(required)" name="email" required>
            </div>

            <div class="hf-comments">
                <label class="hf-Labels" for="comments">Reason for contact *</label>
                <textarea class="comment-box" rows="5" name="reason" required></textarea>
            </div>

            <div class="hf-submit">
                <input class="hf-submitbtn" type="submit" value="Submit">
            </div>
        </form>
    </div>
</section>




<!-- uncomment if the new code insertion does not work out 
<section class = "hf-sections">
    <div class = "hf-contactMain">
        <h2 class="hf-he hf-contact-header hf-center">Interested in Contacting us? </h2>
        <p class = "hf-he hf-contact-para">For any questions regarding our adult family home LLC,<br> please complete this form </p>

        <form class = "hf-form">
            <div class = "hf-name">
                <label class = "hf-labels" for="fullname">Name</label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your name" id = "fullname" pattern="[a-zA-Z]{1,15}" title="(required)" name="fullName" required>
            </div>

            <div class = "hf-number">
                <label class = "hf-Labels" for="phonenumber"> Phone Number</label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your phone number" id = "phonenumber" pattern="^\d{3}-\d{3}-\d{4}$" name="phoneNumber" title="(123-456-7890)" required>
            </div>

            <div class = "hf-email">
                <label class = "hf-Labels" for="email">Email </label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your email" id = "email" pattern="[a-zA-Z]{1,15}" title="(required)" name="email" required >
            </div>

            <div class = "hf-comments"> 
                <label class  = " hf-Labels" for="comments">Reason for contact</label>
                <br>
                <textarea class="comment-box" rows=500> </textarea>
            </div>
            

             <div class = "hf-submit">
                <input class = "hf-submitbtn" type="submit">
             </div>

        </form>
    </div>
</section>

-->
@endsection
