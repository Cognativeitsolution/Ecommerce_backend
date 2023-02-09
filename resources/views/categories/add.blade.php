@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('cropper/jquery.awesome-cropper.css') }}">

<style>
  .error {
    color: red;
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
            <a href="{{ route('categories.index') }}" class="btn btn-block btn-primary">View Categories</a>
          </div>

        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Add Category</li>
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
        <form name="add-blog" id="add-blog" method="post" action="{{ route('categories.store')}}">
          @csrf

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
            @error('name')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control">
            @error('title')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="short_description">Short Description</label>
            <input type="text" id="short_description" name="short_description" value="{{ old('short_description') }}" class="form-control">
            @error('short_description')<div class="error">{{ $message }}</div>@enderror
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
<script src="{{ asset('cropper/build/jquery.awesome-cropper.js') }}"></script> 
<script src="{{ asset('cropper/components/imgareaselect/scripts/jquery.imgareaselect.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2();
  });
</script>
<script>
$(document).ready(function () {
  
$('#sample_input').awesomeCropper({ 
width: 150, 
height: 150, 
debug: false
});
});
</script>
@endsection