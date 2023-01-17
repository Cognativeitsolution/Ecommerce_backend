@extends('layouts.app')

@section('seo')
    <title>Cognitive - Login</title>
@endsection

@section('content')

    @php
        $remember_me = false;
        $user_email = '';

        if (Cookie::has('user_r')) {
            $remember_me = true;
            $user_email = Crypt::decryptString(Cookie::get('user_r'));
        }
    @endphp

    @if (session('error'))
    <div class="container">
        <div class="alert alert-danger">{!! session('error') !!}</div>
    </div>
    @endif

    <section class="sign_up-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sign_up-flex-wrapper">
                        <div class="log_in-banner-container">
                            <div class="sp_banner-content">
                                <h2 class="sp-banner-head">
                                    <span class="sp-m-head">Cognitive</span>   
                                    <span class="sp-s-head">IT Solutions</span>     
                                </h2>
                                <p class="sp_para-content">A central hub where teams can work, plan achieve amazing things together</p>
                            </div>
                            <div class="si_banner-img">
                                <!-- Swiper -->
                                <div class="swiper mySwiper login_side-banner">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="inner_custom-banner">
                                                <img src="./assets/images/Wall-post-pana.png" alt="slide-one-img" class="slide_img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="inner_custom-banner">
                                                <img src="./assets/images/new_image.png" alt="slide-one-img" class="slide_img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="inner_custom-banner">
                                                <img src="./assets/images/Programming-pana.png" alt="slide-one-img" class="slide_img">
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="sign_up-form-container">
                            <h3 class="sp_form-head">Login</h3>
                            <span class="user_acc">Not registered yet? &nbsp; <a href="{{ url('/register') }}" class="anchor_link-login"> Create an Account</a></span>
                            <form action="{{ route('login') }}" method="POST" class="sign_up-form-control">
                                @csrf
                                <div class="form-group">
                                    <input type="email" placeholder="Email Address" class="cand-email @error('email') is-invalid @enderror" name="email" value="{{ $user_email }}" required autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="cand-pwd @error('password') is-invalid @enderror" name="password" required>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group user_helper">
                                    <div class="remember_me">
                                        <input class="rem-me" id="remember-me-check" type="checkbox" name="remember" {{ $remember_me ? 'checked' : '' }}> <label for="remember-me-check"> &nbsp; Remember Me<label>
                                    </div>
                                    <div class="forgot_pwd">
                                        @if (Route::has('password.request'))
                                            <a class="forgot_link" href="{{ route('password.request') }}">
                                                Forgot Password?
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <button class="sign_up-btn" type="submit">Login</button>
                                <p>OR</p>
                            </form>
                            <div class="connection_box">
                                <a href="{{ url('/google') }}" class="link_google"><img src="./assets/images/google_logo.jpg" alt="google_logo"> &nbsp; &nbsp; Connect with Google</a>
                                <a href="{{ url('/facebook') }}" class="link_facebook"><img src="./assets/images/fb_icon.png" alt="facebook_logo"> &nbsp; &nbsp; Connect with Facebook</a>
                                <a href="{{ url('/linkedin') }}" class="link_linkedin"><i class="fab fa-linkedin-in"></i> &nbsp; &nbsp; Connect with LinkedIn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
