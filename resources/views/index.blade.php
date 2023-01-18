@extends('layouts.app')

@section('seo')
   <!-- <title>{{ $settings->title }}</title> -->
   <title>Ecommerce - Homepage</title>
   <!-- <meta name="keywords" content="{{ $settings->keywords }}"/>
   <meta name="description" content="{{ $settings->description }}"/> -->
@endsection

@section('content')

   <section class="main_slider">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="hero-content">
                  <!-- Hero Swiper Slides Start -->
                  <div class="swiper heroSwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                     
                     <div class="swiper-wrapper" id="swiper-wrapper-e223736527867c8a" aria-live="polite">
                        <div class="swiper-slide swiper-slide-active" role="group" data-bg="{{ asset('assets/img/bann1.jpg') }}" aria-label="1 / 9" style="width: 1086px;background-image: url({{ asset('assets/images/bann1.jpg') }});">
                           <h2 style="opacity: 1; transform: translate(0px, 0px);"> Up to 50% off Mid Season Sale Items </h2>
                           <p style="opacity: 1; transform: translate3d(0px, 6.0743px, 0px);"> Enter this discount code at checkout to save 10% on all orders at bluebella.
                           </p>
                           <a href="single_store.html"  style="opacity: 1; transform: translate3d(0px, 30.7016px, 0px);">Shop Now</a>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" data-bg="{{ asset('assets/images/bann2.jpg') }}" aria-label="2 / 9" style="width: 1086px;background-image: url({{ asset('assets/images/bann2.jpg') }});">
                           <h2 style="opacity: 1; transform: translate(0px, 0px);"> Up to 50% off Mid Season Sale Items </h2>
                           <p style="opacity: 1; transform: translate3d(0px, 6.0743px, 0px);"> Enter this discount code at checkout to save 10% on all orders at bluebella.
                           </p>
                           <a href="single_store.html"  style="opacity: 1; transform: translate3d(0px, 30.7016px, 0px);">Shop Now</a>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 9" data-bg="{{ asset('assets/images/bann3.jpg') }}" style="width: 1086px;background-image: url({{ asset('assets/images/bann3.jpg') }});">
                           <h2 style="opacity: 1; transform: translate(0px, 0px);"> Up to 50% off Mid Season Sale Items </h2>
                           <p style="opacity: 1; transform: translate3d(0px, 6.0743px, 0px);"> Enter this discount code at checkout to save 10% on all orders at bluebella.
                           </p>
                           <a href="single_store.html"  style="opacity: 1; transform: translate3d(0px, 30.7016px, 0px);">Shop Now</a>
                        </div>
                     </div>
                     <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                  </div>
                  <!-- Add Navigation -->
                  <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-3f6b37d088b11edf"></div>
                  <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-3f6b37d088b11edf"></div>
                  <!-- Hero Swiper Slides End -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!---Popular Store-->
   <section class="section-popstore">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="primary_heading">
                  <h2>Top Stores</h2>
               </div>
               <div class="pop_store_wrapper">
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/bnr_3.jpg') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/str_logo.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/bnr_3.jpg') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/str_logo.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/bnr_3.jpg') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/str_logo.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/bnr_3.jpg') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/str_logo.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/bnr_3.jpg') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/str_logo.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/bnr_3.jpg') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/str_logo.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/bnr_3.jpg') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/str_logo.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/bnr_3.jpg') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/str_logo.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!----Featured Offer-->
   <section class="featured_offer">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="primary_heading">
                  <h2>Featured Offer</h2>
               </div>
               <div class="featured_grid">
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy">
                     </div>
                     <div class="f_o_img">
                        <a href="#" class="web_imagebox">
                        <img src="{{ asset('assets/images/store_img.png') }}" alt="">
                        </a>
                     </div>
                     <div class="featured_details">
                        <h4 class="show_coupon" data-id="24303" data-clipboard-text="WELCOME10"> £10 Off On Order £99+</h4>
                        <p class="featured_desc">
                           Get £10 Off On Order Above £99 At Bedfolks      
                        </p>
                        <div class="details_wrapper">
                           <p class="end"><i class="fa fa-clock-o"></i> Expires: 31, Dec 23</p>
                           <p class="uses"><i class="fa fa-user"></i> Uses : 0 Uses</p>
                        </div>
                        <div class="code_btn_container">
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="coupon_btn_a show_coupon homepage" data-id="24303" data-clipboard-text="WELCOME10" "="" data-text="**LCOME10">Get Code</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy">
                     </div>
                     <div class="f_o_img">
                        <a href="#" class="web_imagebox">
                        <img src="{{ asset('assets/images/store_img.png') }}" alt="">
                        </a>
                     </div>
                     <div class="featured_details">
                        <h4 class="show_coupon" data-id="24208" data-clipboard-text=" "> Free UK Delivery &amp; Return</h4>
                        <p class="featured_desc">
                           Get Free Delivery All Over UK      
                        </p>
                        <div class="details_wrapper">
                           <p class="end"><i class="fa fa-clock-o"></i> Expires: 31, Dec 23</p>
                           <p class="uses"><i class="fa fa-user"></i> Uses : 0 Uses</p>
                        </div>
                        <div class="code_btn_container">
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="show_coupon coupon_btn_a deal show_coupon homepage" data-id="24208" data-clipboard-text=" " "="" data-text="No Code!">Get Deal</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy">
                     </div>
                     <div class="f_o_img">
                        <a href="#" class="web_imagebox">
                        <img src="{{ asset('assets/images/store_img.png') }}" alt="">
                        </a>
                     </div>
                     <div class="featured_details">
                        <h4 class="show_coupon"  data-id="22429" data-clipboard-text="WELCOME15"> 15% Off First Order</h4>
                        <p class="featured_desc">
                           Get 15% Off First Order at Bobbi Brown      
                        </p>
                        <div class="details_wrapper">
                           <p class="end"><i class="fa fa-clock-o"></i> Expires: 31, Dec 23</p>
                           <p class="uses"><i class="fa fa-user"></i> Uses : 1 Uses</p>
                        </div>
                        <div class="code_btn_container">
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="coupon_btn_a show_coupon homepage" data-id="22429" data-clipboard-text="WELCOME15" "="" data-text="**LCOME15">Get Code</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy">
                     </div>
                     <div class="f_o_img">
                        <a href="#" class="web_imagebox">
                        <img src="{{ asset('assets/images/store_img.png') }}" alt="">
                        </a>
                     </div>
                     <div class="featured_details">
                        <h4 class="show_coupon" data-id="25072" data-clipboard-text=" "> Gift Card Starting From $25</h4>
                        <p class="featured_desc">
                           Shop Gift Card Starting From $25 At StubHub      
                        </p>
                        <div class="details_wrapper">
                           <p class="end"><i class="fa fa-clock-o"></i> Expires: 31, Dec 23</p>
                           <p class="uses"><i class="fa fa-user"></i> Uses : 0 Uses</p>
                        </div>
                        <div class="code_btn_container">
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="show_coupon coupon_btn_a deal show_coupon homepage" data-id="25072" data-clipboard-text=" " "="" data-text="No Code!">Get Deal</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!----Popular Category-->
   <section class="pop_cat">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="primary_heading">
                  <h2>Popular Category</h2>
               </div>
               <div class="category_grid-container">
                  <div class="cat_item cat_item-one">
                     <div class="categories_main_content">
                        <h3 class="categories_title">Fashion</h3>
                        <p class="categories_offer">(620) Offers</p>
                     </div>
                     <div class="category_img ">
                        <img src="{{ asset('assets/images/cat_img.png') }}" alt="cat_img" class="category_image">
                     </div>
                  </div>
                  <div class="cat_item cat_item-one">
                     <div class="categories_main_content">
                        <h3 class="categories_title">Fashion</h3>
                        <p class="categories_offer">(620) Offers</p>
                     </div>
                     <div class="category_img ">
                        <img src="{{ asset('assets/images/cat_img.png') }}" alt="cat_img" class="category_image">
                     </div>
                  </div>
                  <div class="cat_item cat_item-one">
                     <div class="categories_main_content">
                        <h3 class="categories_title">Fashion</h3>
                        <p class="categories_offer">(620) Offers</p>
                     </div>
                     <div class="category_img ">
                        <img src="{{ asset('assets/images/cat_img.png') }}" alt="cat_img" class="category_image">
                     </div>
                  </div>
                  <div class="cat_item cat_item-one">
                     <div class="categories_main_content">
                        <h3 class="categories_title">Fashion</h3>
                        <p class="categories_offer">(620) Offers</p>
                     </div>
                     <div class="category_img ">
                        <img src="{{ asset('assets/images/cat_img.png') }}" alt="cat_img" class="category_image">
                     </div>
                  </div>
                  <div class="cat_item cat_item-one">
                     <div class="categories_main_content">
                        <h3 class="categories_title">Fashion</h3>
                        <p class="categories_offer">(620) Offers</p>
                     </div>
                     <div class="category_img ">
                        <img src="{{ asset('assets/images/cat_img.png') }}" alt="cat_img" class="category_image">
                     </div>
                  </div>
                  <div class="cat_item cat_item-one">
                     <div class="categories_main_content">
                        <h3 class="categories_title">Fashion</h3>
                        <p class="categories_offer">(620) Offers</p>
                     </div>
                     <div class="category_img ">
                        <img src="{{ asset('assets/images/cat_img.png') }}" alt="cat_img" class="category_image">
                     </div>
                  </div>
                  <div class="cat_item cat_item-one">
                     <div class="categories_main_content">
                        <h3 class="categories_title">Fashion</h3>
                        <p class="categories_offer">(620) Offers</p>
                     </div>
                     <div class="category_img ">
                        <img src="{{ asset('assets/images/cat_img.png') }}" alt="cat_img" class="category_image">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!---How to save -->
   <section class="how_to">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="primary_heading">
                  <h2>HOW TO SAVE WITH SAVENBUY ?</h2>
               </div>
               <div class="how_to_wrpaer">
                  <div class="how_to_item">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path>
                     </svg>
                     <h3 class="howblck_head">Step in &amp; explore
                     </h3>
                     <p class="howblck_descp">You can easily find great deals and coupon codes on every product.
                     </p>
                  </div>
                  <div class="how_to_item">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M152 0H154.2C186.1 0 215.7 16.91 231.9 44.45L256 85.46L280.1 44.45C296.3 16.91 325.9 0 357.8 0H360C408.6 0 448 39.4 448 88C448 102.4 444.5 115.1 438.4 128H480C497.7 128 512 142.3 512 160V224C512 241.7 497.7 256 480 256H32C14.33 256 0 241.7 0 224V160C0 142.3 14.33 128 32 128H73.6C67.46 115.1 64 102.4 64 88C64 39.4 103.4 0 152 0zM190.5 68.78C182.9 55.91 169.1 48 154.2 48H152C129.9 48 112 65.91 112 88C112 110.1 129.9 128 152 128H225.3L190.5 68.78zM360 48H357.8C342.9 48 329.1 55.91 321.5 68.78L286.7 128H360C382.1 128 400 110.1 400 88C400 65.91 382.1 48 360 48V48zM32 288H224V512H80C53.49 512 32 490.5 32 464V288zM288 512V288H480V464C480 490.5 458.5 512 432 512H288z"></path>
                     </svg>
                     <h3 class="howblck_head">Claim your deal
                     </h3>
                     <p class="howblck_descp">Our reliable link directs you to the main website’s checkout page.
                     </p>
                  </div>
                  <div class="how_to_item">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M256 48C256 21.49 277.5 0 304 0H592C618.5 0 640 21.49 640 48V464C640 490.5 618.5 512 592 512H381.3C383 506.1 384 501.6 384 496V253.3C402.6 246.7 416 228.9 416 208V176C416 149.5 394.5 128 368 128H256V48zM571.3 347.3C577.6 341.1 577.6 330.9 571.3 324.7L507.3 260.7C501.1 254.4 490.9 254.4 484.7 260.7L420.7 324.7C414.4 330.9 414.4 341.1 420.7 347.3C426.9 353.6 437.1 353.6 443.3 347.3L480 310.6V432C480 440.8 487.2 448 496 448C504.8 448 512 440.8 512 432V310.6L548.7 347.3C554.9 353.6 565.1 353.6 571.3 347.3H571.3zM0 176C0 167.2 7.164 160 16 160H368C376.8 160 384 167.2 384 176V208C384 216.8 376.8 224 368 224H16C7.164 224 0 216.8 0 208V176zM352 480C352 497.7 337.7 512 320 512H64C46.33 512 32 497.7 32 480V256H352V480zM144 320C135.2 320 128 327.2 128 336C128 344.8 135.2 352 144 352H240C248.8 352 256 344.8 256 336C256 327.2 248.8 320 240 320H144z"></path>
                     </svg>
                     <h3 class="howblck_head">Pick out the best deals</h3>
                     <p class="howblck_descp">Choose the best coupons for a rewarding shopping experience.
                     </p>
                  </div>
                  <div class="how_to_item">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M512 32C547.3 32 576 60.65 576 96V128H0V96C0 60.65 28.65 32 64 32H512zM576 416C576 451.3 547.3 480 512 480H64C28.65 480 0 451.3 0 416V224H576V416zM112 352C103.2 352 96 359.2 96 368C96 376.8 103.2 384 112 384H176C184.8 384 192 376.8 192 368C192 359.2 184.8 352 176 352H112zM240 384H368C376.8 384 384 376.8 384 368C384 359.2 376.8 352 368 352H240C231.2 352 224 359.2 224 368C224 376.8 231.2 384 240 384z"></path>
                     </svg>
                     <h3 class="howblck_head">Gratifying checkouts</h3>
                     <p class="howblck_descp">The amusing discounted prices will keep you cheered up.
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
                  <h2>Latest Offer</h2>
               </div>
               <div class="featured_grid">
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy">
                     </div>
                     <div class="f_o_img">
                        <a href="#" class="web_imagebox">
                        <img src="{{ asset('assets/images/store_img.png') }}" alt="">
                        </a>
                     </div>
                     <div class="featured_details">
                        <h4 class="show_coupon" data-id="24303" data-clipboard-text="WELCOME10"> £10 Off On Order £99+</h4>
                        <p class="featured_desc">
                           Get £10 Off On Order Above £99 At Bedfolks      
                        </p>
                        <div class="details_wrapper">
                           <p class="end"><i class="fa fa-clock-o"></i> Expires: 31, Dec 23</p>
                           <p class="uses"><i class="fa fa-user"></i> Uses : 0 Uses</p>
                        </div>
                        <div class="code_btn_container">
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="coupon_btn_a show_coupon homepage" data-id="24303" data-clipboard-text="WELCOME10" "="" data-text="**LCOME10">Get Code</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy" data-bg="">
                     </div>
                     <div class="f_o_img">
                        <a href="#" class="web_imagebox">
                        <img src="{{ asset('assets/images/store_img.png') }}" alt="">
                        </a>
                     </div>
                     <div class="featured_details">
                        <h4 class="show_coupon" data-id="24208" data-clipboard-text=" "> Free UK Delivery &amp; Return</h4>
                        <p class="featured_desc">
                           Get Free Delivery All Over UK      
                        </p>
                        <div class="details_wrapper">
                           <p class="end"><i class="fa fa-clock-o"></i> Expires: 31, Dec 23</p>
                           <p class="uses"><i class="fa fa-user"></i> Uses : 0 Uses</p>
                        </div>
                        <div class="code_btn_container">
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="show_coupon coupon_btn_a deal show_coupon homepage" data-id="24208" data-clipboard-text=" " "="" data-text="No Code!">Get Deal</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy">
                     </div>
                     <div class="f_o_img">
                        <a href="#" class="web_imagebox">
                        <img src="{{ asset('assets/images/store_img.png') }}" alt="">
                        </a>
                     </div>
                     <div class="featured_details">
                        <h4 class="show_coupon" data-id="22429" data-clipboard-text="WELCOME15"> 15% Off First Order</h4>
                        <p class="featured_desc">
                           Get 15% Off First Order at Bobbi Brown      
                        </p>
                        <div class="details_wrapper">
                           <p class="end"><i class="fa fa-clock-o"></i> Expires: 31, Dec 23</p>
                           <p class="uses"><i class="fa fa-user"></i> Uses : 1 Uses</p>
                        </div>
                        <div class="code_btn_container">
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="coupon_btn_a show_coupon homepage" data-id="22429" data-clipboard-text="WELCOME15" "="" data-text="**LCOME15">Get Code</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy">
                     </div>
                     <div class="f_o_img">
                        <a href="#" class="web_imagebox">
                        <img src="{{ asset('assets/images/store_img.png') }}" alt="">
                        </a>
                     </div>
                     <div class="featured_details">
                        <h4 class="show_coupon" data-id="25072" data-clipboard-text=" "> Gift Card Starting From $25</h4>
                        <p class="featured_desc">
                           Shop Gift Card Starting From $25 At StubHub      
                        </p>
                        <div class="details_wrapper">
                           <p class="end"><i class="fa fa-clock-o"></i> Expires: 31, Dec 23</p>
                           <p class="uses"><i class="fa fa-user"></i> Uses : 0 Uses</p>
                        </div>
                        <div class="code_btn_container">
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal" class="show_coupon coupon_btn_a deal show_coupon homepage" data-id="25072" data-clipboard-text=" " "="" data-text="No Code!">Get Deal</a>
                        </div>
                     </div>
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
               <div class="f_a_q_container bg_img" data-bg="./assets/img/faq.png">
                  <div class="f_a_q_wrapper">
                     <div class="question">
                        <h4>What is the difference between a deal and a kazim? <i class="fa fa-caret-down"></i></h4>
                        <p class="hide_text" style="display: block;">A coupon is a code which needs to be applied at the checkout page to avail the discount whereas a deal is a discounted price on a product or a range of products.</p>
                     </div>
                     <div class="question">
                        <h4>How can I avail a deal from <i class="fa fa-caret-down"></i></h4>
                        <p class="hide_text" style="display: none;">To avail a deal or an offer customers need to simply click on the coupon and buy the product/service at the discounted price mentioned in the coupon.</p>
                     </div>
                     <div class="question">
                        <h4>How can I use a coupon code? <i class="fa fa-caret-down"></i></h4>
                        <p class="hide_text" style="display: none;">To avail the discount via a coupon code customers need to click on the view code option and copy the coupon code. From there they will be redirected to the website. At the checkout page customers need to paste the coupon code click on apply to avail the discount.</p>
                     </div>
                     <div class="question">
                        <h4>Can customers use multiple coupons on a single order? <i class="fa fa-caret-down"></i></h4>
                        <p class="hide_text" style="display: none;">Most brands allow only one coupon per order/transaction but this can vary from brand to brand.</p>
                     </div>
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
                  <p class="disclaimer_text">Disclaimer Is Necessary For Our AS &amp; Advertising Policies, But Make Sure That Your Ailment With All The Appropriates Government Regulations. Disclaimer Are Required For Everyone Who Can Make Money Form These Kind Of Ads Using Affiliate Links. The Only Purpose Is To Help Our Consumers Who Can Understood The Publisher Earn Money From That Links.If Publisher's Affiliate Links Seen On Some One Else's Website Or User Comments, A Disclaimer Should Be Added Any Time A Product Is Support Of And The Publisher Receives Reward. Its Is Necessary Of Both The Audibles And Visuals Disclaimer  22,426  On Videos Or Live Streaming As A Consumers Can Enter Or Exit A Video, Therefore A Clear Visual Disclaimer Is Available. All The Guideline Apply To Mobile Sites And Apps. Digital Marketing And Disclaimer Guidelines Will Continue To Changed And Evolve, So It Is Aware That Any Of The Changes And Make Sure That You Are Always Transparent With Consumers. 1,785   January</p>
               </div>
            </div>
         </div>
      </div>
   </section>

@endsection
