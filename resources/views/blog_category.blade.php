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
         <center>
            <h2>
               <b>{{ $category->name }}<b>
            </h2>
         </center>

         @if (!$blogs->isEmpty())
            @foreach ($blogs as $blog)
            <div class="col-md-3">
               <div class="single_cat_post_container">
                  <div class="img_content"><img src="{{ asset('thumbnail/blog_imgs.jpg') }}" width="100%"></div>
                  <div class="main_content">
                     <h3>Fashion & Beauty</h3>
                     <a href="#">EXPLORE</button></a>
                  </div>
               </div>
            </div>
            @endforeach

         @else
            <div class="well" style="margin: 20px auto; padding: 20px">No blog found in this category!</div>
         @endif
      </div>
   </div>
</section>

@endsection