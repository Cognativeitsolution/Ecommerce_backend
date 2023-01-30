@extends('layouts.app')

@section('seo')
<title>Login</title>
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

<section class="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="secondary_heading">
                    <span class="s_main-head">Admin Login</span>
                    <span class="s_sub-head">Get In Touch With Us And Our Team Of Highly Talented Individuals Will Assist You To Their Best.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!----Login form-->
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
                            <h3>Admin Login</h3>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form_wrapper">

                                <div class="form_group">
                                    <input type="email" required name="email" placeholder="Enter your Email" class="input user_mail" value="{{ $user_email }}" autofocus>

                                    @error('email')
                                    <div class="error">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form_group">
                                    <input type="password" required name="password" placeholder="Enter the password" class="input user_sub">

                                    @error('password')
                                    <div class="error">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>

                                <button class="send_btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection