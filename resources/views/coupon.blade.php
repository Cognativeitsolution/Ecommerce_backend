@extends('layouts.app')

@section('seo')
<title>{{ $settings->title }}</title>
<meta name="keywords" content="{{ $settings->keywords }}" />
<meta name="description" content="{{ $settings->description }}" />
@endsection

@section('content')

<!-- Slider -->
<section class="main_slider">
   <div class="hero-content">
      <div class="swiper heroSwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
         <div class="swiper-wrapper" id="swiper-wrapper-e223736527867c8a" aria-live="polite">
            @foreach ($slider as $details)
            @if ($details->status == 1)
            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" style="width: 1086px;">
               <img src="{{ asset('images/' . $details->image) }}">
               <h2 style="opacity: 1; transform: translate(0px, 0px);"> {{ $details->title }} </h2>
               <p style="opacity: 1; transform: translate3d(0px, 6.0743px, 0px);">
                  {{ $details->description }}
               </p>
               <a href="{{ $details->url }}" target="_blank" style="opacity: 1; transform: translate3d(0px, 30.7016px, 0px);">Shop Now</a>
            </div>
            @else
            @continue
            @endif
            @endforeach
         </div>
         <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
      <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-3f6b37d088b11edf"></div>
      <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-3f6b37d088b11edf"></div>
   </div>
</section>






  
<!-- Item slider-->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="product_slider carousel carousel-showmanymoveone slide" id="itemslider">
      <div class="primary_heading">
               <h2>Top Stores</h2>
            </div>
        <div class="carousel-inner">
         <?php $chk = 1; ?>
        @foreach($top_stores as $top_store)
          <div class="item <?php if($chk ==1){echo "active"; $chk = 0;} ?>">
            <div class="col-xs-12 col-sm-6 col-md-2">
            <div class="tcb-product-item">
                                       <div class="tcb-product-info">
                                          <div class="tcb-product-title">
                                             <h4><a href="#">{{ Str::of( $top_store->name )->limit(25, ' ') }} </a></h4>
                                          </div>
                                       </div>
                                       <div class="tcb-product-photo">
                                          <a href="#"><img src="{{ asset('/images/' .$top_store->image) }}" class="img-responsive" alt="a" /></a>
                                       </div>
                                       <div class="tcb-product-info">
                                          <a href="{{ url('stores/' .$top_store->slug) }}" class="vs_btn btn btn-info" target="_blank">View Store</a>
                                       </div>
                                 </div>
            </div>
          </div>
           @endforeach
          
         
          
        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
      <br><a class="link" href="{{ url('stores') }}">All Stores</a>
      </div>
      
    </div>
    
  </div>
</div>
<!-- Item slider end-->






<!----Featured Offer-->
<section class="featured_offer">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="primary_heading">
               <h2>Featured Offers</h2>
            </div>
            <div class="featured_grid">
               @foreach($featured_offers as $featured_offer)
               <div class="featured_cpn_wrapper">
                  
                  <div class="f_o_img">
                     <span class="web_imagebox">
                        <img src="{{ asset('/images/' .$featured_offer->image) }}" alt="{{ $featured_offer->name }}">
                  </span>
                  </div>
                  <div class="featured_details">
                     <h4 class="show_coupon" data-id="24303" data-clipboard-text="{{ Str::mask($featured_offer->coupon_code, '*', 0, 2) }}">
                        {{ Str::words( $featured_offer->title, 10, ' ..')  }}
                     </h4>
                     <p class="featured_desc">
                        {{ $featured_offer->short_description }}
                     </p>
                     <div class="details_wrapper">
                        <p class="end"><i class="fa fa-clock-o"></i> Expires: {{ date('d-m-Y', strtotime($featured_offer->expire_date)) }}</p>
                        <p class="uses"><i class="fa fa-user"></i> Uses : {{ $featured_offer->views }} Uses</p>
                     </div>
                     <div class="code_btn_container">
                        <a href="javascript:void(0);"  data-toggle="modal" onclick="getCodeDeal({{ $featured_offer->id }}),copy_code({{ $featured_offer->id }})" data-target="#{{ $featured_offer->id }}" class="coupon_btn_a <?php echo ($featured_offer->code == 1) ? '' : 'deal'; ?> show_coupon homepage" data-id="24303" data-clipboard-text="{{ $featured_offer->coupon_code }}" "="" data-text="{{ Str::mask($featured_offer->coupon_code, '*', 0, 2) }}">
                           <?php echo ($featured_offer->code == 1) ? 'Get Code' : 'Get Deal'; ?>
                        </a>
                     </div>
                  </div>
               </div>

               <!-- Modal -->
               <div class="modal fade" id="{{ $featured_offer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal_main">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{ Str::words( $featured_offer->title, 3, ' ..')  }}</h5>
                              <div class="store_title_modal">
                                 <div class="modal_title_img">
                                    <div class="web_imagebox">
                                       <img src="{{ asset('/images/' .$featured_offer->image) }}" width="100%" />
                                    </div>
                                 </div>
                                 <div class="modal_title_content">
                                    <h2 class="store_modal">{{ $featured_offer->title }}</h2>
                                 </div>
                              </div>
                              <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="modal_body_main">
                                 <p>
                                    {{ $featured_offer->short_description }}
                                 </p>
                                 <div class="modal_code" id="ctc{{ $featured_offer->id }}">
                                    {{ $featured_offer->coupon_code }}
                                    <input type="hidden" id="siteURL{{ $featured_offer->id }}" value="{{ $featured_offer->redirect_site_url }}"/>
                                    <input type="text" class="text hide" id="myInput{{ $featured_offer->id }}" value="{{ $featured_offer->coupon_code }}" />
                                    <button class="button_clone" onclick="copy_code({{ $featured_offer->id }})"><i class="fa fa-clone"></i></button>
                                 </div>
                                 <a href="{{ $featured_offer->redirect_site_url }}" class="visit_site">Go to the {{ $featured_offer->redirect_site_name }}<i class=" fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="modal_body_sidebar">
                           <div class="modal_badge">
                              <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                 <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> start date :</h3>
                                 <p>{{ date('d-m-Y', strtotime($featured_offer->start_date)) }}</p>
                              </div>
                           </div>
                           <div class="modal_badge">
                              <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                 <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> Expiry Date :</h3>
                                 <p>{{ date('d-m-Y', strtotime($featured_offer->expire_date)) }}</p>
                              </div>
                           </div>
                           <div class="modal_badge">
                              <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z" />
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> Verified On :</h3>
                                 <p>{{ date('d-m-Y', strtotime($featured_offer->verified_on)) }}</p>
                              </div>
                           </div>


                        </div>
                     </div>
                  </div>
               </div>
               <!-- end model -->


               @endforeach

            </div>

         </div>
      </div>
   </div>
   </div>
</section>




<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    
      <div class="product_slider carousel carousel-showmanymoveone slide" id="itemslider2">
      <div class="primary_heading">
               <h2>Popular Categories</h2>
            </div>
        <div class="carousel-inner">
        
         <?php $chk2 = 1; ?>
         @foreach($popular_categories as $popular_category)
          <div class="item <?php if($chk2 ==1){echo "active"; $chk2 = 0;} ?>">
            <div class="col-xs-12 col-sm-6 col-md-2">
            <div class="tcb-product-item">
                                       <div class="tcb-product-info">
                                          <div class="tcb-product-title">
                                             <h4><a href="#">{{$popular_category->name}}</a></h4>
                                          </div>
                                       </div>
                                       <div class="tcb-product-photo">
                                          <a href="#"><img src="{{ asset('/images/' .$popular_category->image) }}" class="img-responsive" alt="a" /></a>
                                       </div>
                                       <div class="tcb-product-info">
                                          <a href="{{ url('category/' .$popular_category->slug) }}" class="vs_btn btn btn-info" target="_blank">View Category</a>
                                       </div>
                                 </div>
            </div>
          </div>
           @endforeach
          
         
          
        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#itemslider2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
      <br><a class="link" href="{{ url('categories') }}">All Categories</a>
      </div>
      
    </div>
    
  </div>
</div>



<!---How to save -->
<section class="how_to">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="primary_heading">
               <h2>Save by buying vouchers</h2>
            </div>
            <div class="how_to_wrpaer">
               <div class="how_to_item">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                     <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path>
                  </svg>
                  <h3 class="howblck_head">Step in &amp; explore
                  </h3>
                  <p class="howblck_descp">Step into the world of savings by exploring various deals and coupon codes available on every product.
                  </p>
               </div>
               <div class="how_to_item">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                     <path d="M152 0H154.2C186.1 0 215.7 16.91 231.9 44.45L256 85.46L280.1 44.45C296.3 16.91 325.9 0 357.8 0H360C408.6 0 448 39.4 448 88C448 102.4 444.5 115.1 438.4 128H480C497.7 128 512 142.3 512 160V224C512 241.7 497.7 256 480 256H32C14.33 256 0 241.7 0 224V160C0 142.3 14.33 128 32 128H73.6C67.46 115.1 64 102.4 64 88C64 39.4 103.4 0 152 0zM190.5 68.78C182.9 55.91 169.1 48 154.2 48H152C129.9 48 112 65.91 112 88C112 110.1 129.9 128 152 128H225.3L190.5 68.78zM360 48H357.8C342.9 48 329.1 55.91 321.5 68.78L286.7 128H360C382.1 128 400 110.1 400 88C400 65.91 382.1 48 360 48V48zM32 288H224V512H80C53.49 512 32 490.5 32 464V288zM288 512V288H480V464C480 490.5 458.5 512 432 512H288z"></path>
                  </svg>
                  <h3 class="howblck_head">Claim your deal today! 
                  </h3>
                  <p class="howblck_descp">Our trustworthy link will lead you directly to the checkout page of the main website.
                  </p>
               </div>
               <div class="how_to_item">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                     <path d="M256 48C256 21.49 277.5 0 304 0H592C618.5 0 640 21.49 640 48V464C640 490.5 618.5 512 592 512H381.3C383 506.1 384 501.6 384 496V253.3C402.6 246.7 416 228.9 416 208V176C416 149.5 394.5 128 368 128H256V48zM571.3 347.3C577.6 341.1 577.6 330.9 571.3 324.7L507.3 260.7C501.1 254.4 490.9 254.4 484.7 260.7L420.7 324.7C414.4 330.9 414.4 341.1 420.7 347.3C426.9 353.6 437.1 353.6 443.3 347.3L480 310.6V432C480 440.8 487.2 448 496 448C504.8 448 512 440.8 512 432V310.6L548.7 347.3C554.9 353.6 565.1 353.6 571.3 347.3H571.3zM0 176C0 167.2 7.164 160 16 160H368C376.8 160 384 167.2 384 176V208C384 216.8 376.8 224 368 224H16C7.164 224 0 216.8 0 208V176zM352 480C352 497.7 337.7 512 320 512H64C46.33 512 32 497.7 32 480V256H352V480zM144 320C135.2 320 128 327.2 128 336C128 344.8 135.2 352 144 352H240C248.8 352 256 344.8 256 336C256 327.2 248.8 320 240 320H144z"></path>
                  </svg>
                  <h3 class="howblck_head">Pick Out The Best Deals</h3>
                  <p class="howblck_descp">Select the finest deals and coupons to enhance your shopping experience and save money.
                  </p>
               </div>
               <div class="how_to_item">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                     <path d="M512 32C547.3 32 576 60.65 576 96V128H0V96C0 60.65 28.65 32 64 32H512zM576 416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V224H576V416zM112 352C103.2 352 96 359.2 96 368C96 376.8 103.2 384 112 384H176C184.8 384 192 376.8 192 368C192 359.2 184.8 352 176 352H112zM240 384H368C376.8 384 384 376.8 384 368C384 359.2 376.8 352 368 352H240C231.2 352 224 359.2 224 368C224 376.8 231.2 384 240 384z"></path>
                  </svg>
                  <h3 class="howblck_head">Gratifying checkouts</h3>
                  <p class="howblck_descp">Enjoy a satisfying checkout experience with amusing discounted prices that will keep you feeling cheerful.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!---- Latest Offer-->
<section class="latest_offer">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="primary_heading">
               <h2>Latest Offers</h2>
            </div>
            <div class="featured_grid">

               @foreach($latest_offers as $latest_offer)
               <div class="featured_cpn_wrapper">
                  
                  <div class="f_o_img">
                     <span class="web_imagebox">
                        <img src="{{ asset('/images/' .$latest_offer->image) }}" alt="{{ $latest_offer->name }}">
                     </span>
                  </div>
                  <div class="featured_details">
                     <h4 class="show_coupon" data-id="24303" data-clipboard-text="{{ Str::mask($latest_offer->coupon_code, '*', 0, 2) }}">
                        {{ Str::words( $latest_offer->title, 10, ' ..')  }}
                     </h4>
                     <p class="featured_desc">
                        {{ $latest_offer->short_description }}
                     </p>
                     <div class="details_wrapper">
                        <p class="end"><i class="fa fa-clock-o"></i> Expires: {{ date('d-m-Y', strtotime($latest_offer->expire_date)) }}</p>
                        <p class="uses"><i class="fa fa-user"></i> Uses : {{ $latest_offer->views }} Uses</p>
                     </div>
                     <div class="code_btn_container">
                        <a href="javascript:void(0);" data-toggle="modal" onclick="getCodeDeal({{ $latest_offer->id }}),copy_code({{ $latest_offer->id }})" data-target="#{{ $latest_offer->id }}" class="coupon_btn_a <?php echo ($latest_offer->code == 1) ? '' : 'deal'; ?> show_coupon homepage" data-id="24303" data-clipboard-text="{{ $latest_offer->coupon_code }}" "="" data-text="{{ Str::mask($latest_offer->coupon_code, '*', 0, 2) }}">
                           <?php echo ($latest_offer->code == 1) ? 'Get Code' : 'Get Deal'; ?>
                        </a>
                     </div>
                  </div>
               </div>

               <!-- Modal -->
               <div class="modal fade" id="{{ $latest_offer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal_main">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">{{ Str::words( $latest_offer->title, 3, ' ..')  }}</h5>
                              <div class="store_title_modal">
                                 <div class="modal_title_img">
                                    <div class="web_imagebox">
                                       <img src="{{ asset('/images/' .$latest_offer->image) }}" width="100%" />
                                    </div>
                                 </div>
                                 <div class="modal_title_content">
                                    <h2 class="store_modal">{{ $latest_offer->title }}</h2>
                                 </div>
                              </div>
                              <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="modal_body_main">
                                 <p>
                                    {{ $latest_offer->short_description }}
                                 </p>
                                 <div class="modal_code" id="ctc{{ $latest_offer->id }}">
                                    {{ $latest_offer->coupon_code }}
                                    <input type="hidden" id="siteURL{{ $latest_offer->id }}" value="{{ $featured_offer->redirect_site_url }}"/>
                                    <input type="text" class="text hide" id="myInput{{ $latest_offer->id }}" value="{{ $latest_offer->coupon_code }}" />
                                    <button class="button_clone" onclick="copy_code({{ $latest_offer->id }})"><i class="fa fa-clone"></i></button>
                                 </div>
                                 <a href="{{ $latest_offer->redirect_site_url }}" class="visit_site">Go to the {{ $latest_offer->redirect_site_name }}<i class=" fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="modal_body_sidebar">
                           <div class="modal_badge">
                              <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                 <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> start date :</h3>
                                 <p>{{ date('d-m-Y', strtotime($latest_offer->start_date)) }}</p>
                              </div>
                           </div>
                           <div class="modal_badge">
                              <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                 <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> Expiry Date :</h3>
                                 <p>{{ date('d-m-Y', strtotime($latest_offer->expire_date)) }}</p>
                              </div>
                           </div>
                           <div class="modal_badge">
                              <svg class="modal_badge_content_title" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z" />
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> Verified On :</h3>
                                 <p>{{ date('d-m-Y', strtotime($latest_offer->verified_on)) }}</p>
                              </div>
                           </div>


                        </div>
                     </div>
                  </div>
               </div>
               <!-- end model -->

               @endforeach

            </div>

         </div>
      </div>
   </div>
   </div>
</section>

<!----FAQ --->
<section class="faq bg_color">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 class="heading">Frequently Asked Questions</h2>
            <div class="f_a_q_container">
               <div class="f_a_q_wrapper">
                  <div class="question">
                     <h4>What is the expiration date of my voucher? <i class="fa fa-caret-down"></i></h4>
                     <p class="hide_text" style="display: block;">The expiration date of the voucher will be clearly stated in the voucher details. Please be sure to use your voucher before the expiration date.</p>
                  </div>
                  <div class="question">
                     <h4>What happens if I lose my voucher? <i class="fa fa-caret-down"></i></h4>
                     <p class="hide_text" style="display: none;">Lost or stolen vouchers cannot be replaced, so please keep your voucher in a safe place.</p>
                  </div>
                  <div class="question">
                     <h4>Can I combine my voucher with other offers or discounts? <i class="fa fa-caret-down"></i></h4>
                     <p class="hide_text" style="display: none;">Vouchers cannot be combined with other offers or discounts, unless specifically stated in the voucher details.</p>
                  </div>
                  <div class="question">
                     <h4>What if the business or service provider no longer accepts my voucher? <i class="fa fa-caret-down"></i></h4>
                     <p class="hide_text" style="display: none;">If a business or service provider no longer accepts your voucher, please contact us and we will work with you to resolve the issue.</p>
                  </div>
               </div>
               <div class="faq_image">
                  <img src="{{ asset('assets/images/faq.png') }}" />
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!----Disclaimer-->
<section class="disclaimer-container">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="disclaimer">
               <div class="box_heading">
                  Disclaimer
               </div>
               <p class="disclaimer_text">
                  {{ $settings->disclaimer }}
               </p>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection