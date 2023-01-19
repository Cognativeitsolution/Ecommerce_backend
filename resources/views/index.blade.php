@extends('layouts.app')

@section('seo')
   <title>{{ $settings->title }}</title>
   <meta name="keywords" content="{{ $settings->keywords }}"/>
   <meta name="description" content="{{ $settings->description }}"/>
@endsection

@section('content')

   <!-- Slider -->
   <section class="main_slider">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="hero-content">
                  <div class="swiper heroSwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden">
                     <div class="swiper-wrapper" id="swiper-wrapper-e223736527867c8a" aria-live="polite">
                        @foreach ($slider as $details)
                           @if ($details->status == 1)
                              <div class="swiper-slide swiper-slide-active" role="group"  aria-label="1 / 9" style="width: 1086px;">
                                 <img src="{{ asset('images/' . $details->image) }}">
                                 <h2 style="opacity: 1; transform: translate(0px, 0px);"> {{ $details->title }} </h2>
                                 <p style="opacity: 1; transform: translate3d(0px, 6.0743px, 0px);">
                                    {{ $details->description }}
                                 </p>
                                 <a href="{{ $details->url }}"  style="opacity: 1; transform: translate3d(0px, 30.7016px, 0px);">Shop Now</a>
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
                           <img src="{{ asset('assets/images/image2.png') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/image2.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/image2.png') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/image2.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/image2.png') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/image2.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/image2.png') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/image2.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/image2.png') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/image2.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/image2.png') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/image2.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/image2.png') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/image2.png') }}" alt="">
                              </div>
                              <h4 class="bnr_heading">Up To 75% Off Hundreds Of Fashion Outlet Store Up To 75% Off Hundreds Of Fashion Outlet Store</h4>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="pop-store-item">
                     <div class="store_img">
                        <a href="single_store.html" class="bnr_item bg_img bg bg2">
                           <img src="{{ asset('assets/images/image2.png') }}" class="top_bg_img"/>
                           <div class="bnr_content">
                              <div class="web_imagebox">
                                 <img src="{{ asset('assets/images/image2.png') }}" alt="">
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
                     <div class="featured_grad lazy"><img src="{{ asset('assets/images/coupon_img.jpg') }}" width="100%">
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
                     <div class="featured_grad lazy"><img src="{{ asset('assets/images/coupon_img.jpg') }}" width="100%">
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
                     <div class="featured_grad lazy"><img src="{{ asset('assets/images/coupon_img.jpg') }}" width="100%">
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
                     <div class="featured_grad lazy"><img src="{{ asset('assets/images/coupon_img.jpg') }}" width="100%">
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
                  <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal_main">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Balsam Hill</h5>
                              <div class="store_title_modal">
                                 <div class="modal_title_img">
                                    <div class="web_imagebox">
                                       <img src="./assets/images/str_logo.png" width="100%"  />
                                    </div>
                                 </div>
                                 <div class="modal_title_content">
                                    <h2 class="store_modal">Upto 70% Off On Sitewide Orders</h2>
                                 </div>
                              </div>
                              <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="modal_body_main">
                                 <p>HealthExpress website has been opened in a new tab / window. Simply copy and paste the code WELCOME15 and enter it at the checkout.</p>
                                 <div class="modal_code">
                                    **664
                                 </div>
                                 <a href="#" class="visit_site">Go to the HealthExpress Site <i class=" fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="modal_body_sidebar">
                           <div class="modal_badge">
                              <svg class="svg_icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="    http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.375px" height="33.375px" viewBox="0 0 33.375 33.375" style="enable-background:new 0 0 33.375 33.375;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M27.96,31.375H5.414c-1.945,0-3.664-0.979-4.7-2.464c0.14,2.481,2.184,4.464,4.7,4.464H27.96
                                          c2.518,0,4.562-1.98,4.701-4.464C31.625,30.396,29.906,31.375,27.96,31.375z"></path>
                                       <path d="M27.96,1.375h-0.682V1c0-0.552-0.447-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v0.375
                                          h-1.837V1c0-0.552-0.447-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1
                                          c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375H8.094V1c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375H5.412
                                          c-2.605,0-4.725,2.12-4.725,4.726v19.547c0,2.605,2.12,4.727,4.727,4.727H27.96c2.606,0,4.728-2.12,4.728-4.727V6.101
                                          C32.687,3.495,30.567,1.375,27.96,1.375z M25.78,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          s-0.5-0.224-0.5-0.5V1z M21.943,1c0-0.276,0.225-0.5,0.5-0.5c0.276,0,0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          c-0.275,0-0.5-0.224-0.5-0.5V1z M18.106,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          s-0.5-0.224-0.5-0.5V1z M14.269,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          s-0.5-0.224-0.5-0.5V1z M10.432,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          s-0.5-0.224-0.5-0.5V1z M6.595,1c0-0.276,0.224-0.5,0.5-0.5c0.276,0,0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          c-0.276,0-0.5-0.224-0.5-0.5V1z M30.279,25.648c0,1.277-1.04,2.317-2.318,2.317H5.414c-1.278,0-2.318-1.04-2.318-2.317V6.101
                                          c0-1.278,1.04-2.318,2.318-2.318h0.682v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56
                                          c0.861,0,1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187
                                          c0,0.86,0.699,1.56,1.56,1.56c0.861,0,1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513
                                          c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56s1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837
                                          v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56s1.561-0.699,1.561-1.56c0-0.478-0.222-0.9-0.561-1.187
                                          V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56c0.861,0,1.56-0.699,1.56-1.56
                                          c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.698,1.56,1.56,1.56
                                          s1.561-0.699,1.561-1.56c0-0.478-0.221-0.9-0.561-1.187V3.783h0.682c1.277,0,2.317,1.04,2.317,2.318L30.279,25.648L30.279,25.648z
                                          "></path>
                                       <path d="M22.71,13.307l-7.214,7.854l-5.045-3.735c-0.666-0.494-1.604-0.354-2.098,0.312c-0.493,0.666-0.354,1.605,0.313,2.099
                                          l6.129,4.539c0.268,0.198,0.58,0.295,0.892,0.295c0.407,0,0.812-0.165,1.105-0.485l8.127-8.849c0.562-0.61,0.521-1.559-0.09-2.119
                                          C24.221,12.658,23.272,12.696,22.71,13.307z"></path>
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title">strat date :</h3>
                                 <p>31/12/2021</p>
                              </div>
                           </div>
                           <div class="modal_badge">
                              <svg class="svg_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.543 203.543" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 203.543 203.543">
                                 <g>
                                    <path d="m194.139,11.918h-39.315v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-35.053v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-33.563v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-40.804c-3.313,0-6,2.687-6,6v135.572c0,3.313 2.687,6 6,6h36.826c5.901,25.214 28.555,44.053 55.541,44.053s49.64-18.84 55.541-44.053h36.826c3.313,0 6-2.687 6-6v-135.572c0.001-3.313-2.685-6-5.999-6zm-143.931,12v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h33.563v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h35.053v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h33.315v24.536h-172.735v-24.536h34.804zm51.563,167.625c-24.842,0-45.053-20.211-45.053-45.053s20.211-45.053 45.053-45.053 45.053,20.21 45.053,45.053-20.21,45.053-45.053,45.053zm57.028-44.053c0.006-0.334 0.025-0.665 0.025-1 0-31.459-25.594-57.053-57.053-57.053s-57.053,25.594-57.053,57.053c0,0.335 0.02,0.666 0.025,1h-29.34v-87.035h172.735v87.035h-29.339z"></path>
                                    <path d="m107.771,148.004v-29.026c0-3.313-2.687-6-6-6s-6,2.687-6,6v31.512c0,1.591 0.632,3.117 1.757,4.243l13.79,13.791c1.172,1.171 2.707,1.757 4.243,1.757 1.535,0 3.071-0.586 4.243-1.757 2.343-2.343 2.343-6.142 0-8.485l-12.033-12.035z"></path>
                                 </g>
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> Expiry Date :</h3>
                                 <p>31/12/2021</p>
                              </div>
                           </div>
                           <div class="modal_badge">
                              <svg class="svg_icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <g>
                                          <path d="M452.184,64.414l-13.12-2.624C378.866,49.751,320.505,29.724,265.538,2.251c-6.004-3.001-13.071-3.001-19.075,0
                                             C191.478,29.733,133.136,49.754,72.938,61.79l-13.121,2.624c-9.972,1.994-17.149,10.75-17.149,20.919v78.549
                                             c0,91.952,36.531,180.151,101.544,245.165l96.704,96.704c8.331,8.331,21.839,8.331,30.17,0l96.704-96.704
                                             c65.014-65.014,101.544-153.213,101.544-245.165V85.333C469.333,75.164,462.156,66.409,452.184,64.414z M426.667,163.883
                                             c0,80.636-32.036,157.983-89.048,214.995L256,460.497l-81.619-81.619c-57.012-57.012-89.048-134.359-89.048-214.995v-61.072
                                             C144.359,90.665,201.669,71.279,256,45.097c54.318,26.174,111.642,45.564,170.667,57.714V163.883z"></path>
                                          <path d="M185.756,198.244c-8.331-8.331-21.839-8.331-30.17,0s-8.331,21.839,0,30.17l64,64c8.87,8.87,23.443,8.209,31.474-1.428
                                             l106.667-128c7.543-9.051,6.32-22.503-2.731-30.046c-9.051-7.543-22.503-6.32-30.046,2.731l-91.712,110.054L185.756,198.244z"></path>
                                       </g>
                                    </g>
                                 </g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> Verified On :</h3>
                                 <p>31/12/2021</p>
                              </div>
                           </div>

                           <div class="rating modal_badge">
                              <div class="stars">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end model -->
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
                     <div class="featured_grad lazy"><img src="{{ asset('assets/images/coupon_img.jp') }}g" width="100%">
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
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal2" class="coupon_btn_a show_coupon homepage" data-id="24303" data-clipboard-text="WELCOME10" "="" data-text="**LCOME10">Get Code</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy"><img src="{{ asset('assets/images/coupon_img.jp') }}g" width="100%">
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
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal2" class="show_coupon coupon_btn_a deal show_coupon homepage" data-id="24208" data-clipboard-text=" " "="" data-text="No Code!">Get Deal</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy"><img src="{{ asset('assets/images/coupon_img.jp') }}g" width="100%">
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
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal2" class="coupon_btn_a show_coupon homepage" data-id="22429" data-clipboard-text="WELCOME15" "="" data-text="**LCOME15">Get Code</a>
                        </div>
                     </div>
                  </div>
                  <div class="featured_cpn_wrapper">
                     <div class="featured_grad lazy"><img src="{{ asset('assets/images/coupon_img.jp') }}g" width="100%">
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
                           <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal2" class="show_coupon coupon_btn_a deal show_coupon homepage" data-id="25072" data-clipboard-text=" " "="" data-text="No Code!">Get Deal</a>
                        </div>
                     </div>
                  </div>
                  <!-- Modal -->
               <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                     <div class="modal-content">
                        <div class="modal_main">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Balsam Hill</h5>
                              <div class="store_title_modal">
                                 <div class="modal_title_img">
                                    <div class="web_imagebox">
                                       <img src="./assets/images/str_logo.png" width="100%"  />
                                    </div>
                                 </div>
                                 <div class="modal_title_content">
                                    <h2 class="store_modal">Upto 70% Off On Sitewide Orders</h2>
                                 </div>
                              </div>
                              <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-body">
                              <div class="modal_body_main">
                                 <p>HealthExpress website has been opened in a new tab / window. Simply copy and paste the code WELCOME15 and enter it at the checkout.</p>
                                 <div class="modal_code">
                                    **664
                                 </div>
                                 <a href="#" class="visit_site">Go to the HealthExpress Site <i class=" fa fa-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="modal_body_sidebar">
                           <div class="modal_badge">
                              <svg class="svg_icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="    http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.375px" height="33.375px" viewBox="0 0 33.375 33.375" style="enable-background:new 0 0 33.375 33.375;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M27.96,31.375H5.414c-1.945,0-3.664-0.979-4.7-2.464c0.14,2.481,2.184,4.464,4.7,4.464H27.96
                                          c2.518,0,4.562-1.98,4.701-4.464C31.625,30.396,29.906,31.375,27.96,31.375z"></path>
                                       <path d="M27.96,1.375h-0.682V1c0-0.552-0.447-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v0.375
                                          h-1.837V1c0-0.552-0.447-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1
                                          c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375H8.094V1c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375H5.412
                                          c-2.605,0-4.725,2.12-4.725,4.726v19.547c0,2.605,2.12,4.727,4.727,4.727H27.96c2.606,0,4.728-2.12,4.728-4.727V6.101
                                          C32.687,3.495,30.567,1.375,27.96,1.375z M25.78,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          s-0.5-0.224-0.5-0.5V1z M21.943,1c0-0.276,0.225-0.5,0.5-0.5c0.276,0,0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          c-0.275,0-0.5-0.224-0.5-0.5V1z M18.106,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          s-0.5-0.224-0.5-0.5V1z M14.269,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          s-0.5-0.224-0.5-0.5V1z M10.432,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          s-0.5-0.224-0.5-0.5V1z M6.595,1c0-0.276,0.224-0.5,0.5-0.5c0.276,0,0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                                          c-0.276,0-0.5-0.224-0.5-0.5V1z M30.279,25.648c0,1.277-1.04,2.317-2.318,2.317H5.414c-1.278,0-2.318-1.04-2.318-2.317V6.101
                                          c0-1.278,1.04-2.318,2.318-2.318h0.682v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56
                                          c0.861,0,1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187
                                          c0,0.86,0.699,1.56,1.56,1.56c0.861,0,1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513
                                          c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56s1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837
                                          v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56s1.561-0.699,1.561-1.56c0-0.478-0.222-0.9-0.561-1.187
                                          V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56c0.861,0,1.56-0.699,1.56-1.56
                                          c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.698,1.56,1.56,1.56
                                          s1.561-0.699,1.561-1.56c0-0.478-0.221-0.9-0.561-1.187V3.783h0.682c1.277,0,2.317,1.04,2.317,2.318L30.279,25.648L30.279,25.648z
                                          "></path>
                                       <path d="M22.71,13.307l-7.214,7.854l-5.045-3.735c-0.666-0.494-1.604-0.354-2.098,0.312c-0.493,0.666-0.354,1.605,0.313,2.099
                                          l6.129,4.539c0.268,0.198,0.58,0.295,0.892,0.295c0.407,0,0.812-0.165,1.105-0.485l8.127-8.849c0.562-0.61,0.521-1.559-0.09-2.119
                                          C24.221,12.658,23.272,12.696,22.71,13.307z"></path>
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title">strat date :</h3>
                                 <p>31/12/2021</p>
                              </div>
                           </div>
                           <div class="modal_badge">
                              <svg class="svg_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.543 203.543" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 203.543 203.543">
                                 <g>
                                    <path d="m194.139,11.918h-39.315v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-35.053v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-33.563v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-40.804c-3.313,0-6,2.687-6,6v135.572c0,3.313 2.687,6 6,6h36.826c5.901,25.214 28.555,44.053 55.541,44.053s49.64-18.84 55.541-44.053h36.826c3.313,0 6-2.687 6-6v-135.572c0.001-3.313-2.685-6-5.999-6zm-143.931,12v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h33.563v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h35.053v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h33.315v24.536h-172.735v-24.536h34.804zm51.563,167.625c-24.842,0-45.053-20.211-45.053-45.053s20.211-45.053 45.053-45.053 45.053,20.21 45.053,45.053-20.21,45.053-45.053,45.053zm57.028-44.053c0.006-0.334 0.025-0.665 0.025-1 0-31.459-25.594-57.053-57.053-57.053s-57.053,25.594-57.053,57.053c0,0.335 0.02,0.666 0.025,1h-29.34v-87.035h172.735v87.035h-29.339z"></path>
                                    <path d="m107.771,148.004v-29.026c0-3.313-2.687-6-6-6s-6,2.687-6,6v31.512c0,1.591 0.632,3.117 1.757,4.243l13.79,13.791c1.172,1.171 2.707,1.757 4.243,1.757 1.535,0 3.071-0.586 4.243-1.757 2.343-2.343 2.343-6.142 0-8.485l-12.033-12.035z"></path>
                                 </g>
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> Expiry Date :</h3>
                                 <p>31/12/2021</p>
                              </div>
                           </div>
                           <div class="modal_badge">
                              <svg class="svg_icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <g>
                                          <path d="M452.184,64.414l-13.12-2.624C378.866,49.751,320.505,29.724,265.538,2.251c-6.004-3.001-13.071-3.001-19.075,0
                                             C191.478,29.733,133.136,49.754,72.938,61.79l-13.121,2.624c-9.972,1.994-17.149,10.75-17.149,20.919v78.549
                                             c0,91.952,36.531,180.151,101.544,245.165l96.704,96.704c8.331,8.331,21.839,8.331,30.17,0l96.704-96.704
                                             c65.014-65.014,101.544-153.213,101.544-245.165V85.333C469.333,75.164,462.156,66.409,452.184,64.414z M426.667,163.883
                                             c0,80.636-32.036,157.983-89.048,214.995L256,460.497l-81.619-81.619c-57.012-57.012-89.048-134.359-89.048-214.995v-61.072
                                             C144.359,90.665,201.669,71.279,256,45.097c54.318,26.174,111.642,45.564,170.667,57.714V163.883z"></path>
                                          <path d="M185.756,198.244c-8.331-8.331-21.839-8.331-30.17,0s-8.331,21.839,0,30.17l64,64c8.87,8.87,23.443,8.209,31.474-1.428
                                             l106.667-128c7.543-9.051,6.32-22.503-2.731-30.046c-9.051-7.543-22.503-6.32-30.046,2.731l-91.712,110.054L185.756,198.244z"></path>
                                       </g>
                                    </g>
                                 </g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                                 <g></g>
                              </svg>
                              <div class="modal_badge_content">
                                 <h3 class="modal_badge_content_title"> Verified On :</h3>
                                 <p>31/12/2021</p>
                              </div>
                           </div>

                           <div class="rating modal_badge">
                              <div class="stars">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end model -->
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
                  <div class="faq_image">
                     <img src="{{ asset('assets/images/faq.png') }}"/>
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
