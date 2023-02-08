@extends('layouts.app')

@section('seo')
   <title>{{ $store->title }}</title>
   <meta name="keywords" content="{{ $store->meta ? $store->meta->meta_keywords : '' }}"/>
   <meta name="description" content="{{ $store->meta ? $store->meta->meta_description : '' }}"/>
@endsection

@section('content')
<section class="ss_offers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ss_coupon-container">
                    <div class="ss_main">
                        <div class="ss_main-profile">
                            <div class="ss_main-wrapper">
                                <div class="ss_profile-img">
                                    <a href="#" class="web_imagebox">
                                        <img src="{{ asset('images/' . $store->image) }}" alt="ss-img" class="store_image">
                                    </a>
                                </div>
                                <div class="ss_profile-content">
                                    <h2>{{ $store->name }}</h2>
                                    <p>
                                    <i class="far fa-check-circle"></i>
                                    {{ $store->title }}
                                    </p>
                                    <div class="rating-stars">
                                        <ul id="stars" class="stars" data-store-id="26">
                                            <li class="star selected" title="Poor" data-value="1" id="rating-1">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="star selected" title="Fair" data-value="2" id="rating-2">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="star selected" title="Good" data-value="3" id="rating-3">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="star selected" title="Excellent" data-value="4" id="rating-4">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="star selected" title="WOW!!!" data-value="5" id="rating-5">
                                                <i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <p class="ratings text-center">
                                            5 Rating, 4 Votes                              
                                        </p>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="offer_switcher">
                            <a href="#" class="sw_offer all all_btn active">
                                All ({{ $store->coupon_count }})
                            </a>
                            <a href="#" class="sw_offer codes codes_btn">
                                Codes ({{ $store->code_count }})
                            </a>
                            <a href="#" class="sw_offer deals deals_btn">
                                Deals ({{ $store->deal_count }})
                            </a>
                        </div>
                        <div class="coupon-main-wrapper">

                        @foreach($store->coupon as $coupon)
                            <div class="coupon coupon_card <?php echo ($coupon->code == 1) ? 'coupan_content' : 'deal_content'; ?> ">
                                <div class="verified_tag">
                                    <i class="fas fa-shield-alt"></i>
                                    Verified
                                </div>
                                <div class="coupon_dis">
                                    <a href="#" class="web_imagebox">
                                        <img src="{{ asset('thumbnail/' .$coupon->image ) }}" alt="coupon">
                                    </a>
                                </div>
                                <div class="ss_coupon-content">
                                    <div class="ss_coupon-head">
                                        <h3>{{ Str::words( $coupon->title, 10, ' ..')  }}</h3>
                                    </div>
                                    <div class="ss_coupon-text">
                                        <p>{{ $coupon->short_description }}</p>
                                    </div>
                                    <div class="ss_info">
                                        <div class="st st_uses">{{ $coupon->views }} Person Uses</div>
                                        <div class="st st_date"><i class="far fa-clock"></i> &nbsp; Added: {{ date('d-m-Y', strtotime($coupon->start_date)) }}</div>
                                        <div class="st st_expiry"><i class="far fa-clock"></i> &nbsp; Expiry: {{ date('d-m-Y', strtotime($coupon->expire_date)) }}</div>
                                    </div>
                                </div>
                                <div class="ss_coupon-code">
                                    <a href="javascript:void(0);" onclick="myFunction({{ $coupon->id }})" data-toggle="modal" onclick="getCodeDeal({{ $coupon->id }})" data-target="#{{ $coupon->id }}" class="show_coupon coupon_btn_a deal show_coupon homepage" data-text="No Code!">
                                    <?php echo ($coupon->code == 1) ? 'Get Code' : 'Get Deal'; ?> 
                                    </a>
                                </div>
                            </div>




                            <div class="modal fade" id="{{ $coupon->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal_main">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">{{ Str::words( $coupon->title, 3, ' ..')  }}</h5>
                                             <div class="store_title_modal">
                                                <div class="modal_title_img">
                                                   <div class="web_imagebox">
                                                      <img src="{{ asset('thumbnail/' .$coupon->image ) }}" width="100%"  />
                                                   </div>
                                                </div>
                                                <div class="modal_title_content">
                                                   <h2 class="store_modal">{{ $coupon->title }}</h2>
                                                </div>
                                             </div>
                                             <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                             </button>
                                          </div>
                                          <div class="modal-body">
                                             <div class="modal_body_main">
                                                <p>
                                                    {{ $coupon->short_description }}
                                                </p>
                                                <div class="modal_code" id="ctc{{ $coupon->id }}">
                                                   {{ $coupon->coupon_code }}
                                                   <input type="text" class="text hide" id="myInput{{ $coupon->id }}" value="{{ $coupon->coupon_code }}" />
                                                    <button class="button_clone" onclick="myFunction({{ $coupon->id }})"><i class="fa fa-clone"></i></button>
                                                </div>
                                                <a href="{{ $coupon->redirect_site_url }}" target="_blank" class="visit_site">Go to the {{ $coupon->redirect_site_name }} <i class=" fa fa-arrow-right"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="modal_body_sidebar">
                                          <div class="modal_badge">
                                             <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                              </svg>
                                             <div class="modal_badge_content">
                                                <h3 class="modal_badge_content_title"> start date :</h3>
                                                <p>{{ date('d-m-Y', strtotime($coupon->start_date)) }}</p>
                                             </div>
                                          </div>
                                          <div class="modal_badge">
                                             <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                              </svg>
                                             <div class="modal_badge_content">
                                                <h3 class="modal_badge_content_title"> Expiry Date :</h3>
                                                <p>{{ date('d-m-Y', strtotime($coupon->expire_date)) }}</p>
                                             </div>
                                          </div>
                                          <div class="modal_badge">
                                             <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                                              </svg>
                                             <div class="modal_badge_content">
                                                <h3 class="modal_badge_content_title"> Verified On :</h3>
                                                <p>{{ date('d-m-Y', strtotime($coupon->verified_on)) }}</p>
                                             </div>
                                          </div>

                                       </div>
                                    </div>
                                 </div>
                              </div>
                        @endforeach

                            
                           
                        </div>


                    </div>
                    <div class="ss_sidebar">
                        <div class="coupon_sidebar">
                            <h2 class="c_heading-section">About <span>{{ Str::words( $store->short_description, 4, ' ..')  }}</span></h2>
                            <div class="side_body">
                            <p class="ss_about">
                            {!! $store->long_description !!}
                            </p>
                            </div>
                        </div>

                        <div class="coupon_sidebar-related">
                            <h4>Popular Categories <i class="fa fa-list"></i> </h4>
                            <div class="coupon_sidebar_items_btn">   

                            @if(!empty($popular_categories) && $popular_categories->count())

                                @foreach($popular_categories as $popular_category)
                                <a href="{{ url('stores/' .$popular_category->slug) }}">{{ Str::words( $popular_category->name, 2, ' ') }}</a>
                                @endforeach

                            @else
                            <a href="{{ url('stores/') }}">No Popular Category</a>
                            @endif

                            </div>
                        </div>

                        
                        <div class="coupon_sidebar-related">
                            <h4>Related Stores <i class="fa fa-list"></i> </h4>
                            <div class="coupon_sidebar_items_btn">   
                            @if(!empty($related_stores) && $related_stores->count())

                                @foreach($related_stores as $related_store)
                                <a href="{{ url('stores/' .$related_store->slug) }}">{{ Str::words( $related_store->name, 2, ' ') }}</a>
                                @endforeach

                            @else
                            <a href="{{ url('stores/') }}">No Related Stores</a>
                            @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
$(document).ready(function(){
    $(".all_btn").click(function(event){
    event.preventDefault();
    $(".coupan_content").css('display','flex');
    $(".deal_content").css('display','flex');
    });
    $(".codes_btn").click(function(event){
    event.preventDefault();
    $(".coupan_content").css('display','flex');
    $(".deal_content").css('display','none');
    });
    $(".deals_btn").click(function(event){
    event.preventDefault();
    $(".coupan_content").css('display','none');
    $(".deal_content").css('display','flex');
    
    });
});
</script>
@endsection