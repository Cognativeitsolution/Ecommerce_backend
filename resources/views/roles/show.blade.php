@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <a href="{{ route('roles.index') }}" class="btn btn-block btn-primary">View Roles</a>
          </div>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Show Role</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="col-sm-12">
          <br>
          <h1>
            <b>Name:</b>
            {{ $role->name }}
          </h1>
          <br>
          <h5>Permissions:</h5>
          <p>
            @if(!empty($rolePermissions))
              @foreach($rolePermissions as $v)
                <label class="btn btn-info lbl">{{ $v->name }}, </label>                            
              @endforeach
            @endif
          </p>
          
      </div>
    </div>
  </div>
</div>
@endsection
