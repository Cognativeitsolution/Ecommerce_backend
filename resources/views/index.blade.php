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


                     <div class="single_post_container">
                        <div class="img_content">
                           <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <div class="date">27 Sepember</div>
                           <div class="views"><i class="fa fa-eye"></i> 1000</div>
                           <label>Fashion & Beauty</label>
                           <h3>10 Easy Ways to Be Environmentally Conscious At Home</h3>
                           <p>Why do we use it?<br><br>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                           <button class="btn btn_readmore">READ MORE</button>
                        </div>
                     </div>


                     <div class="single_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <div class="date">27 Sepember</div>
                           <div class="views"><i class="fa fa-eye"></i> 1000</div>
                           <label>Fashion & Beauty</label>
                           <h3>10 Easy Ways to Be Environmentally Conscious At Home</h3>
                           <p>Why do we use it?<br><br>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                           <button class="btn btn_readmore">READ MORE</button>
                        </div>
                     </div>

                     <div class="single_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <div class="date">27 Sepember</div>
                           <div class="views"><i class="fa fa-eye"></i> 1000</div>
                           <label>Fashion & Beauty</label>
                           <h3>10 Easy Ways to Be Environmentally Conscious At Home</h3>
                           <p>Why do we use it?<br><br>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                           <button class="btn btn_readmore">READ MORE</button>
                        </div>
                     </div>

                     <div class="single_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <div class="date">27 Sepember</div>
                           <div class="views"><i class="fa fa-eye"></i> 1000</div>
                           <label>Fashion & Beauty</label>
                           <h3>10 Easy Ways to Be Environmentally Conscious At Home</h3>
                           <p>Why do we use it?<br><br>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                           <button class="btn btn_readmore">READ MORE</button>
                        </div>
                     </div>

                     <div class="single_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <div class="date">27 Sepember</div>
                           <div class="views"><i class="fa fa-eye"></i> 1000</div>
                           <label>Fashion & Beauty</label>
                           <h3>10 Easy Ways to Be Environmentally Conscious At Home</h3>
                           <p>Why do we use it?<br><br>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                           <button class="btn btn_readmore">READ MORE</button>
                        </div>
                     </div>

                     <div class="single_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <div class="date">27 Sepember</div>
                           <div class="views"><i class="fa fa-eye"></i> 1000</div>
                           <label>Fashion & Beauty</label>
                           <h3>10 Easy Ways to Be Environmentally Conscious At Home</h3>
                           <p>Why do we use it?<br><br>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                           <button class="btn btn_readmore">READ MORE</button>
                        </div>
                     </div>

                     <div class="single_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <div class="date">27 Sepember</div>
                           <div class="views"><i class="fa fa-eye"></i> 1000</div>
                           <label>Fashion & Beauty</label>
                           <h3>10 Easy Ways to Be Environmentally Conscious At Home</h3>
                           <p>Why do we use it?<br><br>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                           <button class="btn btn_readmore">READ MORE</button>
                        </div>
                     </div>




                     
                  </div>
                  <div class="col-md-4">
                     <h2>Latest Blog Post</h2>

                     <div class="latest_post_container">
                        <div class="img_content">
                           <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>

                     <div class="latest_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>

                     <div class="latest_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>

                     <div class="latest_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>

                     <div class="latest_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>

                     <div class="latest_post_container">
                        <div class="img_content">
                        <img data-src="{{ asset('thumbnail/blog_imgs.jpg') }}" src="{{ asset('thumbnail/dot.png') }}" width="100%">
                        </div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>

                     


                     
                     <div class="blog_tags">
                     <h2>Blog Categories</h2>

                        <button class="btn btn_tag">Fashion & Beauty</button>
                        <button class="btn btn_tag">Health & Fitness</button>
                        <button class="btn btn_tag">Technology</button>
                        
                     </div>
                  </div>
               </div>
            </div>
   </section>
         


@endsection
