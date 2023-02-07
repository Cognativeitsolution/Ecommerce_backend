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
            <a href="{{ route('sliders.index') }}" class="btn btn-block btn-primary">View Slider</a>
          </div>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Edit Slider</li>
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
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data" action="{{ route('sliders.update', $record->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="{{ $record->title }}" class="form-control">
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" id="description" name="description" value="{{ $record->description }}" class="form-control">
              @error('description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <hr>
            <h4>Display To</h4>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" value=1 class="form-check-input" {{ $record->is_coupon == 1 ? 'checked' : '' }} name="is_coupon">Coupon Site
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" value=0 class="form-check-input" {{ $record->is_coupon == 0 ? 'checked' : '' }} name="is_coupon">Blog Site
              </label>
            </div>
            <hr>


            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <label for="image">Slider Image</label>
              <input type="file" class="form-control" id="image" name="image">
            </div>

            @if( !empty($record->image) )
            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <strong>Thumbnail Slider Image </strong>
              <br />
              <img src="{{ url('/thumbnail/') }}/{{ $record->image }}">
            </div>
            @endif

            <div class="form-group">
              <label for="url">Page Url</label>
              <input type="text" id="url" name="url" value="{{ $record->url }}" class="form-control">
              @error('url')<div class="error">{{ $message }}</div>@enderror
            </div>


          </div>
          <!--close row -->

          @can('slider-edit')
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