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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="col-sm-4"></div>

          <div class="col-sm-4">
            <a href="{{ route('categories_stores.index') }}" class="btn btn-block btn-primary">View Categories</a>
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
        <form name="add-store" id="add-store" method="post" enctype="multipart/form-data" action="{{ route('categories_stores.store')}}">
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
            <label>Select Stores</label>
            <select name="related_stores[]" class="form-control select2" multiple="multiple" data-placeholder="Select a related">

              @foreach($stores as $data)
              <option value={{ $data->id }}>{!! Str::words( $data->name, 5, ' ..') !!}</option>
              @endforeach

            </select>
          </div>

          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" class="form-control">
            @error('image')<div class="error">{{ $message }}</div>@enderror
          </div>


          <hr>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="popular" value=1>Popular
            </label>
          </div>

          <hr>


          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--close main area -->
@endsection

@section('js')
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function() {
    $('.select2').select2();
  });
</script>
@endsection