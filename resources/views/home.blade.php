@extends('layouts.admin')

@section('css')

@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
              <span class="text-dark-main">Hi, Welcome back!</span>
              <span class="text-dark-sub">
              <span class="dash-icon"><i class="fa fa-home"></i></span>
              Dashboard</span>
            </h1>

            @if(Session::has('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Hello!</strong> {{Session::get('error')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif


          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Admin Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->

        <div class="row">


          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{ url('/admin/blogs')}}">
              <div class="info-box service-info">
              <span class="info-box-icon bg-maroon elevation-1"><i class="fas fa-cubes"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Blogs</span>
                <span class="info-box-number">
                  {{ isset($blogs_count) ? $blogs_count : 50 }}
                </span>
              </div>
            </div>
            </a>
          </div>
          
          
          <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/comments')}}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-comments"></i></span>
              <div class="info-box-content career-info">
                <span class="info-box-text">Comments</span>
                <span class="info-box-number">
                  {{ isset($comments_count) ? $comments_count : 50 }}
                </span>
              </div>
            </div>
          </a>
          </div>
          

          <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/stores') }}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1 job-info"><i class="fa fa-building"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Stores</span>
                <span class="info-box-number">
                {{ isset($stores_count) ? $stores_count : 50 }}
                </span>
              </div>
            </div>
          </a>
          </div>

          
          <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/coupons')}}">
            <div class="info-box mb-3">
            
              <span class="info-box-icon bg-purple elevation-1"><i class="fa fa-newspaper"></i></span>

              <div class="info-box-content user-info">
                <span class="info-box-text">Coupons</span>
                <span class="info-box-number">
                {{ isset($coupons_count) ? $coupons_count : 50 }}
                </span>
              </div>
            </div>
            </a>
          </div>
             
        </div>
        
      </div>
    </section>
    
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('js')

@endsection