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
              <a href="{{ route('settings.index') }}" class="btn btn-block btn-primary">View Setting</a>
            </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Edit Setting</li>
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

      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
      @endif
    
      <div class="card">    
        <div class="card-body">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data">
          <div class="row">

            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <label for="contact_email">Contact Email</label>
              <input type="email" id="contact_email" name="contact_email" value="{{ $record->contact_email }}" class="form-control" required="required" readonly>
              @error('contact_email')<div class="error">{{ $message }}</div>@enderror
            </div>
          

            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <label for="contact_number">Contact Number</label>
              <input type="text" id="contact_number" name="contact_number" value="{{ $record->contact_number }}" class="form-control" required="required" readonly>
              @error('contact_number')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <label for="instagram_account_link">Instagram URL</label>
              <input type="text" id="instagram_account_link" name="instagram_account_link" value="{{ $record->instagram_account_link }}" class="form-control" readonly>
              @error('instagram_account_link')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <label for="facebook_account_link">Facebook URL</label>
              <input type="text" id="facebook_account_link" name="facebook_account_link" value="{{ $record->facebook_account_link }}" class="form-control" readonly>
              @error('facebook_account_link')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <label for="google_plus_account_link">Google Plus URL</label>
              <input type="text" id="google_plus_account_link" name="google_plus_account_link" value="{{ $record->google_plus_account_link }}" class="form-control" readonly>
              @error('google_plus_account_link')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <label for="pinterest_account_link">Pinterest URL</label>
              <input type="text" id="pinterest_account_link" name="pinterest_account_link" value="{{ $record->pinterest_account_link }}" class="form-control" readonly>
              @error('pinterest_account_link')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="location_address">Front Website Address Text</label>
              <input type="text" id="location_address" name="location_address" value="{{ $record->location_address }}" class="form-control" readonly>
              @error('location_address')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="footer_text">Footer Text</label>
              <input type="text" id="footer_text" name="footer_text" value="{{ $record->footer_text }}" class="form-control" readonly>
              @error('footer_text')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="title">Home Page Title</label>
              <input type="text" id="title" name="title" value="{{ $record->title }}" class="form-control" readonly>
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="keywords">Home Page Keywords</label>
              <input type="text" id="keywords" name="keywords" value="{{ $record->keywords }}" class="form-control" readonly>
              @error('keywords')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="description">Home Page Description</label>
              <input type="text" id="description" name="description" value="{{ $record->description }}" class="form-control" readonly>
              @error('description')<div class="error">{{ $message }}</div>@enderror
            </div>

              @if( !empty($record->header_logo) )
              <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-6">
                <strong>Thumbnail Header Logo </strong>
                <br/>
                <img src="{{ asset('images/' . $record->header_logo) }}" width="150px;">
              </div>
              @endif

              @if( !empty($record->footer_logo) )
              <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-6">
                <strong>Thumbnail Footer Logo </strong>
                <br/>
                <img src="{{ asset('images/' . $record->footer_logo) }}" width="150px;">
              </div>
              @endif

              @if( !empty($record->favicon) )
              <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-6">
                <strong>Thumbnail Favicon </strong>
                <br/>
                <img src="{{ asset('images/' . $record->favicon) }}" width="120px;">
              </div>
              @endif


            </div>
            <!--close row -->
          </form>
          <a href="{{ route('settings.index') }}" class="btn btn-info">Back</a>
          <br>
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
  <!--close main area -->    
@endsection