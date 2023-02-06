@extends('layouts.app_blog')

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
                                 <a href="{{ $details->url }}" target="_blank"  style="opacity: 1; transform: translate3d(0px, 30.7016px, 0px);">Shop Now</a>
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

   <!---- Blog Section -->
         <section class="blog_list-container">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="blog_list-grid-container">

                        <a href="#" class="blog_item">
                           <div class="blog_img-box lazy_img">
                              <img src="{{ asset('thumbnail/men-watches.png') }}" width="100%">
                           </div>
                           <div class="blog_content-box">
                              <span class="blog-tag">cooking</span>
							 
                              <div class="blog-detail-box">
                                 <h3 class="blog_head">10 Easy Ways to Be Environmentally Conscious At Home</h3>
                                 <div class="blog_info-detail">
                                    <span class="blog_date">27 August</span>
                                    <span class="blog_time">10 mins</span>
                                    <span class="blog_views">22k views</span>
                                 </div>
                              </div>
                           </div>
                        </a>

                        <a href="#" class="blog_item">
                           <div class="blog_img-box lazy_img">
                              <img src="{{ asset('thumbnail/men-watches.png') }}" width="100%">
                           </div>
                           <div class="blog_content-box">
                              <span class="blog-tag">cooking</span>
							 
                              <div class="blog-detail-box">
                                 <h3 class="blog_head">10 Easy Ways to Be Environmentally Conscious At Home</h3>
                                 <div class="blog_info-detail">
                                    <span class="blog_date">27 August</span>
                                    <span class="blog_time">10 mins</span>
                                    <span class="blog_views">22k views</span>
                                 </div>
                              </div>
                           </div>
                        </a>

                        <a href="#" class="blog_item">
                           <div class="blog_img-box lazy_img">
                              <img src="{{ asset('thumbnail/men-watches.png') }}" width="100%">
                           </div>
                           <div class="blog_content-box">
                              <span class="blog-tag">cooking</span>
							 
                              <div class="blog-detail-box">
                                 <h3 class="blog_head">10 Easy Ways to Be Environmentally Conscious At Home</h3>
                                 <div class="blog_info-detail">
                                    <span class="blog_date">27 August</span>
                                    <span class="blog_time">10 mins</span>
                                    <span class="blog_views">22k views</span>
                                 </div>
                              </div>
                           </div>
                        </a>

                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!----Latest blogs-->
         <section class="latest_blog">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="primary_heading">
                        <h2>Latest Blogs</h2>
                     </div>
                     <div class="latest_post-container">
                        <a href="#" class="latest_post-item">
                           <div class="lpi_img">
                              <div class="banner_two blog_img" >
                              <img data-src="{{ asset('thumbnail/men-watches.png') }}" src="{{ asset('thumbnail/store_image.png') }}" width="100%">
                              </div>
                           </div>
                           <div class="lpi_content">
                              <h2 class="lpi_sub-heading">2022’s Best Luxury Watch Brands</h2>
                              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sapiente fuga reiciendis, sunt quis, dolore beatae molestiae sit facilis odio numquam sed nesciunt aliquam quia.</p>
                              <p class="read_more">Read More <i class="fas fa-chevron-down"></i></p>
                           </div>
                        </a>

                        <a href="#" class="latest_post-item">
                           <div class="lpi_img">
                              <div class="banner_two blog_img" >
                                 <img data-src="{{ asset('thumbnail/men-watches.png') }}" src="{{ asset('thumbnail/store_image.png') }}" width="100%">
                              </div>
                           </div>
                           <div class="lpi_content">
                              <h2 class="lpi_sub-heading">2022’s Best Luxury Watch Brands</h2>
                              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sapiente fuga reiciendis, sunt quis, dolore beatae molestiae sit facilis odio numquam sed nesciunt aliquam quia.</p>
                              <p class="read_more">Read More <i class="fas fa-chevron-down"></i></p>
                           </div>
                        </a>

                        <a href="#" class="latest_post-item">
                           <div class="lpi_img">
                              <div class="banner_two blog_img" >
                                 <img data-src="{{ asset('thumbnail/men-watches.png') }}" src="{{ asset('thumbnail/store_image.png') }}" width="100%">
                              </div>
                           </div>
                           <div class="lpi_content">
                              <h2 class="lpi_sub-heading">2022’s Best Luxury Watch Brands</h2>
                              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sapiente fuga reiciendis, sunt quis, dolore beatae molestiae sit facilis odio numquam sed nesciunt aliquam quia.</p>
                              <p class="read_more">Read More <i class="fas fa-chevron-down"></i></p>
                           </div>
                        </a>

                        <a href="#" class="latest_post-item">
                           <div class="lpi_img">
                              <div class="banner_two blog_img" >
                                 <img data-src="{{ asset('thumbnail/men-watches.png') }}" src="{{ asset('thumbnail/store_image.png') }}" width="100%">
                              </div>
                           </div>
                           <div class="lpi_content">
                              <h2 class="lpi_sub-heading">2022’s Best Luxury Watch Brands</h2>
                              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sapiente fuga reiciendis, sunt quis, dolore beatae molestiae sit facilis odio numquam sed nesciunt aliquam quia.</p>
                              <p class="read_more">Read More <i class="fas fa-chevron-down"></i></p>
                           </div>
                        </a>

                        <a href="#" class="latest_post-item">
                           <div class="lpi_img">
                              <div class="banner_two blog_img" >
                                 <img data-src="{{ asset('thumbnail/men-watches.png') }}" src="{{ asset('thumbnail/store_image.png') }}" width="100%">
                              </div>
                           </div>
                           <div class="lpi_content">
                              <h2 class="lpi_sub-heading">2022’s Best Luxury Watch Brands</h2>
                              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sapiente fuga reiciendis, sunt quis, dolore beatae molestiae sit facilis odio numquam sed nesciunt aliquam quia.</p>
                              <p class="read_more">Read More <i class="fas fa-chevron-down"></i></p>
                           </div>
                        </a>

                        <a href="#" class="latest_post-item">
                           <div class="lpi_img">
                              <div class="banner_two blog_img" >
                                 <img data-src="{{ asset('thumbnail/men-watches.png') }}" src="{{ asset('thumbnail/store_image.png') }}" width="100%">
                              </div>
                           </div>
                           <div class="lpi_content">
                              <h2 class="lpi_sub-heading">2022’s Best Luxury Watch Brands</h2>
                              <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sapiente fuga reiciendis, sunt quis, dolore beatae molestiae sit facilis odio numquam sed nesciunt aliquam quia.</p>
                              <p class="read_more">Read More <i class="fas fa-chevron-down"></i></p>
                           </div>
                        </a>


                     </div>
                  </div>
               </div>
            </div>
         </section>


@endsection
