@extends('layouts.app')

@section('seo')
   <title>{{ $blog->title }}</title>
   <meta name="keywords" content="{{ $blog->meta ? $blog->meta->meta_keywords : '' }}"/>
   <meta name="description" content="{{ $blog->meta ? $blog->meta->meta_description : '' }}"/>
@endsection

@section('content')

<section class="sb_container">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="sb_main-wrapper">
               <div class="main_blog">
                  <div class="main_blog-head">
                  
                     <h3 class="tertiary_header">{{ $blog->name }}</h3>
                     <div class="sb_img sb_img"><img src="{{ asset('thumbnail/' .$blog->blog_image) }}" width="100%"></div>
                     <div class="meta_tags">
                        <div class="smt publish_tags">
                           <i class="fas fa-calendar-alt"></i> &nbsp;
                           Published : {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('d M, Y') }}
                        </div>
                        <div class="smt duration_tags">
                           <i class="far fa-clock"></i> &nbsp;
                           {{ $blog->reading_time }}
                        </div>
                     </div>
                  </div>
                  <div class="sb_content">
                     <div class="sb_info_wrapper">
                        <h3>
                           {{ $blog->short_description }}
                        </h3>
                        

                        {!! $blog->long_description !!}
                        
                        <p><img src="{{ asset('thumbnail/bnr_3.jpg') }}" alt="blog_inner-bn" class="inner_blog-img"></p>
                     </div>
                  </div>
                  <form action="{{ route('comments.store')}}" method="post" class="comment_form">
                  @csrf

                  <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                  <div class="comment_sh">
                     <div class="comment_head">
                        <h3 class="hd_comment">Leave A Comment</h3>
                     </div>
                     <div class="main_comment_wrapper">
                        <div class="avatar_box">
                           <img src="{{ asset('thumbnail/user.png') }}" alt="user" class="avatar_img">
                        </div>
                        <div class="comment_editor">
                           <textarea name="description" required id="comment_text" cols="30" rows="10" class="comment_area" placeholder="Enter Comment here..."></textarea>
                        </div>
                     </div>
                  </div>
                     <div class="comment_field">
                     
                        <input type="text" required class="input input2 enduser_name" id="comment_name" name="name" placeholder="Your Name"/>
                        <input type="email" required class="input input2 enduser_email" id="comment_email" name="email" placeholder="Your Email"/>
                        <button class="post_comment-btn" type="submit">Post Comment</button>
                     
                     </div>

                  </form>
                  <div class="comment_count">
                     <span class="cm_count" id="uc_count">{{ $blog->comments_count }}</span> Comments
                  </div>

                  @foreach($blog->comments as $comment)
                  <div class="cm_list">
                     <div class="um_item">
                        <div class="ue_avatar">
                           <img src="{{ asset('thumbnail/user.png') }}" alt="user" class="user">
                        </div>

                        <div class="ue_name">
                           <div class="user_name">
                              {{ $comment->name }}
                           </div>
                           <div class="user_cmm">
                           {{ $comment->description }}
                           </div>
                           <div class="end_user-opt">
                              <div class="cm_date">
                                 <i class="fas fa-calendar-alt"></i> &nbsp;
                                 {{ $comment->created_at->diffForHumans() }}
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach

                  
               </div>
               <div class="sidebar_blog">
                  <div class="blog_side-item">
                     <h3 class="blog_side_heading"> Latest Blogs </h3>
                     <div class="ftr_blog">

                        @foreach($latest as $latest_blog)
                        <a href="{{ url('blogs/' .$latest_blog->slug ) }}" class="lt_sb-item">
                           <div class="lts_blog-image lazy-lts"><img src="{{ asset('thumbnail/' .$latest_blog->blog_image) }}" width="100%"></div>
                           <div class="ftr_blg_content">
                              <div class="ftr_blg_title webkit_box">{!! Str::words( $latest_blog->name, 3, ' ..') !!}</div>
                              <p>
                                 <i class="far fa-clock"></i>
                                 {{ $latest_blog->reading_time }} :
                                 
                                 {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $latest_blog->created_at)->format('d M, Y') }}              
                              </p>
                           </div>
                        </a>
                        @endforeach

                     </div>
                  </div>
                  <div class="blog_side-item">
                     <h3 class="blog_side_heading"> Related BLogs </h3>
                     <div class="ftr_blog">

                     @foreach($related_blogs as $related_blog)
                        <a href="{{ url('blogs/' .$related_blog->slug ) }}" class="lt_sb-item">
                           <div class="lts_blog-image lazy-lts"><img src="{{ asset('thumbnail/' .$related_blog->blog_image) }}" width="100%"></div>
                           <div class="ftr_blg_content">
                              <div class="ftr_blg_title webkit_box">{!! Str::words( $related_blog->name, 3, ' ..') !!}</div>
                              <p>
                                 <i class="far fa-clock"></i>
                                 {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $related_blog->created_at)->format('d M, Y') }}           
                              </p>
                           </div>
                        </a>
                     @endforeach

                        
                        
                     </div>
                  </div>
                  <div class="blog_side-item">
                     <h3 class="blog_side_heading"> Tags </h3>
                     <div class="lts_tags">
                        @foreach($blog->tags as $blog_tag)
                           <span class="lt_blog-tag">{{ $blog_tag->name }}</span>
                        @endforeach
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection