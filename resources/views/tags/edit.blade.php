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
              <a href="{{ route('tags.index') }}" class="btn btn-block btn-primary">View Tag</a>
            </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Edit Tag</li>
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
          <form name="add-tag" id="add-tag" method="post" enctype="multipart/form-data" action="{{ route('tags.update', $record->id) }}">
          @method('PATCH')
          @csrf
          <div class="row">

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $record->name }}" class="form-control" >
                @error('name')<div class="error">{{ $message }}</div>@enderror
              </div>


          </div>
          <!--close row -->
                
            @can('tag-edit')
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