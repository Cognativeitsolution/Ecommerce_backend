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
        <form name="edit-store-form" id="edit-store-form" method="post" enctype="multipart/form-data" action="{{ route('categories_stores.update', $record->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="{{ $record->name }}" class="form-control">
              @error('name')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="{{ $record->title }}" class="form-control">
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            
            <div class="form-group">
              <label>Select Stores</label>
              <select name="related_stores[]" class="form-control select2" multiple="multiple" data-placeholder="Select a related">

                @foreach($stores as $data)
                <option value={{ $data->id }} <?php if (in_array($data->id, $related_store_ids)) {
                                                echo 'selected';
                                              } ?>>{!! Str::words( $data->name, 5, ' ..') !!}</option>
                @endforeach

              </select>
            </div>

            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" class="form-control">
            </div>

            @if( !empty($record->image) )
            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <strong>Thumbnail Image </strong>
              <br />
              <img src="{{ url('/thumbnail/') }}/{{ $record->image }}">
            </div>
            @endif

            <hr>
            
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" name="popular" class="form-check-input" value=1 {{ $record->popular == 1 ? 'checked' : '' }}>Popular
              </label>
            </div>

            <hr>
            <h4>Status</h4>
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input type="checkbox" name="status" {{ $record->status == 1 ? 'checked' : 'no' }} class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Show</label>
              </div>
            </div>

          </div>
          <!--close row -->

          <hr>
          @can('store-edit')
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