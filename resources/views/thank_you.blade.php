@extends('layouts.app')

@section('content')

<div class="card_section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="greeting_container">
               <div class="greet_img-box">
                  <img src="{{ asset('assets/images/img_thumb.jpg') }}" alt="thumb" class="thumb_up">
               </div>
               <h3 class="head_three">Thank You!</h3>
               <p>You successfully apply for this position  </p>
               <p>We will contact you soon</p>
               <a href="{{ route('web.home') }}" class="back_btn">Back to Home</a>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection