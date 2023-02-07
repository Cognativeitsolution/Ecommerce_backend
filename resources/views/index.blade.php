@extends('layouts.app_blog')

@section('seo')
   <title>{{ $settings->title }}</title>
   <meta name="keywords" content="{{ $settings->keywords }}"/>
   <meta name="description" content="{{ $settings->description }}"/>
@endsection

@section('content')

   <!-- Slider -->
   <section class="main_slider">
      
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


   <!---- Blog Section -->

   <section class="blog_list-container">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">

                  @foreach($latest_blog_with_category as $latest_blog)
                     <div class="single_post_container">
                        <div class="img_content">
                           <img data-src="{{ asset('thumbnail/' .$latest_blog->blog_image ) }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <div class="date">
                              {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $latest_blog->created_at)->format('d M, Y') }}
                           </div>
                           <div class="views"><i class="fa fa-eye"></i>
                           {{ $latest_blog->views }}
                        </div>
                           <label>
                           {{ $latest_blog->category_name }}
                           </label>
                           <h3>
                           <h3>{{ Str::of( $latest_blog->name )->limit(60, '..') }}</h3>
                           </h3>
                           <p>{{ Str::of( $latest_blog->title )->limit(100, '..') }}<br><br>
                              {!! $latest_blog->long_description !!}
                           </p>
                           <button class="btn btn_readmore">READ MORE</button>
                        </div>
                     </div>
                  @endforeach




                     


                     
                  </div>
                  <div class="col-md-4">
                     <h2>Latest Blog Post</h2>

                     @foreach($latest_blog_with_category as $latest_blog)
                     <div class="latest_post_container">
                        <div class="img_content">
                           <img data-src="{{ asset('thumbnail/' .$latest_blog->blog_image) }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <label>{{ $latest_blog->category_name }}</label>
                           <h3>{{ Str::of( $latest_blog->name )->limit(10, '.') }}</h3>
                           <p>{{ Str::of( $latest_blog->short_description )->limit(25, '.') }}</p>
                        </div>
                     </div>
                     @endforeach

                     
                     <div class="blog_tags">
                     <h2>Blog Categories</h2>

                     @foreach($blog_categories as $category)
                        <button class="btn btn_tag">{{ $category->name }}</button>
                     @endforeach
                        
                     </div>
                  </div>
               </div>
            </div>
   </section>
         


@endsection
