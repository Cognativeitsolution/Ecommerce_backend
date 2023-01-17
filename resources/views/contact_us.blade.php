@extends('layouts.app')

@section('seo')
   <title>You need any type of website please contact us</title>
   <meta name="keywords" content="Cognitive IT Solution provide all types of software solution"/>
   <meta name="description" content="Contact Us for IT Solution, Cognitive IT Solution provide all types of software solution."/>
@endsection

<style>
   .error {
      color: #dc3545;
   }
</style>

@section('content')
    <!---About Us Banner Container-->
    <section class="contact_hero-banner">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="secondary_about_slider">
                        <div class="page-title">
                           <div class="container">
                              <h1>Contact Us</h1>
                              <p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="contact_us-form">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="main_container">
                        <div class="main_card-container">
                           <div class="main-card_content">
                              <h3>Contact Us</h3>
                              <div class="cog_contact-info-container">
                                 <div class="social-box">
                                    <div class="social_icon-container">
                                       <span class="social_icon"><i class="fas fa-map-marker-alt"></i></span> &nbsp;
                                       <span class="social_content"> {{ $settings->location_address }}</span>
                                    </div>
                                    <div class="social_icon-container">
                                       <span class="social_icon"><i class="fas fa-map-marker-alt"></i></span> &nbsp;
                                       <span class="social_content"> {{ $settings->branch }}</span>
                                    </div>
                                    <div class="social_icon-container">
                                       <span class="social_icon"><i class="fas fa-envelope"></i></span> &nbsp;
                                       <span class="social_content"> {{ $settings->contact_email }} </span>
                                    </div>
                                    <div class="social_icon-container">
                                       <span class="social_icon"><i class="fas fa-phone-alt"></i></span> &nbsp;
                                       <span class="social_content"> {{ $settings->contact_number }}</span>
                                    </div>
                                    <!--<div class="social_icon-container">-->
                                    <!--   <span class="social_icon"><i class="fas fa-fax"></i></span> &nbsp;-->
                                    <!--   <span class="social_content"> {{ $settings->contact_whatsapp }} </span>-->
                                    <!--</div>-->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="sub_card-container">
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                           <div class="sub_card-head">
                              <span class="sub_card-mh">Get In Touch</span>
                              <span class="sub_card-sh">Feel free to drop us a line below!</span>
                           </div>
                           <div class="sub_card-form-wrapper">
                              <form action="{{url('/contact_us')}}" id="form-control" method="POST">
                                  @csrf
                                 <div class="form-group">
                                    <input type="text" class="fname @error('name') is-invalid @enderror" id="fullname" placeholder="Your Name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- <span id="uname-err"></span> -->
                                 </div>
                                 <div class="form-group">
                                    <input type="email" class="user_mail @error('email') is-invalid @enderror" id="email" placeholder="Enter your Email address" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- <span id="umail-err"></span> -->
                                 </div>
                                 <div class="form-group">
                                    <textarea id="user_comment" cols="30" rows="10" placeholder="Typing your message here..." class="comment-field @error('message') is-invalid @enderror" name="message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- <span id="msg-err"></span> -->
                                 </div>
                                 <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                    @error('g-recaptcha-response')
                                       <span class="error">
                                          <strong >{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>                                 
                                 
                                 <input type="submit" value="Submit" class="primary-btn">
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!----Map Container --->
         <section class="visual-container">
            <div class="map_container">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14479.802445836183!2d67.05838565!3d24.86553635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1654511584108!5m2!1sen!2s" 
                  class="map" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </section>
@endsection