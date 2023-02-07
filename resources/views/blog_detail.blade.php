@extends('layouts.app_blog')

@section('seo')
<title>We are create blogs for user information</title>
<meta name="keywords" content="E Commerce, We are create blogs for user information" />
<meta name="description" content="E Commerce, We are create blogs for user information" />
@endsection

@section('content')

<!---Blog Detail Section -->
<section class="blog_list-container">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <div class="single_post_container">
                     <h3>10 Easy Ways to Be Environmentally Conscious At Home</h3>
                        <div class="img_content"><img src="{{ asset('thumbnail/blog_imgs.jpg') }}" width="100%"></div>
                        <div class="main_content">
                           <div class="date">27 Sepember</div>
                           <div class="views"><i class="fa fa-eye"></i> 1000</div>
                           <label>Fashion & Beauty</label>
                           
                           <p>Why do we use it?<br><br>
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                           
                        </div>
                     </div>
                     
                  </div>
                  <div class="col-md-4">
                     <h2>Latest Blog Post</h2>
                     <div class="latest_post_container">
                        <div class="img_content"><img src="{{ asset('thumbnail/blog_imgs.jpg') }}" width="100%"></div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>
                     <div class="latest_post_container">
                        <div class="img_content"><img src="{{ asset('thumbnail/blog_imgs.jpg') }}" width="100%"></div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>
                     <div class="latest_post_container">
                        <div class="img_content"><img src="{{ asset('thumbnail/blog_imgs.jpg') }}" width="100%"></div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>
                     <div class="latest_post_container">
                        <div class="img_content"><img src="{{ asset('thumbnail/blog_imgs.jpg') }}" width="100%"></div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>
                     <div class="latest_post_container">
                        <div class="img_content"><img src="{{ asset('thumbnail/blog_imgs.jpg') }}" width="100%"></div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>
                     <div class="latest_post_container">
                        <div class="img_content"><img src="{{ asset('thumbnail/blog_imgs.jpg') }}" width="100%"></div>
                        <div class="main_content">
                           <label>Fashion & Beauty</label>
                           <h3>blog heading</h3>
                           <p>blog description</p>
                        </div>
                     </div>


                     
                     <div class="blogs_tags">
                     <h2>Blog Tags</h2>
                        <button class="btn btn_tag">Fashion & Beauty</button>
                        <button class="btn btn_tag">Health & Fitness</button>
                        <button class="btn btn_tag">Technology</button>
                        
                     </div>
                  </div>
               </div>
            </div>
</section>

@endsection