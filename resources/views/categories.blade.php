@extends('layouts.app')

@section('seo')
   <title>E Commerce All Categories</title>
   <meta name="keywords" content="E Commerce shopping categories, E Commerce keywords"/>
   <meta name="description" content="E Commerce shopping categories, E Commerce description"/>
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
                                      <li><a href="#">SavenBuy</a></li>
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
                        <div class="category_wrapper">
                        @if(!empty($record) && $record->count())
                            @foreach($record as $category)
                                <div class="category_item">
                                    <a href="{{ url('stores/' .$category->slug) }}" class="category_item-link">
                                        <div class="category_img-box">
                                            <div class="web_imagebox">
                                            <img class="lazy" src="{{ asset('thumbnail/' .$category->image) }}" style="">
                                            </div>
                                        </div>
                                        <div class="cat_head_name">{{ $category->name }}</div>
                                        <div class="cat_head_viewmore-btn">
                                            View All Offers <i class="fa fa-angle-double-right"></i>
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