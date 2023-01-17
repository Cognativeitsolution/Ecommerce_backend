@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          
          @if (session('success'))
              <div class="alert alert-success" role="alert">
                  <strong>Success!</strong> {{ session('success') }}
              </div>
          @endif
                    
        <div class="row mb-2">

          <div class="col-sm-6">           
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">Contact Us</li>
            </ol>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="tbl-head"> Displaying {{$contact_us->count()}} of {{ $contact_us->total() }} contact(s).</span>
                    </div>
                    <div class="col-sm-6">
                    <form class="float-right" name="user_search" id="" method="get" action="{{ route('contactus.home')}}">
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 250px;">
                      <input type="text" name="search" class="form-control float-right" placeholder="{{ app('request')->input('search') }} Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
                    </div>
                  </div>
                  


                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    
                <form  method="post" enctype="multipart/form-data" action="{{ route('contactus.multi_delete')}}">
                @csrf
                    
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        @can('contact-delete')   
                        <th><input type="checkbox"  class="cboxAll" ></th>
                        @endcan
                        <th>S.No</th>
                        <th>Name</th>
                        <th style="text-align:center;">Email</th>
                        <th style="text-align:center;">Message</th>
                        <th style="text-align:center;">Created</th>
                        <th width="100">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @if ($contact_us->count() == 0)
                    <tr>
                        <td colspan="6">No contact us to display.</td>
                    </tr>
                    @endif
                    
                    @if(!empty($contact_us) && $contact_us->count())
                    @php $no=1; @endphp
                      @foreach( $contact_us as $contact)
                        <tr>
                          @can('contact-delete')   
                          <td><input type="checkbox" name="ids[]" class="cbox" value="{{ $contact->id }}"></td>
                          @endcan
                          
                          <td>{{ $no++ }}</td>
                          <td>{{ $contact->name }}</td>
                          <td style="text-align:center;">{{ $contact->email }}</td>
                          <td style="text-align:center;">
                              {{ Str::of( $contact->message )->limit(30) }}
                          </td>                        
                          <td width="100" style="text-align:center;">{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                          <td width="150" style="text-align:center;float:right;">
                            @can('contact-edit')                         
                            <a href="{{ route('contactus.show', $contact->id) }}" class="btn btn-info tableaction">Show</a>  
                            @endcan
                          
                          </td>
                        </tr>
                      @endforeach
                    @endif

                    </tbody>
                  </table>
                <div class="col-sm-12">
                    @can('contact-delete')   
                    <button type="submit" class="btn btn-danger btnChk" style="margin:15px; 0px;">Bulk Delete</button>
                    @endcan
                  <div class="float-right">
                    <p>
                      @if(!empty($contact_us))
                        {!! $contact_us->appends(Request::all())->links() !!}
                      @endif
                    </p>
                  </div>
                </div>  
                
                </form> 

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
      <!-- /.content -->
      
      </div>
      </section>
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('js')
<script>
var chk = 1;
$(document).ready(function(){
  $(".cboxAll").click(function(){
    if($('.cboxAll').prop('checked')) {
        $('.cbox').prop('checked',true);
    }else{
        $('.cbox').prop('checked',false);
    }
    checking();
  });

  $(".btnChk").click(function(){
    if(chk==0) {
      return confirm('Are you sure to delete record?');
    }else{
      return false;
    }
  });

  $(".cbox").click(function(){
    if ($('.cbox:checked').length == $('.abc').length) {
      chk=1;
    }else{
      chk=0;
    }
    
  });

});

function checking(){
  if($('.cbox:checked').length == $('.abc').length) {
      chk=1;
    }else{
      chk=0;
  }
}

</script>
@endsection