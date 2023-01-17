@extends('layouts.app')

@section('seo')
   <title>{{ $record->title }}</title>
   <meta name="keywords" content="{{ $record->meta ? $record->meta->meta_keywords : '' }}"/>
   <meta name="description" content="{{ $record->meta ? $record->meta->meta_description : '' }}"/>
@endsection

@section('content')
   
<section class="privacy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pp_head">
                 <h2 class="job-detail-heading">{!! Str::words( $record->title, 3, ' ') !!} </h2>
                </div>
                <div class="job_detail-content">
                 <h4 class="jbc_head">{!! Str::words( $record->name, 7, ' ') !!}</h4>

                 {!! $record->long_description !!}

              </div>
            </div>
        </div>
    </div>
   </section>

@endsection