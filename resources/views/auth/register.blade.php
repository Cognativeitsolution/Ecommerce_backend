@extends('layouts.app')

@section('seo')
    <title>Cognitive - Register</title>
@endsection

@section('content')
    <!---Sign_up-->
    <section class="sign_up-section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="sign_up-flex-wrapper">
                        <div class="sign_up-banner-container">
                           <div class="sp_banner-content">
                              <h2 class="sp-banner-head">
                                 <span class="sp-m-head">Cognitive</span>   
                                 <span class="sp-s-head">IT Solutions</span>     
                              </h2>
                              <p class="sp_para-content">A central hub where teams can work, plan achieve amazing things together</p>
                           </div>
                           <div class="sp_banner-img">
                              <img src="./assets/images/Programming-pana.png" alt="">
                           </div>
                        </div>
                        <div class="sign_up-form-container">
                           <h3 class="sp_form-head">Sign-up</h3>
                           <span class="user_acc">Already have an account? &nbsp; <a href="{{ url('/login') }}" class="anchor_link-login">Log In</a></span>
                           <form action="{{ route('register') }}" method="POST" class="sign_up-form-control">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="Name" class="cand-email @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email Address" class="cand-email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" placeholder="Password" class="cand-pwd @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" placeholder="Confirm password" class="cand-pwd" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <button type="submit" class="sign_up-btn">Sign up</button>
                                <p>OR</p>
                           </form>
                           <div class="connection_box">
                              <a href="{{ url('/google') }}" class="link_google"><img src="./assets/images/google_logo.jpg" alt="google_logo"> &nbsp; &nbsp; Connect with Google</a>
                              <a href="{{ url('/facebook') }}" class="link_facebook"> <img src="./assets/images/fb_icon.png" alt="facebook_logo"> Connect with Facebook</a>
                              <a href="{{ url('/linkedin') }}" class="link_linkedin"><i class="fab fa-linkedin-in"></i> &nbsp; &nbsp; Connect with LinkedIn</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@endsection
