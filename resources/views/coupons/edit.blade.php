@extends('layouts.admin')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('plugins/datepicker/css/date.css') }}" type="text/css"> -->
<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
            <a href="{{ route('coupons.index') }}" class="btn btn-block btn-primary">View Coupons</a>
          </div>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Edit Coupon</li>
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
        <form name="edit-coupon-form" id="edit-coupon-form" method="post" enctype="multipart/form-data" action="{{ route('coupons.update', $record->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="{{ $record->title }}" class="form-control">
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="coupon_code">Coupon Code</label>
              <input type="text" id="coupon_code" name="coupon_code" value="{{ $record->coupon_code }}" class="form-control">
              @error('coupon_code')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="short_description">Short Description</label>
              <input type="text" id="short_description" name="short_description" value="{{ $record->short_description }}" class="form-control">
              @error('short_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="long_description">Long Description</label>
              <textarea name="long_description" id="long_description" cols="30" rows="10" class="form-control">{{ $record->long_description }}</textarea>

              @error('long_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label>Select Store / Category</label>
              <select name="store_id" class="form-control" data-placeholder="Select here ...">

                @foreach($stores as $data)
                <option value={{ $data->id }} <?php if ($data->id == $record->store_id) {
                                                echo "selected";
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

            <div class="form-group">
              <label for="banner_image">Banner Image</label>
              <input type="file" class="form-control" id="banner_image" name="banner_image" class="form-control">
            </div>

            @if( !empty($record->banner_image) )
            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <strong>Thumbnail Banner Image </strong>
              <br />
              <img src="{{ url('/thumbnail/') }}/{{ $record->banner_image }}">
            </div>
            @endif

            <div class="form-group">
              <label for="start_date">Start Date</label>
              <input class="form-control datepicker" id="start_date" name="start_date" value="{{ date('m/d/Y', strtotime( $record->start_date )) }}" class="form-control" require="required">
              @error('start_date')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="expire_date">Expire Date</label>
              <input class="form-control datepicker2" id="expire_date" name="expire_date" value="{{ date('m/d/Y', strtotime( $record->expire_date )) }}" class="form-control" require="required">
              @error('expire_date')<div class="error">{{ $message }}</div>@enderror
            </div>

            <hr>
            <div class="form-group">
              <label for="redirect_site_name">Redirect Site Name</label>
              <input type="text" id="redirect_site_name" name="redirect_site_name" value="{{ $record->redirect_site_name }}" class="form-control">
              @error('redirect_site_name')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="redirect_site_url">Redirect Site URL</label>
              <input type="text" id="redirect_site_url" name="redirect_site_url" value="{{ $record->redirect_site_url }}" class="form-control">
              @error('redirect_site_url')<div class="error">{{ $message }}</div>@enderror
            </div>

            <hr>
            <h4>Select Code / Deal</h4>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" {{ $record->code == 1 ? 'checked' : '' }} value=1 class="form-check-input" name="code">Code
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" {{ $record->code == 0 ? 'checked' : '' }} value=0 class="form-check-input" name="code">Deal
              </label>
            </div>

            <hr>
            <h5>Featured Coupon</h5>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" {{ $record->featured == 1 ? 'checked' : '' }} name="featured" value=1>&nbsp; Yes
              </label>
            </div>

            <hr>
            <h5>Latest Coupon</h5>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" {{ $record->latest == 1 ? 'checked' : '' }} name="latest" value=1>&nbsp; Yes
              </label>
            </div>


          </div>
          <hr>

          @can('coupon-edit')
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

</div>
@endsection

@section('js')

<script src="{{ asset('plugins/datepicker/js/date.js') }}" type="text/javascript"></script>
<script>
  $('.datepicker').datepicker({
    uiLibrary: 'bootstrap4'
  });

  $('.datepicker2').datepicker({
    uiLibrary: 'bootstrap4'
  });
</script>
@endsection