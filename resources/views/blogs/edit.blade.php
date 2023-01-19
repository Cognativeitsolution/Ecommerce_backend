@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<style>
.error{
  color:red;
}

/* For Ckeditor */
  .ck-editor__editable_inline {
    min-height: 250px;
  }
</style>

<!-- CKEDITOR -->
<script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script>
@endsection

@section('content')

<?php
              // echo "<pre>";
              // print_r( $tags );
              // die();
              ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
              <a href="{{ route('blogs.index') }}" class="btn btn-block btn-primary">View Blog</a>
            </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Edit Blog</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--main area -->
    <div class="container mt-4">
      @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif

      <div class="card">    
        <div class="card-body">
          <form name="edit-blog-post-form" id="edit-blog-post-form" method="post" enctype="multipart/form-data" action="{{ route('blogs.update', $record->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="{{ $record->name }}" class="form-control" >
              @error('name')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="{{ $record->title }}" class="form-control" >
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="short_description">Short Description</label>
              <input type="text" id="short_description" name="short_description" value="{{ $record->short_description }}" class="form-control" >
              @error('short_description')<div class="error">{{ $message }}</div>@enderror
            </div>
      
            <div class="form-group">
              <label for="long_description">Long Description</label>
              <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control">{{ $record->long_description }}</textarea>

              <script>
                      ClassicEditor
                              .create( document.querySelector( '#long_description' ), {
                                fontSize: {
                                  options: [
                                    // '10pt', '12pt', '14pt', '16pt', '18pt', '24pt', '30pt', '36pt', '48pt', '60pt', '70pt', '84pt',
                                    {
                                      title: 'xx-small',
                                      model: '5px'
                                    },
                                    {
                                      title: 'x-small',
                                      model: '7px'
                                    },
                                    {
                                      title: 'small',
                                      model: '11px'
                                    },
                                    {
                                      title: 'medium',
                                      model: '16px'
                                    },
                                    {
                                      title: 'large',
                                      model: '24px'
                                    },
                                    {
                                      title: 'x-large',
                                      model: '36px'
                                    },
                                    {
                                      title: 'xx-large',
                                      model: '54px'
                                    }
                                  ]
                                }
                              } )
                              .then( editor => {
                                      console.log( editor );
                              } )
                              .catch( error => {
                                      console.error( error );
                              } );
              </script>
              @error('long_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="reading_time">Reading Time</label>
              <input type="text" id="reading_time" name="reading_time" value="{{ $record->reading_time }}" class="form-control" >
            </div>

            <div class="form-group">
              <label>Tags</label>
              
              <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Select a tag" >
      
                @foreach($tags as $tag)
                  <option value={{ $tag->id }} <?php if(in_array($tag->id, $blogTag)){
                    echo 'selected';
                    }?> >{{ $tag->name }}</option>
                @endforeach

              </select>
              
            </div>


            <div class="form-group">
              <label>Select Related Blog</label>
              <select name="related_blogs[]" class="form-control select2" multiple="multiple" data-placeholder="Select a Blog" >
      
                @foreach($blogs as $blog)
                  <option value={{ $blog->id }} <?php if(in_array($blog->id, $related_blog_ids)){
                    echo 'selected';
                    }?> >{!! Str::words( $blog->title, 5, ' ..') !!}</option>
                @endforeach
      
              </select>
            </div>

            <div class="form-group">
              <label for="blog_image">Blog Image</label>
              <input type="file" class="form-control" id="blog_image" name="blog_image" class="form-control" >
            </div>

            @if( !empty($record->blog_image) )
            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <strong>Thumbnail Blog Image </strong>
              <br/>
              <img src="{{ url('/thumbnail/') }}/{{ $record->blog_image }}" >
            </div>
            @endif

            <div class="form-group">
              <div class="custom-control custom-switch">
              <input type="checkbox" name="status" {{ $record->status == 1 ? 'checked' : 'no' }} class="custom-control-input" id="customSwitch1">
              <label class="custom-control-label" for="customSwitch1">Show Blog</label>
              </div>
            </div>

          </div>
            <!--close row -->

            <hr>
            <h3>Seo Section </h3>

            <div class="form-group">
              <label for="meta_keywords">Meta Keywords</label>
              <input type="text" id="meta_keywords" name="meta_keywords" value="{{ $record->meta_keywords }}" class="form-control" placeholder="Enter minimum 3 characters and maximum 160 characters">
              @error('meta_keywords')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <input type="text" id="meta_description" name="meta_description" value="{{ $record->meta_description }}" class="form-control" placeholder="Enter minimum 3 characters and maximum 160 characters">
              @error('meta_description')<div class="error">{{ $message }}</div>@enderror
            </div>
                
            @can('blog-edit')
            <button type="submit" class="btn btn-primary">Update</button>
            @endcan
          </form>

          <br>
          <div class='log_information'>
            @if(!empty($logs['created_log']) )
                <p class="log_information" style=""><strong>Created info :</strong>
                    {{ $logs['created_log']['timestamp'] }} ,
                    {{ $logs['created_log']['by'] }} ,
                    {{ $logs['created_log']['agent_ip'] }}
                </p>
                
            @endif

            @if(!empty($logs['modified_log']) )
                <p class="modified_log" style="font-size:13px;"><strong>Updated info :</strong>
                    {{ $logs['modified_log']['timestamp'] }} ,
                    {{ $logs['modified_log']['by'] }} ,
                    {{ $logs['modified_log']['agent_ip'] }}
                </p>
                
            @endif

          </div>
        </div>
      </div>
    </div> 
    <!--close main area -->
  </div>    
@endsection

@section('js')
  <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
  
      
    })
  </script>
@endsection