@extends('layouts.admin')

@section('css')
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
            <a href="{{ route('sliders.index') }}" class="btn btn-block btn-primary">View Sliders</a>
          </div>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Add Slider</li>
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
        <form name="add-slider" id="add-slider" method="post" enctype="multipart/form-data" action="{{ route('sliders.store')}}">
          @csrf

          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control">
            @error('title')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}" class="form-control">
            @error('description')<div class="error">{{ $message }}</div>@enderror
          </div>

          <hr>
          <h4>Display To</h4>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" value=1 class="form-check-input" checked="checked" name="is_coupon">Coupon Site
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" value=0 class="form-check-input" name="is_coupon">Blog Site
            </label>
          </div>
          <hr>

          <div class="form-group">
            <label for="image">Slider Image</label>
            <input type="file" class="form-control" id="image" name="image" class="form-control">
            @error('image')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="url">Page Url</label>
            <input type="text" id="url" name="url" value="{{ old('url') }}" class="form-control">
            @error('url')<div class="error">{{ $message }}</div>@enderror
          </div>


          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!--close main area -->
</div>
@endsection