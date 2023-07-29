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
                    <h1 style="margin-bottom: 10px;">Home</h1>
                    <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
                </div>
            </div>
        </div>

        <div class="Contact-Form"> 
         <label class = "ps-labels" for="fullname">Name * (John Doe)</label>
                <br>
                <input class = "ps-box" type="text" placeholder = "Enter your name" pattern="[a-zA-Z ]{1,30}" id = "fullname" name="full_name" title="(required)" required>
            </div>

            <div class = "Contact-Form">
                <label class = "hp-Labels" for="phonenumber"> Phone Number * (123-456-7890)</label>
                <br>
                <input class = "hp-box" type="text" placeholder = "Enter your phone number"   pattern="^\d{3}-\d{3}-\d{4}$" id = "phonenumber" name="phone" title="(123-456-7890)" required>
            </div>

            <div class = "Contact-Form">
                <label class = "ps-Labels" for="email">Email * (abc@email.com) </label>
                
                <input class = "ps-box" type="text" placeholder = "Enter your email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" id = "email" title="(required)" name="email" required >
            </div>

            <div class="Contact-Form">
             <label class="ps-Labels" for="comments">Reason for contact *</label>
             <textarea class="comment-box" rows="5" name="reason" required></textarea>
                </div>

                <div class = "ps-submit">
                 <input class = "ps-submitbtn" type="submit">
             </div>

    </section>
</body>
</html>


</section>


@endsection