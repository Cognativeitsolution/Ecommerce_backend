@extends('layouts.app')

@section('seo')
   <title>Cognitive IT Solution are create blogs for user information</title>
   <meta name="keywords" content="Cognitive IT Solution are create blogs for user information"/>
   <meta name="description" content="Cognitive IT Solution are create blogs for user information"/>
@endsection

@section('content')
    
      <!---Blog Banner Container-->
      <section class="blog_hero-banner">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="secondary_about_slider">
                     <div class="page-title">
                        <div class="container">
                           <h1>Blog</h1>
                           <!--<h6>Cognitive IT Solution</h6>-->
                           <p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      


      <!----Blog section --->
      <section class="blog_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="card_grid-container">

                     @if(!empty($record) && $record->count())
                        @foreach($record as $blog)
                        <div class="blog__card">
                           <div class="blog__head">
                              <img src="{{ url('images/' . $blog->blog_image) }}" alt="blog" class="blog_img">
                           </div>
                           <div class="blog_content">
                  
                              <div class="blog__title">
                                 {!! Str::words( $blog->name, 4, ' ') !!}
                              </div>
                              <div class="blog_info">
                                 {!! Str::words( $blog->short_description, 20, ' ...') !!}
                              </div>
                              <div class="blog_footer">
                                 <div class="blog__date">
                                    {{ $blog->created_at->format('d M Y') }}
                                 </div>
                                 <div class="blog__btn">
                                    <a href="{{ url('blogs/' .$blog->slug) }}" class="read-btn">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                     @endif
                  </div>
               </div>
            </div>

            @if (!empty($record && $record->count()))
               <div>
                  {{ $record->links() }}
               </div>
            @endif
         </div>
      </section>

   
    
@endsection