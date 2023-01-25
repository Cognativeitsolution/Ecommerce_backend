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
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css" integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
      <!--- Style css file -->
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}" type="text/css">
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>   
      
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
            <!-- <img src="{{ asset('assets/images/logowhite.png') }}" alt="sd-header-logo"> -->
            <img src="{{ asset('images/' . $settings->header_logo) }}" alt="sd-header-logo">
         </div>
         <div class="sidebar__list">
            <ul class="un-sideb-list">
               <li class="side-list"><a href="/" class="side-list-link">Home</a></li>
               <li class="side-list"><a href="{{ url('stores') }}" class="side-list-link">Stores</a></li>
               <li class="side-list"><a href="{{ url('about_us') }}" class="side-list-link">About Us</a></li>
               <li class="side-list"><a href="{{ url('contact_us') }}" class="side-list-link">Contact Us</a></li>
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
                           <a href="#" class="header_logo-link">
                           <img src="{{ asset('images/' . $settings->header_logo) }}" alt="logo" class="resp_logo">
                           </a>
                        </div>
                        <div class="main_menu">
                           <nav class="nav_bar">
                              <ul>
                                 <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                                 <li class="{{ Request::is('stores') ? 'active' : '' }}"><a href="{{ url('stores') }}">Stores</a></li>
                                 <li class="{{ Request::is('categories') ? 'active' : '' }}"><a href="{{ url('categories') }}">Category</a></li>
                                 <li class="{{ Request::is('about_us') ? 'active' : '' }}"><a href="{{ url('about_us') }}">About Us</a></li>
                                 <li class="{{ Request::is('contact_us') ? 'active' : '' }}"><a href="{{ url('contact_us') }}">Contact Us</a></li>
                                 <li class="{{ Request::is('blogs') ? 'active' : '' }}"><a href="{{ url('blogs') }}">Blog</a></li>
                              </ul>
                           </nav>
                        </div>
                        <div class="toggle_menu">
                           <span><i class="fas fa-bars"></i></span>
                        </div>
                     </div>
                     <div class="lower_primary-header">
                        <div class="btn_head_wrapper">
                           <a href="#" class="off_link">20% Percent Off</a>
                           <a href="#" class="free_link">
                           <span><i class="fas fa-truck-moving"></i></span>    
                           Free Delivery</a>
                        </div>
                        <div class="head_search_bar">
                           <form action="#" class="nav-search-area form-search" method="get" accept-charset="utf-8">
                              <input type="hidden" name="_token" value="#">                      
                              <input type="text" class="searchbox search-area input" autocomplete="off" name="search_query" id="searchbox" placeholder="Search Stores and Offers">
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
               <div class="alert alert-success" role="alert">
                  <strong>Success!</strong> {{ session('success') }}
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
                                 <a href="#" class="footer-logo">
                                 <img src="{{ asset('images/' . $settings->footer_logo) }}" class="img-responsive" alt="" width="170" height="50">
                                 </a>
                                 <p>{{ $settings->footer_text }}</p>
                                 <div class="effect phebe">
                                    <div class="buttons">
                                       @if ($settings->facebook_account_link)
                                          <a href="{{ $settings->facebook_account_link }}" class="fb" target="_blank" title="Join us on Facebook"><i class="fab fa-facebook-f"></i></a>
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
                                    <li>
                                       <a href="aboutus.html">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <polyline points="9 6 15 12 9 18"></polyline>
                                          </svg>
                                          who we are
                                       </a>
                                    </li>
                                    <li>
                                       <a href="aboutus.html">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <polyline points="9 6 15 12 9 18"></polyline>
                                          </svg>
                                          terms &amp; condition
                                       </a>
                                    </li>
                                    <li>
                                       <a href="aboutus.html">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <polyline points="9 6 15 12 9 18"></polyline>
                                          </svg>
                                          Privacy Policy
                                       </a>
                                    </li>
                                    <li>
                                       <a href="contact.html">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <polyline points="9 6 15 12 9 18"></polyline>
                                          </svg>
                                          contact
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="ftr_links">
                                 <h2 class="ftr_heading">Popular Stores</h2>
                                 <ul class="ftr_links_wrpr">
                                    <li>
                                       <a href="single_store.html">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <polyline points="9 6 15 12 9 18"></polyline>
                                          </svg>
                                          Store Name
                                       </a>
                                    </li>
                                    <li>
                                       <a href="single_store.html">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <polyline points="9 6 15 12 9 18"></polyline>
                                          </svg>
                                          Store Name
                                       </a>
                                    </li>
                                    <li>
                                       <a href="single_store.html">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <polyline points="9 6 15 12 9 18"></polyline>
                                          </svg>
                                          Store Name
                                       </a>
                                    </li>
                                    <li>
                                       <a href="single_store.html">
                                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <polyline points="9 6 15 12 9 18"></polyline>
                                          </svg>
                                          Store Name
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="ftr_links">
                                 <h2 class="ftr_heading">top offers</h2>
                                 <ul class="ftr_links_wrpr top_offers">
                                    <li>
                                       <a href="single_store.html">
                                          <p class="name">£50 Off When You Spend £500</p>
                                          <p class="offers">12 offers</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="single_store.html">
                                          <p class="name">£50 Off When You Spend £500</p>
                                          <p class="offers">12 offers</p>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="single_store.html">
                                          <p class="name">£50 Off When You Spend £500</p>
                                          <p class="offers">12 offers</p>
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

      	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal_main">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Balsam Hill</h5>
						<div class="store_title_modal">
							<div class="modal_title_img">
								<div class="web_imagebox">
									<img src="{{ asset('assets/images/str_logo.png') }}" width="100%"  />
								</div>
							</div>
							<div class="modal_title_content">
								<h2 class="store_modal">Upto 70% Off On Sitewide Orders</h2>
							</div>
						</div>
						<button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="modal_body_main">
							<p>HealthExpress website has been opened in a new tab / window. Simply copy and paste the code WELCOME15 and enter it at the checkout.</p>
							<div class="modal_code">
								**664
							</div>
							<a href="#" class="visit_site">Go to the HealthExpress Site <i class=" fa fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="modal_body_sidebar">
					<div class="modal_badge">
						<svg class="svg_icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="    http://www.w3.org/1999/xlink" x="0px" y="0px" width="33.375px" height="33.375px" viewBox="0 0 33.375 33.375" style="enable-background:new 0 0 33.375 33.375;" xml:space="preserve">
							<g>
								<g>
									<path d="M27.96,31.375H5.414c-1.945,0-3.664-0.979-4.7-2.464c0.14,2.481,2.184,4.464,4.7,4.464H27.96
                              c2.518,0,4.562-1.98,4.701-4.464C31.625,30.396,29.906,31.375,27.96,31.375z"></path>
									<path d="M27.96,1.375h-0.682V1c0-0.552-0.447-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1c0-0.552-0.448-1-1-1s-1,0.448-1,1v0.375
                              h-1.837V1c0-0.552-0.447-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375h-1.837V1
                              c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375H8.094V1c0-0.552-0.448-1-1-1c-0.552,0-1,0.448-1,1v0.375H5.412
                              c-2.605,0-4.725,2.12-4.725,4.726v19.547c0,2.605,2.12,4.727,4.727,4.727H27.96c2.606,0,4.728-2.12,4.728-4.727V6.101
                              C32.687,3.495,30.567,1.375,27.96,1.375z M25.78,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                              s-0.5-0.224-0.5-0.5V1z M21.943,1c0-0.276,0.225-0.5,0.5-0.5c0.276,0,0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                              c-0.275,0-0.5-0.224-0.5-0.5V1z M18.106,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                              s-0.5-0.224-0.5-0.5V1z M14.269,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                              s-0.5-0.224-0.5-0.5V1z M10.432,1c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                              s-0.5-0.224-0.5-0.5V1z M6.595,1c0-0.276,0.224-0.5,0.5-0.5c0.276,0,0.5,0.224,0.5,0.5v6.482c0,0.276-0.224,0.5-0.5,0.5
                              c-0.276,0-0.5-0.224-0.5-0.5V1z M30.279,25.648c0,1.277-1.04,2.317-2.318,2.317H5.414c-1.278,0-2.318-1.04-2.318-2.317V6.101
                              c0-1.278,1.04-2.318,2.318-2.318h0.682v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56
                              c0.861,0,1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187
                              c0,0.86,0.699,1.56,1.56,1.56c0.861,0,1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513
                              c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56s1.56-0.699,1.56-1.56c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837
                              v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56s1.561-0.699,1.561-1.56c0-0.478-0.222-0.9-0.561-1.187
                              V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.699,1.56,1.56,1.56c0.861,0,1.56-0.699,1.56-1.56
                              c0-0.478-0.221-0.9-0.56-1.187V3.783h1.837v2.513c-0.339,0.286-0.56,0.709-0.56,1.187c0,0.86,0.698,1.56,1.56,1.56
                              s1.561-0.699,1.561-1.56c0-0.478-0.221-0.9-0.561-1.187V3.783h0.682c1.277,0,2.317,1.04,2.317,2.318L30.279,25.648L30.279,25.648z
                              "></path>
									<path d="M22.71,13.307l-7.214,7.854l-5.045-3.735c-0.666-0.494-1.604-0.354-2.098,0.312c-0.493,0.666-0.354,1.605,0.313,2.099
                              l6.129,4.539c0.268,0.198,0.58,0.295,0.892,0.295c0.407,0,0.812-0.165,1.105-0.485l8.127-8.849c0.562-0.61,0.521-1.559-0.09-2.119
                              C24.221,12.658,23.272,12.696,22.71,13.307z"></path>
								</g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
							<g>
							</g>
						</svg>
						<div class="modal_badge_content">
							<h3 class="modal_badge_content_title">strat date :</h3>
							<p>31/12/2021</p>
						</div>
					</div>
					<div class="modal_badge">
						<svg class="svg_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.543 203.543" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 203.543 203.543">
							<g>
								<path d="m194.139,11.918h-39.315v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-35.053v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-33.563v-5.918c0-3.313-2.687-6-6-6s-6,2.687-6,6v5.918h-40.804c-3.313,0-6,2.687-6,6v135.572c0,3.313 2.687,6 6,6h36.826c5.901,25.214 28.555,44.053 55.541,44.053s49.64-18.84 55.541-44.053h36.826c3.313,0 6-2.687 6-6v-135.572c0.001-3.313-2.685-6-5.999-6zm-143.931,12v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h33.563v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h35.053v5.422c0,3.313 2.687,6 6,6s6-2.687 6-6v-5.422h33.315v24.536h-172.735v-24.536h34.804zm51.563,167.625c-24.842,0-45.053-20.211-45.053-45.053s20.211-45.053 45.053-45.053 45.053,20.21 45.053,45.053-20.21,45.053-45.053,45.053zm57.028-44.053c0.006-0.334 0.025-0.665 0.025-1 0-31.459-25.594-57.053-57.053-57.053s-57.053,25.594-57.053,57.053c0,0.335 0.02,0.666 0.025,1h-29.34v-87.035h172.735v87.035h-29.339z"></path>
								<path d="m107.771,148.004v-29.026c0-3.313-2.687-6-6-6s-6,2.687-6,6v31.512c0,1.591 0.632,3.117 1.757,4.243l13.79,13.791c1.172,1.171 2.707,1.757 4.243,1.757 1.535,0 3.071-0.586 4.243-1.757 2.343-2.343 2.343-6.142 0-8.485l-12.033-12.035z"></path>
							</g>
						</svg>
						<div class="modal_badge_content">
							<h3 class="modal_badge_content_title"> Expiry Date :</h3>
							<p>31/12/2021</p>
						</div>
					</div>
					<div class="modal_badge">
						<svg class="svg_icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
							<g>
								<g>
									<g>
										<path d="M452.184,64.414l-13.12-2.624C378.866,49.751,320.505,29.724,265.538,2.251c-6.004-3.001-13.071-3.001-19.075,0
                                 C191.478,29.733,133.136,49.754,72.938,61.79l-13.121,2.624c-9.972,1.994-17.149,10.75-17.149,20.919v78.549
                                 c0,91.952,36.531,180.151,101.544,245.165l96.704,96.704c8.331,8.331,21.839,8.331,30.17,0l96.704-96.704
                                 c65.014-65.014,101.544-153.213,101.544-245.165V85.333C469.333,75.164,462.156,66.409,452.184,64.414z M426.667,163.883
                                 c0,80.636-32.036,157.983-89.048,214.995L256,460.497l-81.619-81.619c-57.012-57.012-89.048-134.359-89.048-214.995v-61.072
                                 C144.359,90.665,201.669,71.279,256,45.097c54.318,26.174,111.642,45.564,170.667,57.714V163.883z"></path>
										<path d="M185.756,198.244c-8.331-8.331-21.839-8.331-30.17,0s-8.331,21.839,0,30.17l64,64c8.87,8.87,23.443,8.209,31.474-1.428
                                 l106.667-128c7.543-9.051,6.32-22.503-2.731-30.046c-9.051-7.543-22.503-6.32-30.046,2.731l-91.712,110.054L185.756,198.244z"></path>
									</g>
								</g>
							</g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
							<g></g>
						</svg>
						<div class="modal_badge_content">
							<h3 class="modal_badge_content_title"> Verified On :</h3>
							<p>31/12/2021</p>
						</div>
					</div>

					<div class="rating modal_badge">
						<div class="stars">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
   </body>
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <!-- Jquery CDN -->
   <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <script src="{{ asset('assets/js/app.js') }}"></script>

   <!-- type ahead search  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
   <script>

      var path = "{{ url('stores/action') }}";

      $('#searchbox').typeahead({

         source: function(query, process){

            return $.get(path, {query:query}, function(data){

                  var cubes = "";   
                  
                  $.each(data, function (i, value) {
                  
                     console.log(value);

                     cubes += "<li class='ss-cube'><a href='{{ url('stores/') }}/"+value.slug+"'><div class='web_imagebox'><img src='{{ url('/images/') }}/"+value.image+"' alt='Store Image'></div><div class='flexed-result'><p class='store-name'>"+ value.name +"</p><p class='coupon_count'>"+ value.coupon_count +" Offers</p></div></a></li>";
                  

                  });

                  $(".search-cubes").html(cubes);

            });

         }

      });

      function getCodeDeal(id){

         var url = "{{ url('stores/views') }}";

         $.ajax({
            url: url,
            method: 'GET',
            data: {id: id},
            contentType: false,
            cache: false,
            success:function(data){
                // alert(data.message);
            }
        });

      }

      </script>

</html>

@yield('js')
