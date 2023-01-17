@extends('layouts.app')

@section('content')
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
                                <img src="{{ url('assets/images/Programming-pana.png') }}" alt="">
                            </div>
                        </div>
                        <div class="sign_up-form-container">
                            <h3 class="sp_form-head">Reset Password</h3>
                
                            <form method="POST" action="{{ route('password.update') }}" class="sign_up-form-control">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-group">
                                    <input placeholder="Email Address" type="email" class="cand-email @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="New Password" class="cand-email @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Confirm Password" class="cand-email @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <button type="submit" class="sign_up-btn">Reset Password</button>        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
