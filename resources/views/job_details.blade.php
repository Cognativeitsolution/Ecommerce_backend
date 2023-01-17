@extends('layouts.app')

@section('seo')
   <title>{{ $job->title }}</title>
   <meta name="keywords" content="{{ $job->meta ? $job->meta->meta_keywords : '' }}"/>
   <meta name="description" content="{{ $job->meta ? $job->meta->meta_description : '' }}"/>
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
                     <h1>{!! Str::words( $job->title, 3, ' ') !!}</h1>
                     <h6>{!! Str::words( $job->name, 7, ' ') !!}</h6>
                     <p>
                        {!! Str::words( $job->short_description, 40, ' ...') !!}
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!----Job list container-->
<section class="jl_desc-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_job-desc">
               <h2 class="job-detail-heading">{!! Str::words( $job->title, 3, ' ') !!} </h2>
               <div class="job_detail-content">
                  {!! $job->long_description !!}
               </div>
               <a href="{{ url('/apply_job') }}" class="apply_btn">Apply Now</a>
               {{-- <button class="apply_btn">Apply Now </button> --}}
            </div>
         </div>
      </div>
   </div>
</section>
    
@endsection