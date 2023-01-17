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
              <a href="{{ route('satisfactions.index') }}" class="btn btn-block btn-primary">View Satisfaction</a>
            </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Edit Satisfaction</li>
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
          <form name="edit-satisfactions-post-form" id="edit-satisfactions-post-form" method="post" enctype="multipart/form-data" action="{{ route('satisfactions.update', $record->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="{{ $record->title }}" class="form-control" >
              @error('title')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="short_description">Short Description</label>
              <input type="text" id="short_description" name="short_description" value="{{ $record->short_description }}" class="form-control" >
              @error('short_description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="font_awsome">Font Awsome Class</label>
              <input type="text" id="font_awsome" name="font_awsome" value="{{ $record->font_awsome }}" class="form-control" >
              @error('font_awsome')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <div class="custom-control custom-switch">
              <input type="checkbox" name="status" {{ $record->status == 1 ? 'checked' : 'no' }} class="custom-control-input" id="customSwitch1">
              <label class="custom-control-label" for="customSwitch1">Show Customer Satisfaction</label>
              </div>
            </div>

          </div>
            <!--close row -->
                
            @can('customerSatisfaction-edit')
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

@endsection