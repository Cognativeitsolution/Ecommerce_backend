@extends('layouts.app_blog')

@section('seo')
<title>{{ $blog->title }}</title>
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
                     <h3>{{ $blog->name }}</h3>
                        <div class="img_content"><img src="{{ asset('thumbnail/' . $blog->blog_image) }}" width="100%"></div>
                        <div class="main_content">
                           <div class="date">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('d M, Y') }}</div>
                           <div class="views"><i class="fa fa-eye"></i> {{ $blog->views }}</div>
                           <label>{{ $blog->category_name }}</label>
                           <p>
                              {!! $blog->long_description !!}  
                           </p>                         
                        </div>
                     </div>
                     
                  </div>
                  <div class="col-md-4">
                     <h2>Latest Blog Post</h2>
                     @foreach ($latest_blog_with_category as $latest_blog)
                     <a href="{{ route('web.blog_details', $latest_blog->slug) }}" class="latest_post_container">
                        <div class="img_content"><img src="{{ asset('thumbnail/' . $latest_blog->blog_image) }}" width="100%"></div>
                        <div class="main_content">
                           <label>{{ $latest_blog->category_name }}</label>
                           <h3>{{ Str::of( $latest_blog->name )->limit(10, '...') }}</h3>
                           <p>{{ Str::of( $latest_blog->short_description )->limit(60, '...') }}</p>
                        </div>
                     </a>
                     @endforeach   

                     <div class="blogs_tags">
                     <h2>Blog Categories</h2>
                        @foreach($all_categories as $category)
                           <a href="{{ route('web.blog_category', $category->slug) }}" class="btn btn_tag">{{ $category->name }}</a>
                        @endforeach                        
                     </div>
                  </div>
               </div>
            </div>
</section>

@endsection