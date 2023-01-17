@extends('layouts.app')

@section('seo')
   <title>Cognitive IT Solutions</title>
   <meta name="keywords" content="Cognitive IT Solutions Our Core Services"/>
   <meta name="description" content="Cognitive IT Solutions provide best projcts and software with Our Core Services, we have done many projects."/>
@endsection

@section('content')
    <!---About Us Banner Container-->
    <section class="service_hero-banner">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="secondary_about_slider">
                        <div class="page-title">
                           <div class="container">
                              <h1>Services</h1>
                              <p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!----Emerging Innovation-->
         <section class="emerg_innovation">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="primary_heading">
                        <span class="primary_main-heading">Emerging</span>
                        <span class="primary_sub-heading">Innovation</span>
                     </div>
                     <div class="ei_grid-wrapper">
                        <div class="ei_grid-item ei_flex-wrapper">
                           <div class="svg_box-ei">
                              <span><i class="fas fa-cogs"></i></span>
                           </div>
                           <div class="ei_name">
                              <span>ERP Solution</span>
                           </div>
                        </div>
                        <div class="ei_grid-item ei_flex-wrapper">
                           <div class="svg_box-ei">
                              <span><i class="fab fa-wordpress"></i></span>
                           </div>
                           <div class="ei_name">
                              <span>WordPress</span>
                           </div>
                        </div>
                        <div class="ei_grid-item ei_flex-wrapper">
                           <div class="svg_box-ei">
                              <span><i class="fa fa-shopping-cart"></i></span>
                           </div>
                           <div class="ei_name">
                              <span>Eccomerce Solution</span>
                           </div>
                        </div>
                        <div class="ei_grid-item e_flex-wrapper">
                           <div class="svg_box-ei">
                              <span><i class="fa fa-mobile"></i></span>
                           </div>
                           <div class="ei_name">
                              <span>App Solution</span>
                           </div>
                        </div>
                        <div class="ei_grid-item ei_flex-wrapper">
                           <div class="svg_box-ei">
                              <span><i class="fa fa-laptop-code"></i></span>
                           </div>
                           <div class="ei_name">
                              <span>Web Solution</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!---Our Core Service-->
         <section class="ocs-section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="primary_heading">
                        <span class="primary_main-heading">Our Core</span>
                        <span class="primary_sub-heading">Services</span>
                     </div>
                     <div class="ocs_grid-container">
                         
                        @if(!empty($records) && $records->count())
                           @foreach($records as $core_service)
                              <div class="ocs_grid-item">
                                 <div class="image_box">
                                    <img src="{{ url('images/' . $core_service->image) }}" alt="{{ $core_service->title }}" class="ocs_img">
                                 </div>
                                 <div class="ocs-head">
                                    {!! Str::words( $core_service->title, 4, ' ') !!}
                                 </div>
                                 <p class="ocs_content">
                                    {{ $core_service->short_description }}
                                 </p>
                              </div>
                           @endforeach
                        @endif
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!----Technologies --->
         <section class="tech_container">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="tech_grid">
                        <div class="upper_flex-wrapper">
                           <div class="tech_grid-item colss-1">
                              <div class="tech_card">
                                 <h5>Front-end</h5>
                                 <div class="progs_list-wrapper">
                                    <ul>
                                       <li>React</li>
                                       <li>node</li>
                                       <li>ionic</li>
                                       <li>swift</li>
                                       <li>flutter</li>
                                       <li>html</li>
                                       <li>scss</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="tech_grid-item colss-2">
                              <div class="tech_card">
                                 <h5>Front-end</h5>
                                 <div class="progs_list-wrapper">
                                    <ul>
                                       <li>React</li>
                                       <li>node</li>
                                       <li>ionic</li>
                                       <li>swift</li>
                                       <li>flutter</li>
                                       <li>html</li>
                                       <li>scss</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="tech_grid-item colss-3">
                              <div class="tech_card">
                                 <h5>Front-end</h5>
                                 <div class="progs_list-wrapper">
                                    <ul>
                                       <li>React</li>
                                       <li>node</li>
                                       <li>ionic</li>
                                       <li>swift</li>
                                       <li>flutter</li>
                                       <li>html</li>
                                       <li>scss</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="below_flex-wrapper">
                           <div class="tech_grid-item colss-4">
                              <div class="tech_card">
                                 <h5>Front-end</h5>
                                 <div class="progs_list-wrapper">
                                    <ul>
                                       <li>React</li>
                                       <li>node</li>
                                       <li>ionic</li>
                                       <li>swift</li>
                                       <li>flutter</li>
                                       <li>html</li>
                                       <li>scss</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="tech_grid-item colss-5">
                              <div class="tech_card">
                                 <h5>Front-end</h5>
                                 <div class="progs_list-wrapper">
                                    <ul>
                                       <li>React</li>
                                       <li>node</li>
                                       <li>ionic</li>
                                       <li>swift</li>
                                       <li>flutter</li>
                                       <li>html</li>
                                       <li>scss</li>
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
         <!----get a quote banner-->
         <section class="get_quote-section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="get_quote-banner">
                        <div class="tertiary_heading">
                           <h2>Make a great <br> project with us.</h2>
                        </div>
                        <div class="get_btn-box">
                           <button class="get_qt-btn">Get a Quote &rarr;</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!----Technologies --->
         <section class="provide_solution-container">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="provide_solution-grid">
                        <div class="upper_flex-wrapper">
                           <div class="ps_grid-item colss-1">
                              <div class="ps_card">
                                 <h5>01. Requirement Analysis</h5>
                                 <div class="ps_list-wrapper">
                                    <ul>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="ps_grid-item colss-2">
                              <div class="ps_card">
                                 <h5>02. Requirement Analysis</h5>
                                 <div class="ps_list-wrapper">
                                    <ul>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="ps_grid-item colss-3">
                              <div class="ps_card">
                                 <h5>03. Requirement Analysis</h5>
                                 <div class="ps_list-wrapper">
                                    <ul>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="below_flex-wrapper">
                           <div class="ps_grid-item colss-4">
                              <div class="ps_card">
                                 <h5>04. Requirement Analysis</h5>
                                 <div class="ps_list-wrapper">
                                    <ul>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="ps_grid-item colss-5">
                              <div class="ps_card">
                                 <h5>05. Requirement Analysis</h5>
                                 <div class="ps_list-wrapper">
                                    <ul>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
                                       <li>Preparing Wireframe</li>
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
@endsection