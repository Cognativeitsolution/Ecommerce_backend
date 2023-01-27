@extends('layouts.app')

@section('seo')
   <title>You need any type of website please contact us</title>
   <meta name="keywords" content="Cognitive IT Solution provide all types of software solution"/>
   <meta name="description" content="Contact Us for IT Solution, Cognitive IT Solution provide all types of software solution."/>
   {!! htmlScriptTagJsApi() !!}
@endsection

@section('css')
   <style>
      .error {
         padding-top: 5px;
         color: #dc3545;
      }
   </style>
@endsection

@section('content')

   <section class="contact_us">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="secondary_heading">
                  <span class="s_main-head">Contact Us</span>
                  <span class="s_sub-head">Get In Touch With Us And Our Team Of Highly Talented Individuals Will Assist You To Their Best.</span>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="contact_info">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="info_wrapper">
                  <div class="info_item">
                     <div class="info_icon-box">
                        <i class="fas fa-map-marker-alt"></i>
                     </div>
                     <div class="info_title-box">
                        <p>68 Lancelot Street, Condell Park NSW 2200, Australia Sydney Australia</p>
                     </div>
                  </div>
                  <div class="info_item">
                     <div class="info_icon-box">
                        <i class="fas fa-phone-alt"></i>
                     </div>
                     <div class="info_title-box">
                        <p>+61406215554</p>
                     </div>
                  </div>
                  <div class="info_item">
                     <div class="info_icon-box">
                        <i class="fas fa-envelope"></i>
                     </div>
                     <div class="info_title-box">
                        <p>info@gmail.com</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!----Contact form-->
   <section class="contact_form">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="contact_us-wrapper">
                  <div class="contact_us_img">
                     <img src="{{ asset('assets/images/Get in touch-cuate.png') }}" alt="get in touch">
                  </div>
                  <div class="contact_us-form">
                     <div class="head">
                        <h3>Get in Touch</h3>
                     </div>
                     <form action="{{ url('contact_us') }}" method="post">
                        @csrf
                        <div class="form_wrapper">
                           <div class="form_group">
                              <input type="text" required name="name" placeholder="Enter your Name" class="input2 user_name" value="{{ old('name') }}">
                              
                              @error('name')
                                 <div class="error">
                                    <strong>{{ $message }}</strong>
                                 </div>
                              @enderror
                           </div>
                           <div class="form_group">
                              <input type="email" required name="email" placeholder="Enter your Email" class="input2 user_mail" value="{{ old('email') }}">
                              
                              @error('email')
                                 <div class="error">
                                    <strong>{{ $message }}</strong>
                                 </div>
                              @enderror
                           </div>
                           <div class="form_group">
                              <input type="text" required name="subject" placeholder="Enter the Subject" class="input2 user_sub" value="{{ old('subject') }}">
                              
                              @error('subject')
                                 <div class="error">
                                    <strong>{{ $message }}</strong>
                                 </div>
                              @enderror
                           </div>
                           <div class="form_group">
                              <textarea name="message" required cols="30" rows="10" class="ta" placeholder="Write your message here...">{{ old('message') }}</textarea>

                              @error('message')
                                 <div class="error">
                                    <strong>{{ $message }}</strong>
                                 </div>
                              @enderror
                           </div>
                           {!! htmlFormSnippet() !!}
                           @error('g-recaptcha-response')
                              <div class="error" style="margin-top: -15px;">
                                 <strong>{{ $message }}</strong>
                              </div>
                           @enderror

                           <button class="send_btn" type="submit">Send Message</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection