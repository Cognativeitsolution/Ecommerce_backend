@extends('layouts.app')

@section('seo')
<title>We are create blogs for user information</title>
<meta name="keywords" content="E Commerce, We are create blogs for user information" />
<meta name="description" content="E Commerce, We are create blogs for user information" />
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
                           <h2 class="store_title sl_page">Blogs</h2>
                           <ul class="store_breadcrumbs store_list">
                              <li><a href="{{ route('web.coupon') }}">Home</a></li>
                              <li><i class="fa fa-angle-right"></i></li>
                              <li>Blogs</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!---Blog cards-->
<section class="blog_list-container">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="blog_list-grid-container">

               @foreach($record as $blog)
               <a href="{{ url('blogs/' .$blog->slug ) }}" class="blog_item">
                  <div class="blog_img-box lazy_img"><img src="{{ asset('thumbnail/' .$blog->blog_image ) }}" width="100%"></div>
                  <div class="blog_content-box">
                     <div class="blog_tags">
                     @foreach($blog->tags as $tag)
                     <span class="blog-tag">{{ $tag->name }}</span>
                     @endforeach
                     </div>
                     <div class="blog-detail-box">
                        <h3 class="blog_head">{{ Str::of( $blog->name )->limit(70, ' ...') }}</h3>
                        <div class="blog_info-detail">
                           <div class="blog_date">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('d M, Y') }} <span class="blog_time">{{ $blog->reading_time }}</span></div>
                           
                           <div class="blog_views">{{ $blog->views }} views</div>
                        </div>
                     </div>
                  </div>
               </a>
               @endforeach

            </div>
         </div>

         @if(!empty($record))
            {!! $record->appends(Request::all())->links() !!}
         @endif

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
               @foreach($latest as $latest_blog)
               <a href="{{ url('blogs/' .$latest_blog->slug ) }}" class="latest_post-item">
                  <div class="lpi_img">
                     <div class="banner_two blog_img">
                        <img src="{{ asset('thumbnail/' .$latest_blog->blog_image ) }}" width="100%">
                     </div>
                  </div>
                  <div class="lpi_content">
                     <h2 class="lpi_sub-heading">{{ $latest_blog->name }}</h2>
                     <p class="text">{{ $latest_blog->short_description }}</p>
                     <p class="read_more">Read More <i class="fas fa-chevron-down"></i></p>
                  </div>
               </a>
               @endforeach

            </div>
         </div>
      </div>
   </div>
</section>

@endsection