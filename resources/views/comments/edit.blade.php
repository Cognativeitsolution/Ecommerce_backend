@extends('layouts.admin')

@section('css')

<style>
.error{
  color:red;
}
</style>

<!-- CKEDITOR -->
<!-- <script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script> -->
<script src="https://cdn.tiny.cloud/1/1qvedc8bwtfg6jqsy6i3g4tbrb6ga00kvjep7zztfu5sxlt8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>

</script>
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
              <a href="{{ route('comments.index') }}" class="btn btn-block btn-primary">View Comments</a>
            </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Edit Comment</li>
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
          <form name="edit-comment-form" id="edit-comment-form" method="post" enctype="multipart/form-data" action="{{ route('old_comment', $record->id) }}">
          
          @csrf
          <div class="row">

            <div class="form-group">
              <label for="blog_name">Blog Name</label>
              <input type="text" id="name" name="blog_name" readonly value="{{ $record->blog->name }}" class="form-control" >
              
            </div>

            <div class="form-group">
              <label for="name">User Name</label>
              <input type="text" id="name" name="name" readonly value="{{ $record->name }}" class="form-control" >
              @error('name')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="email">User Email</label>
              <input type="text" id="email" readonly name="email" value="{{ $record->email }}" class="form-control" >
              @error('email')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" id="description" readonly name="description"  value="{{ $record->description }}" class="form-control" >
              @error('description')<div class="error">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
              <div class="custom-control custom-switch">
              <input type="checkbox" name="status" {{ $record->status == 1 ? 'checked' : 'no' }} class="custom-control-input" id="customSwitch1">
              <label class="custom-control-label" for="customSwitch1">Show Comment</label>
              </div>
            </div>

          </div>
            <!--close row -->
                
            
              <button type="submit" class="btn btn-primary">Update</button>
            
           
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