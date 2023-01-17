@extends('layouts.admin')

@section('css')
<style>
.error{
  color:red;
}

.career_file {
  text-align: center;
}

.career_file__link {
  color: #17a2b8;
  display: block;
  font-size: 2rem;
  width: fit-content;
  margin: 0 auto;
}
</style>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
              <a href="{{ route('careers.index') }}" class="btn btn-block btn-primary">View Applications</a>
            </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">View Application</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--main area -->
    <div class="container mt-4">
    
      <div class="card">    
        <div class="card-body">
          <form id="add-blog-post-form">
          <div class="row">

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="{{ $career->name }}" class="form-control" required="required" readonly>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="{{ $career->email }}" class="form-control" required="required" readonly>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="job_title">Job Title</label>
              <input type="text" name="job_title" id="job_title" class="form-control" value="{{ $career->job->title }}" readonly>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="phone_number">Phone Number</label>
              <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $career->phone_number }}" readonly>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="major_field">Major Field</label>
              <input type="text" name="major_field" id="major_field" class="form-control" value="{{ $career->major_field }}" readonly>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="degree">Degree</label>
              <input type="text" name="degree" id="degree" class="form-control" value="{{ $career->degree->name }}" readonly>
            </div>

            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="experience">Experience</label>
              <input type="text" name="experience" id="experience" class="form-control" value="{{ $career->experience->name }}" readonly>
            </div>
            
            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="details">Details</label>
              <textarea name="details" id="details" cols="30" rows="10" class="form-control" readonly>{{ $career->details }}</textarea>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="created_at">Applied On</label>
              <input type="text" name="created_at" id="created_at" class="form-control" value="{{ Carbon\Carbon::parse($career->created_at)->format('d M Y') }}" readonly>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4 career_file">
                <label for="resume">View Resume</label>
                <a href="{{ asset('files/' . $career->resume) }}" target="_blank" class="career_file__link">
                  <i class="fa-regular fa-file-pdf"></i>
                </a>
            </div>

            @if (!empty($career->profile_link))
              <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4 career_file">
                <label for="portfolio">View Portfolio</label>
                <a href="{{ $career->profile_link }}" target="_blank" class="career_file__link">
                <i class="fa-solid fa-graduation-cap"></i>
                </a>
              </div>
            @endif

          </div>
            <!--close row -->
          </form>
          <a href="{{ route('careers.index') }}" class="btn btn-info">Back</a>
          <br>
          <br>
        </div>
      </div>
    </div>  
  </div> 
  <!--close main area -->    
@endsection