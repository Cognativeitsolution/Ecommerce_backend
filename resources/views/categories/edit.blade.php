@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<style>
  .error {
    color: red;
  }
</style>
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
            <a href="{{ route('categories.index') }}" class="btn btn-block btn-primary">View Category</a>
          </div>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Edit Category</li>
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
        <form name="edit-blog-post-form" id="edit-blog-post-form" method="post" action="{{ route('categories.update', $category->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="{{ $category->name }}" class="form-control">
              @error('name')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="{{ $category->title }}" class="form-control">
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="short_description">Short Description</label>
              <input type="text" id="short_description" name="short_description" value="{{ $category->short_description }}" class="form-control">
              @error('short_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="sort">Sort</label>
              <input type="number" id="sort" name="sort" value="{{ $category->sort }}" class="form-control">
              @error('sort')<div class="error">{{ $message }}</div>@enderror
            </div>

            <h4>Status</h4>
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input type="checkbox" name="status" {{ $category->status == 1 ? 'checked' : 'no' }} class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Show</label>
              </div>
            </div>

            <hr>
            <h3>Seo Section </h3>

            <div class="form-group">
              <label for="meta_keywords">Meta Keywords</label>
              <input type="text" id="meta_keywords" name="meta_keywords" value="{{ $category->meta_keywords }}" class="form-control" placeholder="Enter minimum 3 characters and maximum 160 characters">
              @error('meta_keywords')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <input type="text" id="meta_description" name="meta_description" value="{{ $category->meta_description }}" class="form-control" placeholder="Enter minimum 3 characters and maximum 160 characters">
              @error('meta_description')<div class="error">{{ $message }}</div>@enderror
            </div>

          </div>
          <!--close row -->

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
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()


  })
</script>
@endsection