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
              <a href="{{ route('contactus.home') }}" class="btn btn-block btn-primary">Contact Us</a>
            </div>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">View Contact Us</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!--main area -->
    <div class="container mt-4">
    
      <div class="card">    
        <div class="card-body">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data">
          <div class="row">

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="{{ $contact_us->name }}" class="form-control" required="required" readonly>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="{{ $contact_us->email }}" class="form-control" required="required" readonly>
            </div>

            <div class="form-group col-md-4 col-sm-4 col-lg-4 col-xs-4">
              <label for="created_at">Created At</label>
              <input type="text" name="created_at" id="created_at" class="form-control" value="{{ $contact_us->created_at }}" readonly>
            </div>

            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="subject">Subject</label>
              <input type="text" name="subject" id="subject" class="form-control" value="{{ $contact_us->subject }}" readonly>
            </div>    

            <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xs-12">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" id="message" cols="30" rows="10" readonly>{{ $contact_us->message }}</textarea>
            </div>            

          </div>
            <!--close row -->
          </form>
          <a href="{{ route('contactus.home') }}" class="btn btn-info">Back</a>
          <br>
          <br>
        </div>
      </div>
    </div>  
  </div> 
  <!--close main area -->    
@endsection