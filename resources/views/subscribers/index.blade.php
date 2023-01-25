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
              <li class="breadcrumb-item">Subscribers</li>
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
                        <span class="tbl-head"> Displaying {{$record->count()}} of {{ $record->total() }} subscriber(s).</span>
                    </div>
                    <div class="col-sm-6">
                    <form class="float-right" name="user_search" id="" method="get" action="{{ route('subscribers.index')}}">
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
                    
                <form  method="post" enctype="multipart/form-data" action="{{ route('subscribers.multi_delete')}}">
                @csrf
                    
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        @can('subscriber-delete')   
                            <th><input type="checkbox"  class="cboxAll" ></th>
                        @endcan
                        <th>S.No</th>
                        <th style="text-align:center;">Email</th>
                        <th style="text-align:center;">Created</th>
                        <th width="100">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @if ($record->count() == 0)
                    <tr>
                        <td colspan="100%">No subscriber to display.</td>
                    </tr>
                    @endif
                    
                    @if(!empty($record) && $record->count())
                    @php $no=1; @endphp
                      @foreach( $record as $subscriber)
                        <tr>
                          @can('subscriber-delete')   
                          <td><input type="checkbox" name="ids[]" class="cbox" value="{{ $subscriber->id }}"></td>
                          @endcan
                          
                          <td>{{ $no++ }}</td>
                          <td style="text-align:center;">{{ $subscriber->email }}</td>
                          <td width="100" style="text-align:center;">{{ $subscriber->created_at->format('Y-m-d H:i:s') }}</td>
                          <td width="150" style="text-align:center;float:right;">
                            @can('subscriber-edit')                         
                            <a href="{{ route('subscribers.show', $subscriber->id) }}" class="btn btn-info tableaction">Show</a>  
                            @endcan
                          
                          </td>
                        </tr>
                      @endforeach
                    @endif

                    </tbody>
                  </table>
                <div class="col-sm-12">
                    @can('subscriber-delete')   
                    <button type="submit" class="btn btn-danger btnChk" style="margin:15px; 0px;">Bulk Delete</button>
                    @endcan
                  <div class="float-right">
                    <p>
                      @if(!empty($record))
                        {!! $record->appends(Request::all())->links() !!}
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