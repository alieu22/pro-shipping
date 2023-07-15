<!-- the bootstrap styles will be applied to this page , refer to the documentation for borrowing the code !-->
@extends('layouts.app')

@section('content')

<section>
  <div class="container-fluid bg-info p-2" style="max-height: 165px;">
    <div class="row align-items-end" style="height: 100%;">
      <div class="col-md-8 col-lg-6 align-self-start">
        <h1 style="margin-top: 10px;">About us</h1>
        <h4>"Eat sleep, meet our customers needs, repeat" - Pro Shipping</h4>
      </div>
      <div class="col-md-4 col-lg-6 d-flex justify-content-end align-items-center">
        <img src="{{ asset('img/Driver.jpeg') }}" alt="Ps-picture" class="img-fluid rounded" style="max-width: 25%; margin-right: 150px; margin-bottom: 10px;">
      </div>
    </div>
    <div class="row">
    <div class="col-md-4 col-lg-6 d-flex justify-content-start align-items-center">
  <img src="{{ asset('img/Driver.jpeg') }}" alt="Ps-picture" class="img-fluid rounded" style="max-width: 30%; margin-right: 20px; margin-top: 30px;">
  
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et elit quis odio consequat semper vitae a urna. 
    Donec at mollis magna. Curabitur in sapien venenatis, tristique libero nec, volutpat lorem.
     Nullam pretium elit vel felis placerat venenatis. Suspendisse tincidunt lectus sit amet convallis pretium</p>
</div>

    </div>
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('img/plane.jpeg') }}" alt="Ps-picture2" class="img-fluid rounded" style="max-width: 30%; margin-bottom: -135px;">
      </div>
    </div>
  </div>
</section>





@endsection
