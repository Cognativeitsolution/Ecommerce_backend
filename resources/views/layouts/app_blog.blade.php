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
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
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
         <img src="{{ asset('images/' . $settings->header_logo) }}" alt="sd-header-logo">
      </div>
      <div class="sidebar__list">
         <ul class="un-sideb-list">
            <li class="side-list"><a href="{{ url('/') }}" class="side-list-link">Home</a></li>
            <li class="side-list"><a href="#" class="side-list-link">About Us</a></li>
            <li class="side-list"><a href="#" class="side-list-link">Contact Us</a></li>
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
                        <a href="{{ url('/') }}" class="header_logo-link">
                           <img src="{{ asset('images/' . $settings->header_logo) }}" alt="logo" class="resp_logo">
                        </a>
                     </div>
                     
                     <div class="main_menu">
                        <nav class="nav_bar">
                           <ul>
                              <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                              <li class="{{ Request::is('pages/about-us') ? 'active' : '' }}"><a href="#">About Us</a></li>
                              <li class="{{ Request::is('contact_us') ? 'active' : '' }}"><a href="#">Contact Us</a></li>
                           </ul>
                        </nav>
                     </div>
                     <div class="toggle_menu">
                        <span><i class="fas fa-bars"></i></span>
                     </div>
                  </div>
                  <div class="lower_primary-header">

                     
                        <div class="head_search_bar mobile">
                        <form action="#" class="nav-search-area form-search" method="get" accept-charset="utf-8">
                           <input type="hidden" name="_token" value="#">
                           <input type="text" class="searchbox search-area input" autocomplete="off" name="search_query" id="searchbox2" placeholder="Search Stores and Offers">
                           <a href="javascript:void(0);" class="nav-search-icon">
                              <i class="fa fa-search"></i>
                           </a>
                           <div class="search_result_box" style="display: none;">
                              <ul class="search-cubes">


                              </ul>
                           </div>
                        </form>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
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
                     </div>
                     <hr>
                     <div class="ftr_tops">
                        <div class="popular_posts">
                           <div class="post_box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                 <line x1="3" y1="21" x2="21" y2="21" />
                                 <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4" />
                                 <line x1="5" y1="21" x2="5" y2="10.85" />
                                 <line x1="19" y1="21" x2="19" y2="10.85" />
                                 <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
                              </svg>
                              <div class="post_box_content">
                                 <h4 class="stats_number">
                                    Merchants
                                 </h4>
                                 <p>We've Partnered With Over 3576+ Merchants</p>
                              </div>
                           </div>
                           <div class="post_box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                 <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                 <rect x="9" y="3" width="6" height="4" rx="2" />
                                 <line x1="9" y1="12" x2="9.01" y2="12" />
                                 <line x1="13" y1="12" x2="15" y2="12" />
                                 <line x1="9" y1="16" x2="9.01" y2="16" />
                                 <line x1="13" y1="16" x2="15" y2="16" />
                              </svg>
                              <div class="post_box_content">
                                 <h4 class="stats_number">
                                    Categories
                                 </h4>
                                 <p>
                                    We Have More Than 83+ Categories To Choose From
                                 </p>
                              </div>
                           </div>
                           <div class="post_box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                 <path d="M7.859 6h-2.834a2.025 2.025 0 0 0 -2.025 2.025v2.834c0 .537 .213 1.052 .593 1.432l6.116 6.116a2.025 2.025 0 0 0 2.864 0l2.834 -2.834a2.025 2.025 0 0 0 0 -2.864l-6.117 -6.116a2.025 2.025 0 0 0 -1.431 -.593z" />
                                 <path d="M17.573 18.407l2.834 -2.834a2.025 2.025 0 0 0 0 -2.864l-7.117 -7.116" />
                                 <path d="M6 9h-.01" />
                              </svg>
                              <div class="post_box_content">
                                 <h4 class="stats_number">
                                    Coupons
                                 </h4>
                                 <p>
                                    Coupons
                                 </p>
                              </div>
                           </div>
                           <div class="post_box">
                              <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                 <circle cx="12" cy="7" r="4" />
                                 <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                              </svg>
                              <div class="post_box_content">
                                 <h4 class="stats_number">
                                    Users
                                 </h4>
                                 <p>We're A Growing Family Of Over 342+ Users Daily</p>
                              </div>
                           </div>
                        </div>
                        <div class="footer-props">
                           <div class="subscription_text">
                              <div class="subscribe__title">Subscribe To Our Newsletter</div>
                              <p>Sign up for our weekly email newsletter with the best money saving coupons.</p>
                           </div>
                           <div id="mc_embed_signup">
                              <form action="{{ url('subscribers/store') }}" class="submit-form sb_form" form-type="subscribeform" method="post" accept-charset="utf-8">
                                 @csrf
                                 <div class="response-box"></div>
                                 <div class="subscriptionBox">
                                    <input type="text" class="form-control" placeholder="Email Address" name="email" required>
                                    <button class="btn subs" type="submit"> Submit <i class="fa fa-paper-plane"></i></button>
                                 </div>
                                 @error('email')
                                 <div style="margin-top: 5px; color: red; font-weight:bold">{{ $message }}</div>
                                 @enderror
                              </form>
                           </div>
                        </div>
                        <div class="nav_links">
                           <div class="single_prop first-order">
                              <a href="" class="footer-logo">
                                 <img src="{{ asset('images/' . $settings->footer_logo) }}" class="img-responsive" alt="" width="170" height="50">
                              </a>
                              <p>{{ $settings->footer_text }}</p>
                              <div class="effect phebe">
                                 <div class="buttons">
                                    

                                    @if ($settings->facebook_account_link)
                                    <a href="{{ $settings->facebook_account_link }}" class="au_item">
                                       <div class="icon fb">
                                          <i class="fab fa-facebook-f"></i>
                                       </div>
                                    </a>
                                    @endif

                                    @if ($settings->instagram_account_link)
                                    <a href="{{ $settings->instagram_account_link }}" class="au_item">
                                       <div class="icon insta">
                                          <i class="fab fa-instagram"></i>
                                       </div>
                                    </a>
                                    @endif

                                    @if ($settings->google_plus_account_link)
                                    <a href="{{ $settings->google_plus_account_link }}" class="au_item">
                                       <div class="icon google_plus">
                                          <i class="fab fa-google-plus-g"></i>
                                       </div>
                                    </a>
                                    @endif

                                    @if ($settings->pinterest_account_link)
                                    <a href="{{ $settings->pinterest_account_link }}" class="au_item">
                                       <div class="icon pt">
                                          <i class="fab fa-pinterest"></i>
                                       </div>
                                    </a>
                                    @endif
                                 </div>
                              </div>
                           </div>
                           <div class="ftr_links">
                              <h2 class="ftr_heading">More Links</h2>
                              <ul class="ftr_links_wrpr">
                                 @foreach ($footer_pages as $page)
                                 <li>
                                    <a href="#">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <polyline points="9 6 15 12 9 18"></polyline>
                                       </svg>
                                       {{ $page->name }}
                                    </a>
                                 </li>
                                 @endforeach

                                 <li>
                                    <a href="#">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                          <polyline points="9 6 15 12 9 18"></polyline>
                                       </svg>
                                       contact
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
   $('img').loadScroll(300);// in ms
</script>

</html>

@yield('js')