@extends('layouts.admin')

@section('css')
  <style>
    .error{
      color:red;
    }
  </style>
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
              <a href="{{ route('core_services.index') }}" class="btn btn-block btn-primary">View Core Services</a>
            </div>

          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Add Core Service</li>
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
          <form name="add-core-service" id="add-core-service" method="post" enctype="multipart/form-data" action="{{ route('core_services.store')}}">
            @csrf

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
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" class="form-control" >
              @error('image')<div class="error">{{ $message }}</div>@enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
    <!--close main area -->    
@endsection

@section('js')

@endsection