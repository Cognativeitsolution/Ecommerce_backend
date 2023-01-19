@extends('layouts.app')

@section('seo')

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
                                    <h2 class="store_title sl_page">All Stores</h2>
                                    <ul class="store_breadcrumbs store_list">
                                      <li><a href="#">bagpack</a></li>
                                      <li><i class="fa fa-angle-right"></i></li>
                                      <li>All Stores</li>
                                    </ul>
                                </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>

        <!----alphabet sorting card---->
        <section class="sorting_store">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="store_head">
                            <div class="store_head-item ">
                               <h4 class="str_head-heading">Choose An Alphabet!</h4>
                               <div class="alphabet_letter-container">
                                  <a href="#" class="alphabets_items active">All Stores</a>
                                  <a href="#" class="alphabets_items">A</a>
                                  <a href="#" class="alphabets_items">B</a>
                                  <a href="#" class="alphabets_items">C</a>
                                  <a href="#" class="alphabets_items">D</a>
                                  <a href="#" class="alphabets_items">E</a>
                                  <a href="#" class="alphabets_items">F</a>
                                  <a href="#" class="alphabets_items">G</a>
                                  <a href="#" class="alphabets_items">H</a>
                                  <a href="#" class="alphabets_items">I</a>
                                  <a href="#" class="alphabets_items">J</a>
                                  <a href="#" class="alphabets_items">K</a>
                                  <a href="#" class="alphabets_items">L</a>
                                  <a href="#" class="alphabets_items">M</a>
                                  <a href="#" class="alphabets_items">N</a>
                                  <a href="#" class="alphabets_items">O</a>
                                  <a href="#" class="alphabets_items">P</a>
                                  <a href="#" class="alphabets_items">Q</a>
                                  <a href="#" class="alphabets_items">R</a>
                                  <a href="#" class="alphabets_items">S</a>
                                  <a href="#" class="alphabets_items">T</a>
                                  <a href="#" class="alphabets_items">U</a>
                                  <a href="#" class="alphabets_items">V</a>
                                  <a href="#" class="alphabets_items">W</a>
                                  <a href="#" class="alphabets_items">X</a>
                                  <a href="#" class="alphabets_items">Y</a>
                                  <a href="#" class="alphabets_items">Z</a>
                                  <a href="#" class="alphabets_items">#</a>
                               </div>
                            </div>
                            <div class="store_head-item">
                               <h2 class="store_heading">Browse All Stores by A to Z</h2>
                               <p class="store_text">Browse all stores alphabetically. We've collected voucher codes and offers for all these great Stores.</p>
                               <form class="search str_search">
                                  <input type="text" autocomplete="off" class="str_search_input" id="str_search" placeholder="Search Thousands Of Stores In StartforBig">
                                  <i class="fa fa-search"></i>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="all_stores-lists">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="all_store">
                            <div class="sec_st-head">Stores From A</div>
                            <div class="store_grid-container">
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                              <div class="box_parent-wrapper">
                                 <a href="single_store.html" class="stlist_grid-item">
                                    <div class="column-md">
                                       <div class="class_effect">
                                          <div class="resp_img"><img src="{{ asset('assets/images/all_store.jpg') }}" width="100%"></div>
                                          <div class="date_box-c">
                                             <img class="round_list-img lazy" src="{{ asset('assets/images/store_img.jpeg') }}">
                                          </div>
                                       </div>
                                       <div class="box_details">
                                          <div class="blog_detail-inner">
                                             <h6 class="lowest_h">Abbott Lyon</h6>
                                             <p>22 Offers</p>
                                          </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection