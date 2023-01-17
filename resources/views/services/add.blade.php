@extends('layouts.admin')

@section('css')
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="col-sm-4"></div>

            <div class="col-sm-4">
              <a href="{{ route('services.index') }}" class="btn btn-block btn-primary">View Services</a>
            </div>

          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Add Service</li>
            </ol>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--main area -->
    <div class="container mt-4">
      @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      @endif

      <div class="card">        
        <div class="card-body">
          <form name="add-page" id="add-page" method="post" enctype="multipart/form-data" action="{{ route('services.store')}}">
            @csrf

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" >
              @error('name')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control" >
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="short_description">Short Description</label>
              <input type="text" id="short_description" name="short_description" value="{{ old('short_description') }}" class="form-control" >
              @error('short_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="long_description">Long Description</label>
              <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control">{{ old('long_description') }}</textarea>

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
              <label>Select Parent</label>
              <select name="parent_id" class="form-control" data-placeholder="Select a Parent" >
                
                @foreach($services as $service)
                  <option value={{ $service->id }}>{!! Str::words( $service->title, 5, ' ..') !!}</option>
                @endforeach

              </select>
            </div>

            <hr>
            <h3>Seo Section </h3>

            <div class="form-group">
              <label for="meta_keywords">Meta Keywords</label>
              <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}" class="form-control" placeholder="Enter minimum 3 characters and maximum 160 characters">
              @error('meta_keywords')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <input type="text" id="meta_description" name="meta_description" value="{{ old('meta_description') }}" class="form-control" placeholder="Enter minimum 3 characters and maximum 160 characters">
              @error('meta_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
    <!--close main area -->    
@endsection