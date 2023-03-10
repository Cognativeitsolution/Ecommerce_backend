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
            <a href="{{ route('admins.index') }}" class="btn btn-block btn-primary">View Admins</a>
          </div>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item">Add Admin</li>
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
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('admins.store')}}">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="name" id="name" name="name" value="{{ old('name') }}" class="form-control" required="">
            @error('name')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required="">
            @error('email')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required="">
            @error('password')<div class="error">{{ $message }}</div>@enderror
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Role:</strong>
              {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
              @error('roles')<div class="error">{{ $message }}</div>@enderror
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!--close main area -->
</div>



@endsection