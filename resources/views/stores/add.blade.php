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
            <a href="{{ route('stores.index') }}" class="btn btn-block btn-primary">View Stores</a>
          </div>

        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Add Store</li>
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
        <form name="add-store" id="add-store" method="post" enctype="multipart/form-data" action="{{ route('stores.store')}}">
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

          <div class="form-group">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control">{{ old('long_description') }}</textarea>

            @error('long_description')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label>Select Related</label>
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

          <!-- <div class="form-group">
            <label for="banner_image">Banner Image</label>
            <input type="file" class="form-control" id="banner_image" name="banner_image" class="form-control">
            @error('banner_image')<div class="error">{{ $message }}</div>@enderror
          </div> -->

          <hr>
          
          <div style="display:none;">
          <h4>Select Type</h4>

            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" value=1 class="form-check-input" checked="checked" name="type">Store
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" value=2 class="form-check-input" name="type">Category
              </label>
            </div>

          </div>

          <hr>
          <h4>Top / Popular Section</h4>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="top" value=1>Top
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" name="popular" value=1>Popular
            </label>
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

@section('js')
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function() {
    $('.select2').select2();
  });
</script>
@endsection