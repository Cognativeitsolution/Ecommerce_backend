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
              <a href="{{ route('satisfactions.index') }}" class="btn btn-block btn-primary">View Satisfactions</a>
            </div>

          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Add Satisfaction</li>
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
          <form name="add-satisfactions" id="add-satisfactions" method="post" enctype="multipart/form-data" action="{{ route('satisfactions.store')}}">
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
              <label for="font_awsome">Font Awsome Class</label>
              <input type="text" id="font_awsome" name="font_awsome" value="{{ old('font_awsome') }}" class="form-control" >
              @error('font_awsome')<div class="error">{{ $message }}</div>@enderror
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