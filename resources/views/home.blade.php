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


          <!-- <div class="col-12 col-sm-6 col-md-3">
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
          </div> -->
          
          
          <!-- <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/users')}}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content career-info">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">
                  {{ isset($users_count) ? $users_count : 50 }}  
                </span>
              </div>
            </div>
          </a>
          </div> -->
          

          <!-- <div class="col-12 col-sm-6 col-md-3">
          <a href="#">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1 job-info"><i class="fa fa-paste"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Applications</span>
                <span class="info-box-number">
                  {{ isset($applications_count) ? $applications_count : 50 }} 
                </span>
              </div>
            </div>
          </a>
          </div> -->

          
          <!-- <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/sliders')}}">
            <div class="info-box mb-3">
            
              <span class="info-box-icon bg-purple elevation-1"><i class="fa fa-newspaper"></i></span>

              <div class="info-box-content user-info">
                <span class="info-box-text">Sliders</span>
                <span class="info-box-number">
                  {{ isset($sliders_count) ? $sliders_count : 50 }}   
                </span>
              </div>
            </div>
            </a>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/core_services')}}">
            <div class="info-box mb-3">
            
              <span class="info-box-icon bg-teal elevation-1"><i class="fa fa-spinner"></i></span>

              <div class="info-box-content user-info">
                <span class="info-box-text">Core Services</span>
                <span class="info-box-number">
                  {{ isset($coreServices_count) ? $coreServices_count : 50 }}
                </span>
              </div>
            </div>
            </a>
          </div> -->

 
          <!-- <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/pages')}}">
            <div class="info-box mb-3">
            
              <span class="info-box-icon bg-navy elevation-1"><i class="fa fa-file"></i></span>

              <div class="info-box-content user-info">
                <span class="info-box-text">Pages</span>
                <span class="info-box-number">
                  {{ isset($pages_count) ? $pages_count : 50 }}
                </span>
              </div>
              
            </div>
            </a>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/jobs')}}">
            <div class="info-box mb-3">
            
              <span class="info-box-icon bg-pink elevation-1"><i class="fa fa-briefcase"></i></span>

              <div class="info-box-content user-info">
                <span class="info-box-text">Jobs</span>
                <span class="info-box-number">
                  {{ isset($jobs_count) ? $jobs_count : 50 }}
                </span>
              </div>
            </div>
            </a>
          </div> -->


          <!-- <div class="col-12 col-sm-6 col-md-3">
          <a href="{{ url('/admin/our_clients')}}">
            <div class="info-box mb-3">
            
              <span class="info-box-icon bg-lightblue elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content user-info">
                <span class="info-box-text">Our Clients</span>
                <span class="info-box-number">
                  {{ isset($ourClients_count) ? $ourClients_count : 50 }}
                </span>
              </div>
            </div>
            </a>
          </div> -->
          
             
        </div>
        
        
      </div>
    </section>
    
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('js')

@endsection