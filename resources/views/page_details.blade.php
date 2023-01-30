@extends('layouts.app')

@section('seo')
<title>{{ $record->title }}</title>
<meta name="keywords" content="{{ $record->meta ? $record->meta->meta_keywords : '' }}" />
<meta name="description" content="{{ $record->meta ? $record->meta->meta_description : '' }}" />
@endsection

@section('content')

<section class="why_we">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="progress_container">
                    <div class="left_icon">
                        <div class="icon_box-area">
                            <div class="inner_box">
                                <div class="icon-area">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Best Deal Guarantee</h4>
                                </div>
                            </div>
                        </div>
                        <div class="icon_box-area">
                            <div class="inner_box">
                                <div class="icon-area">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Vouchers To Your Inbo</h4>
                                </div>
                            </div>
                        </div>
                        <div class="icon_box-area">
                            <div class="inner_box">
                                <div class="icon-area">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Verified Codes & Deals</h4>
                                </div>
                            </div>
                        </div>
                        <div class="icon_box-area">
                            <div class="inner_box">
                                <div class="icon-area">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Millions Of Offers</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right_bar">
                        <div class="why_us_wrapper">
                            <div class="why-us_heading">
                                Why savenbuy ?
                            </div>
                            <div class="why_us_detail">
                                Get instant access to verified coupons from top retailers on a single
                                platform,
                                Buy your favorite items at deep discounts with our coupons &amp; shop
                                more by spending little,
                                Acquire your dream products you were yearning for a long time at
                                discounted rates with our
                                coupons.
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title">Successful Savings</h4>
                            <div class="savings_success">
                                <div class="progressbar" style="width: 100%; background-color: rgb(203, 214, 216); border-radius: 10px;">
                                    <div class="proggress" style="background-color: #ef143f; border-radius: 10px; width: 95%;"></div>
                                    <div class="percentCount">95%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title">Working Codes</h4>
                            <div class="savings_success">
                                <div class="progressbar" style="width: 100%; background-color: rgb(203, 214, 216); border-radius: 10px;">
                                    <div class="proggress" style="background-color: rgb(0, 168, 204); border-radius: 10px; width: 75%;"></div>
                                    <div class="percentCount">75%</div>
                                </div>
                            </div>
                        </div>
                        <div class="single-progressbar">
                            <h4 class="title">Working Deals</h4>
                            <div class="savings_success">
                                <div class="progressbar" style="width: 100%; background-color: rgb(203, 214, 216); border-radius: 10px;">
                                    <div class="proggress" style="background-color: #ef143f; border-radius: 10px; width: 80%;"></div>
                                    <div class="percentCount">80%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!---- About us container -->
<section class="about_us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about_us-wrapper">
                    <div class="au-details">
                        {!! $record->long_description !!}
                    </div>

                    <div class="au_sidebar">
                        <h4>company</h4>
                        <div class="abu_wrpr">
                            <a class="abu_item {{ Request::is('pages/about-us') ? 'active' : '' }}" href="{{ route('web.page_detail', 'about-us') }}">About Us </a>
                            <a class="abu_item {{ Request::is('pages/privacy-policy') ? 'active' : '' }}" href="{{ route('web.page_detail', 'privacy-policy') }}">Privacy Policy </a>
                            <a class="abu_item {{ Request::is('pages/terms-conditions') ? 'active' : '' }}" href="{{ route('web.page_detail', 'terms-conditions') }}">Terms &amp; Conditions </a>
                            <a class="abu_item" href="{{ url('contact_us') }}">Contact Us </a>
                        </div>
                        <h4>social icon</h4>
                        <div class="abu_wrpr social">
                            @if ($settings->facebook_account_linik)
                            <a href="{{ $settings->facebook_account_linik }}" class="au_item">
                                <div class="icon fb">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                Facebook
                            </a>
                            @endif

                            @if ($settings->instagram_account_link)
                            <a href="{{ $settings->instagram_account_link }}" class="au_item">
                                <div class="icon insta">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                Instagram
                            </a>
                            @endif
                            
                            @if ($settings->google_plus_account_link)
                            <a href="{{ $settings->google_plus_account_link }}" class="au_item">
                                <div class="icon google_plus">
                                    <i class="fab fa-google-plus-g"></i>
                                </div>
                                Google+
                            </a>
                            @endif

                            @if ($settings->pinterest_account_link)
                            <a href="{{ $settings->pinterest_account_link }}" class="au_item">
                                <div class="icon pt">
                                    <i class="fab fa-pinterest"></i>
                                </div>
                                Pinterest
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection