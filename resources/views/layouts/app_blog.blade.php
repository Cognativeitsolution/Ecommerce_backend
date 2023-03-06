<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <link rel="shortcut icon" href="{{ asset('images/' . $settings->favicon) }}" type="image/x-icon">

   @yield('seo')

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <!---Fontawsome Links-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!--- Style css file -->
   <link rel="stylesheet" href="{{ asset('assets/css/blog_site/style2.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}" type="text/css">

   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

   @yield('css')
</head>

<body>
   <!--- SIDE-BAR-MENU --->
   <div class="sidebar__container">
      <div class="close-container">
         <span><i class="fa fa-times" aria-hidden="true"></i>
         </span>
      </div>
      <div class="sd_img_box">

         <img src="{{ asset('images/logoblack.png') }}" alt="sd-header-logo">

      </div>
      <div class="sidebar__list">
         <ul class="un-sideb-list">
            <li class="side-list"><a href="{{ route('web.home') }}" class="side-list-link">Home</a></li>

            @foreach($blog_categories as $category)
            <li class="side-list"><a href="{{ route('web.blog_category', $category->slug) }}" class="side-list-link">{{ $category->name }}</a></li>
            @endforeach

         </ul>
      </div>
   </div>


   <!--- HEADER --->
   <header class="header">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="main_head_wrapper">
                  <div class="upper_primary-header">
                     <div class="logo_box">
                        <a href="{{ route('web.home') }}" class="header_logo-link">
                           <img src="{{ asset('images/logoblack.png') }}" alt="logo" class="resp_logo">
                        </a>
                     </div>

                     <div class="main_menu">
                        <nav class="nav_bar">
                           <ul>
                              <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('web.home') }}">Home</a></li>

                              @foreach($blog_categories as $category)
                              <li class=""><a href="{{ route('web.blog_category', $category->slug) }}">{{ $category->name }}</a></li>
                              @endforeach

                           </ul>
                        </nav>
                     </div>
                     <div class="toggle_menu">
                        <span><i class="fas fa-bars"></i></span>
                     </div>
                  </div>
                  <div class="lower_primary-header">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="header_line"></div>
   </header>


   <!--- Main Section -->
   <main>

      @if (session('success'))
      <div class="container" style="padding-top: 20px;">
         <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> {{ session('success') }}
         </div>
      </div>
      @endif

      @if (!empty(session('message')))
      <div class="container" style="padding-top: 15px;">
         <div class="alert alert-{{ session('status') }} alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session('message') }}
         </div>
      </div>
      @endif

      @yield('content')

      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="fotr_container">
                     <div class="ftr_center">

                        <a href="{{ route('web.home') }}" class="footer-logo">
                           <img src="{{ asset('images/' . $settings->footer_logo) }}" class="img-responsive" alt="" width="170" height="50">
                        </a>

                     </div>

                     <div class="ftr_tops">


                        <div class="nav_links">

                           <div class="ftr_links">
                              <h2 class="ftr_heading">Pages</h2>
                              <ul class="ftr_links_wrpr">
                                 @foreach ($footer_pages as $page)
                                 @if ($page->type == 0 && $page->parent_id == 5)
                                 <li>
                                    <a href="{{ route('blog.page_detail', $page->slug) }}">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <polyline points="9 6 15 12 9 18"></polyline>
                                       </svg>
                                       {{ $page->name }}
                                    </a>
                                 </li>
                                 @endif
                                 @endforeach
                              </ul>
                           </div>

                           <div class="ftr_links">
                              <h2 class="ftr_heading">Recent Blogs</h2>
                              <ul class="ftr_links_wrpr">

                                 @foreach($recent_blogs_footer as $recent_blog)
                                 <li>
                                    <a href="{{ route('web.blog_details', $recent_blog->slug) }}">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <polyline points="9 6 15 12 9 18"></polyline>
                                       </svg>
                                       {{ Str::of( $recent_blog->name )->limit(30, '..') }}
                                    </a>
                                 </li>
                                 @endforeach


                              </ul>
                           </div>



                           <div class="ftr_links">
                              <h2 class="ftr_heading">Blog Categories</h2>
                              <ul class="ftr_links_wrpr">

                                 @foreach($blog_categories as $category)
                                 <li>
                                    <a href="{{ route('web.blog_category', $category->slug) }}">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <polyline points="9 6 15 12 9 18"></polyline>
                                       </svg>
                                       {{ $category->name }}
                                    </a>
                                 </li>
                                 @endforeach


                              </ul>
                           </div>
                           <div class="ftr_links ftr_links2">
                              <h2 class="ftr_heading">Visit Us</h2>

                              <p>Email : {{ $settings->contact_email }}</p>

                              <p>Phone : {{ $settings->contact_number }}</p>

                              <p>Address <br> {{ $settings->location_address }} </p>

                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer_bottom">
            <p>{{ $settings->footer_text }}</p>
         </div>
      </footer>


   </main>


</body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- IMAGES LOAD ON SCROLL  -->
<script src="{{ asset('assets/js/images_on_scroll.js') }}"></script>

<script>
   $('img').loadScroll(200); // in ms
</script>

</html>

@yield('js')