@extends('layouts.app')

@section('seo')
   <title>Jobs in Cognitive IT Solution we make your future</title>
   <meta name="keywords" content="We make future in Cognitive IT Solution"/>
   <meta name="description" content="We are hiring in Cognitive IT Solution in multiple position, Apply here cognitive IT solution"/>
@endsection

@section('content')
    
      <!---About Us Banner Container-->
      <section class="job_hero-banner">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="secondary_career_slider">
                     <div class="page-title">
                        <div class="container">
                           <h1>Jobs</h1>
                           <h6>Build your Career with Us</h6>
                           <p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!----Job list container-->
      <section class="jl-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="primary_heading">
                     <span class="primary_main-heading">Positions you can</span>
                     <span class="primary_sub-heading">apply for</span>
                  </div>
                  <div class="jobs_grid-container">
                     @if(!empty($record) && $record->count())
                        @foreach($record as $job)
                        <a href="{{ url('jobs/' .$job->slug) }}" class="jl_list jobs_list-item1">
                           <div class="jl_wrapper">
                              <div class="jl_head">
                                 <span><i class="fas fa-dot-circle"></i></span>
                                 <h3>
                                    {!! Str::words( $job->name, 4, ' ') !!}
                                 </h3>
                              </div>
                              <div class="jl_intro">
                                 <p>
                                    {!! Str::words( $job->short_description, 20, ' ...') !!}
                                 </p>
                              </div>
                              <div class="jl_tag">
                                 <div class="tag date">
                                    {{ $job->created_at->format('d M Y') }}
                                 </div>
                                 <div class="tag location">
                                    {{ $job->location }}
                                 </div>
                              </div>
                           </div>
                        </a>
                        @endforeach
                     @endif
                     
                  </div>
               </div>
            </div>
         </div>
      </section>

   
    
@endsection