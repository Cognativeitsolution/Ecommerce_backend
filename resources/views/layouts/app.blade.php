<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('images/' . $settings->favicon) }}" type="image/x-icon">

    @yield('seo')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!---reCaptcha API-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <!--- Fontawsome Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---Link CSS Styling -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/media.css') }}" type="text/css">
</head>
<body>
    
 
    
    
      <!---Top head--->
      <div class="top_head">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  @guest
                     <a href="{{ route('login') }}" class="top_head-link">
                     <span><i class="fas fa-user"></i></span>
                     Login</a>
                  @endguest
                  
                  @auth
                     <a class="top_head-link">
                     <span><i class="fas fa-user"></i></span>
                     {{ auth()->user()->name }}</a>

                     <a class="top_head-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                        <span><i class="fa fa-sign-out"></i></span>
                        {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                     </form>
                  @endauth
               </div>
            </div>
         </div>
      </div>

      <!----Sidebar Menu-->
      <div class="sb-body-container">
         <div class="sidebar_container" id="sidebar_open">
            <div class="sidebar_main_wrapper">
               <div class="sidebar_head">
                  <div class="sidebar_img_box">
                     <img src="{{ asset('images/' . $settings->header_logo) }}" alt="group" class="sidebarlogo">
                  </div>
                  <div class="sidebar_close">
                     <span class="close_border" id="close_cross"><img src="{{ asset('assets/images/close_menu.png') }}" alt="close_menu" class="close_menu-img"></span>
                  </div>
               </div>
               <div class="sidebar_body">
                  <div class="sidebar_nav_box">
                     <ul class="un_sidebar mobile_menu">
                        <li class="sidebar_list"><a href="{{ url('/') }}" class="sidebar_list_link">Home</a></li>
                        <li class="sidebar_list"><a href="{{ url('/services') }}" class="sidebar_list_link">Services</a>
                          
                        </li>
                        <li class="sidebar_list dropdown_sdlist"><a href="#" style="cursor:default;" class="sidebar_list_link sddropbtn">Resources<i class="fa fa-chevron-down"></i></a>
                           <ul>
                              <li><a href="{{ url('/blogs') }}" class="sidebar_list_link">Blogs</a></li>
                           </ul>
                        </li>
                        <li class="sidebar_list"><a href="{{ url('/about_us') }}" class="sidebar_list_link">About Us</a></li>
                        <li class="sidebar_list"><a href="{{ url('/jobs') }}" class="sidebar_list_link">Career</a></li>
                        <li class="sidebar_list"><a href="{{ url('/contact_us') }}" class="sidebar_list_link">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!----- Header --->
      <header class="header">
         <div class="container">
            <div class="row">
               <div class="col md-12">
                  <div class="primary_header">
                     <div class="logo_box">
                        <a href="{{ url('/') }}" class="nav-brand">
                           <span class="nav-brand_inner-box">
                              <img src="{{ asset('images/' . $settings->header_logo) }}" alt="logo" class="logo_img">
                           </span>
                        </a>
                     </div>
                     <nav class="primary_menu">
                        <ul>
                           <li><a href="{{ url('/') }}" class="primary_nav-menu">Home</a></li>
                           <li><a href="{{ url('/about_us') }}" class="primary_nav-menu">About Us</a></li>
                           <li class="service-dropdown" id="service_dropbtn">
                              <a href="{{ url('/services') }}" class="service_dropbtn primary_nav-menu">Services</a>
                              <!---Service Mega Menu-->
                              <div class="mm-s-menu-container">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="mm_service-g-wrapper" id="mm_service-g-item">
                                             <div class="service_g-item">
                                                <div class="service_g-content-wrapper">
                                                   <h2 class="mm-title-head">Our Service</h2>
                                                   <p>Customized digital solutions to help clients build their competitive edge.</p>
                                                   <div class="vector_img">
                                                      <img src="{{ url('assets/images/undraw_Services_re_hu5n.png') }}" alt="service-vector" class="mm_s-vector">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="service_g-item">
                                                <div class="service_g-content-wrapper service-one_wrapper">
                                                   <h2 class="s_one">Web Solution</h2>
                                                   <ul class="sub-service-link">
                                                      
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="service_g-item">
                                                <div class="s_g-content-flex-wrapper">
                                                   <div class="service_g-content-wrapper service-two_wrapper">
                                                      <h2 class="s_one">Software</h2>
                                                      <ul class="sub-service-link">
                                                         
                                                      </ul>
                                                   </div>
                                                   <div class="service_g-content-wrapper service-three_wrapper">
                                                      <h2 class="s_one">Mobile App</h2>
                                                      <ul class="sub-service-link">
                                                         
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="service_g-item">
                                                <div class="service_g-content-wrapper service-one_wrapper">
                                                   <h2 class="s_one">2D/3D Design</h2>
                                                   <ul class="sub-service-link">
                                                      
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="resources_dropdown">
                              <a href="#" style="cursor:default;" class="res_dropbtn primary_nav-menu">Resources</a>
                              <!---Resource Mega Menu-->
                              <div class="mm-r-menu-container">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="mm_resource-g-wrapper" id="mm_resource-g-item">
                                             <div class="service_g-item">
                                                <div class="resource_g-content-wrapper">
                                                   <h2 class="mm-title-head">Resources</h2>
                                                   <p>Explore data-rich insights from our content experts and tech geeks, bringing interesting updates from across the globe.
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="resource_g-item">
                                                <div class="h4">Explore</div>
                                                <a href="{{ url('/blogs') }}" class="resource_g-content-wrapper service-one_wrapper">
                                                   <h2 class="s_one">Blog</h2>
                                                   <p class="one_content">Stuff that Matters</p>
                                                </a>
                                                
                                             </div>
                                             <div class="resource_g-item res_g-item-second">
                                                <div class="r_g-content-flex-wrapper">
                                                    <a href="#" style="cursor:default;" class="resource_g-content-wrapper service-one_wrapper">
                                                   <h2 class="s_one">Our News and Events</h2>
                                                   <p class="one_content">Stay informed about us</p>
                                                </a>
                                                   
                                                </div>
                                             </div>
                                             <div class="resource_g-item res_g-item-second">
                                                  <a href="#" style="cursor:default;" class="resource_g-content-wrapper resource-two_wrapper">
                                                      <h2 class="s_one">Meet Our leads</h2>
                                                      <p class="one_content">Our expert Team leads</p>
                                                   </a>
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <!--<li><a href="{{ url('/about_us') }}" class="primary_nav-menu">About Us</a></li>-->
                           <li><a href="{{ url('/jobs') }}" class="primary_nav-menu">Career</a></li>
                           <li class="h-contact-btn"><a href="{{ url('/contact_us') }}" class="contact_us-nav">Contact Us</a></li>
                        </ul>
                     </nav>
                     <div class="menu_toggle-button" id="menu_toggle-btn">
                        <span class="bar-btn"><img src="{{ asset('assets/images/menu_bar.png') }}" alt="bar_menu" class="bar_menu-img"></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <main>

         @if (session('message'))
         <div class="container py-3">
            <div class="alert alert-{{ session('status') }}">
               {{ session('message') }}
            </div>
         </div>
         @endif

         @if (session('reset_success'))
         <div class="container py-3">
            <div class="alert alert-success">
               {{ session('reset_success') }}
            </div>
         </div>
         @endif

         @yield('content')
         
      </main>

        <!---Footer ----->
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footer_container-wrapper">
                     <div class="footer_up-wrapper">
                        <div class="foo-logo-box">
                           <a href="{{ url('/') }}" class="nav-brand">
                           <span class="nav-brand_inner-box">
                           <img src="{{ asset('images/' . $settings->footer_logo) }}" alt="logo" class="logo_img">
                           </span>
                           </a>
                        </div>
                        <div class="foo-social-icon">
                           <div class="foo-social-flex-wrapper">
                              @if ($settings->facebook_account_link)
                                 <a target="_blank" href="{{ $settings->facebook_account_link }}" class="footer-social"><i class="fab fa-facebook"></i></a>
                              @endif

                              @if ($settings->google_account_link)
                                 <a target="_blank" href="{{ $settings->google_account_link }}" class="footer-social"><i class="fab fa-google"></i></a>
                              @endif

                              @if ($settings->linkedin_account_link)
                                 <a target="_blank" href="{{ $settings->linkedin_account_link }}" class="footer-social"><i class="fab fa-linkedin"></i></a>
                              @endif

                              @if ($settings->instagram_account_link)
                                 <a target="_blank" href="{{ $settings->instagram_account_link }}" class="footer-social"><i class="fab fa-instagram"></i></a>
                              @endif

                              @if ($settings->youtube_account_link)
                                 <a target="_blank" href="{{ $settings->youtube_account_link }}" class="footer-social"><i class="fab fa-google-plus-square"></i></a>
                              @endif
                              
                              @if ($settings->contact_whatsapp)
                                 <a target="_blank" href="https://wa.me/{{ $settings->contact_whatsapp}}" class="footer-social"><i class="fab fa-whatsapp-square"></i></a>
                              @endif
                           </div>
                        </div>
                     </div>
                     <div class="footer_down-wrapper">
                        <div class="footer-col footer-col-1">
                           <h4>About Us</h4>
                           <ul>
                              <li><a href="{{ url('/about_us') }}" class="foo_links">about us</a></li>
                              <li><a href="{{ url('/blogs') }}" class="foo_links">Blog</a></li>

                              @foreach($footer_pages as $page)
                                 @if($page->parent_id == 1)
                                    <li><a href="{{ route('web.page_detail', $page->slug) }}" class="foo_links">{{ $page->name }}</a></li>
                                 @endif
                              @endforeach

                           </ul>
                        </div>
                        <div class="footer-col footer-col-2">
                           <h4>Products and Service</h4>
                           <ul>
                              @foreach($footer_pages as $page)
                                 @if($page->parent_id == 2)
                                    <li><a href="{{ route('web.page_detail', $page->slug) }}" class="foo_links">{{ $page->name }}</a></li>
                                 @endif
                              @endforeach

                           </ul>
                        </div>
                        <div class="footer-col footer-col-3">
                           <h4>Useful Links</h4>
                           <ul>
                              <li><a href="{{ url('/contact_us') }}" class="foo_links">Contact Us</a></li>
                              @foreach($footer_pages as $page)
                                 @if($page->parent_id == 3)
                                    <li><a href="{{ route('web.page_detail', $page->slug) }}" class="foo_links">{{ $page->name }}</a></li>
                                 @endif
                              @endforeach
                              
                           </ul>
                        </div>
                        <div class="footer-col foo-last-col">
                           <h4>Approach Us</h4>
                           <div class="social-links">
                              <div class="social-box">
                                 <div class="social_icon-container">
                                    <span class="social_icon"><i class="fas fa-map-marker-alt"></i></span> &nbsp;
                                    <span class="footer_social_content">
                                       <h1>Head Office Location</h1>
                                       <p> {{ $settings->location_address }}</p>
                                    </span>
                                 </div>
                                 <div class="social_icon-container">
                                    <span class="social_icon"><i class="fas fa-envelope"></i></span> &nbsp;
                                    <span class="footer_social_content">
                                       <h1>Email</h1>
                                       <p> {{ $settings->contact_email }}</p>
                                    </span>
                                 </div>
                                 <div class="social_icon-container">
                                    <span class="social_icon"><i class="fas fa-phone-alt"></i></span> &nbsp;
                                    <span class="footer_social_content">
                                       <h1>Contact Number</h1>
                                       <p> {{ $settings->contact_number }}</p>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!---second footer -->
      <div class="second_footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="second_footer-wrapper">
                     <p>{{ $settings->footer_text }}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <!--- Jquery cdn-->
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <!---custom js file-->
   <script src="{{ url('assets/js/app.js') }}"></script>
   
   <script>
      var baseTitle = window.document.title;
      window.onblur = function () { document.title = 'Back to E-Commerce'; };
      window.onfocus = function () {   document.title = baseTitle; }; 
      // document.addEventListener('contextmenu', event => event.preventDefault());  
      
   </script>
</body>
</html>
