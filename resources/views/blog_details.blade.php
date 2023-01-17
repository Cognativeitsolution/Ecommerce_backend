@extends('layouts.app')

@section('seo')
   <title>{{ $blog->title }}</title>
   <meta name="keywords" content="{{ $blog->meta ? $blog->meta->meta_keywords : '' }}"/>
   <meta name="description" content="{{ $blog->meta ? $blog->meta->meta_description : '' }}"/>
@endsection

@section('content')
<!---Blog Banner Container-->
<section class="blog_hero-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="secondary_about_slider">
               <div class="page-title">
                  <div class="container">
                     <h1>{!! Str::words( $blog->title, 3, ' ') !!}</h1>
                     <h6>{!! Str::words( $blog->name, 7, ' ') !!}</h6>
                     <p>
                        {!! Str::words( $blog->short_description, 40, ' ...') !!}
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!---- Single Blog section --->
<section class="blog_section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="sb-grid-container">
               <div class="side_bar">

                  <div class="blog_img">
                     <img src="{{ url('images/' . $blog->blog_image) }}" alt="blog">
                  </div>

                  @if(!empty($related_blogs) && $related_blogs->count())
                  <div class="related_offer">
                     <h3 class="related_head">Related Blogs</h3>
                     <div class="related_blogs-item">
                        
                        
                        @foreach($related_blogs as $related_blog)
                        <a href="{{ url('blogs/' .$related_blog->slug) }}" class="rb_item">
                           <div class="img_rb">
                              <img src="{{ url('images/' . $related_blog->blog_image) }}" alt="blog-img" class="blog_img-one">
                           </div>
                           <div class="rb_item-one">
                              {!! Str::words( $related_blog->title, 10, ' ') !!}
                           </div>
                        </a>
                        @endforeach


                     </div>
                  </div>
                  @else
                  <div class="related_offer">
                     <h3 class="related_head">Recent Blogs</h3>
                     <div class="related_blogs-item">
                        
                        @foreach($other_blogs as $other_blog)
                        <a href="{{ url('blogs/' .$other_blog->slug) }}" class="rb_item">
                           <div class="img_rb">
                              <img src="{{ url('thumbnail/' . $other_blog->blog_image) }}" alt="blog-img" class="blog_img-one">
                           </div>
                           <div class="rb_item-one">
                              {!! Str::words( $other_blog->title, 10, ' ') !!}
                           </div>
                        </a>
                        @endforeach

                     </div>
                  </div>
                  @endif

               </div>
               <div class="main_content-panel">
                  {!! $blog->long_description !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!---get a qoute banner-->
    
@endsection