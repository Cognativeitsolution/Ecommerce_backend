@extends('layouts.app')

@section('seo')
<title>E Commerce All Categories</title>
<meta name="keywords" content="E Commerce shopping categories, E Commerce keywords" />
<meta name="description" content="E Commerce shopping categories, E Commerce description" />
@endsection

@section('content')
<section class="stores_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs_dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="store_main-title">
                                    <h2 class="store_title sl_page">All Categories</h2>
                                    <ul class="store_breadcrumbs store_list">
                                        <li><a href="{{ route('web.coupon') }}">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li>All Categories</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>

<section class="category_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cat_wrapper">

                @if(!empty($record) && $record->count())
                    @foreach($record as $category)

                    <div class="secondary_cat_item">

                        <a href="{{ url('category/' .$category->slug) }}" class="cat_item-link">
                            <div class="cat_image-box">
                                <div class="web_imagebox">
                                <img src="{{ asset('images/' .$category->image ) }}" class="lazy_cat-image"/>
                                </div>
                            </div>
                            <div class="cat_desc">
                                {{ $category->name }}
                            </div>
                        </a>

                    </div>

                    @endforeach
                @endif

                 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection