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
            <div class="col-sm-4"></div>

           @can('coupon-create')
            <div class="col-sm-4">
              <a href="{{ route('coupons.create') }}" class="btn btn-block btn-primary main-btn">Add Coupon</a>
            </div>
           @endcan
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">All Coupons</li>
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
                    <span class="tbl-head">Displaying {{$record->count()}} of {{ $record->total() }} coupon(s).</span> 

                    </div>
                    <div class="col-sm-6">
                    <form class="float-right" name="user_search" id="" method="get" action="{{ route('coupons.index')}}">
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
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>S.No</th>

                        <th style="text-align:center;">Sort </th>

                        <th>Image</th>
                        <th>Code / Deal</th>
                        <th style="text-align:center;">Title</th>
                        <th>Expire Coupon</th>
                        
                        <th style="text-align:center;">Type</th>
                        <th style="text-align:center;">Store Name</th>
                        <th style="text-align:center;">Updated</th>
                        <th width="150" style="text-align:center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @if ($record->count() == 0)
                    <tr>
                        <td colspan="6">No coupons to display.</td>
                    </tr>
                    @endif
                    
                    @if(!empty($record) && $record->count())
                    @php $no=1; @endphp
                      @foreach( $record as $coupon)
                        <tr>
                          <td>{{ $no++ }}</td>

                          <td style="text-align:center;">{{ $coupon->sort }}</td>

                          <td>
                            @if( !empty($coupon->image) )
                            <img width="50px" src="{{ url('/thumbnail/') }}/{{ $coupon->image }}" >
                            @else
                              &nbsp;&nbsp;
                            @endif
                          </td>

                          <td style="text-align:center;">{{ $coupon->coupon_code }}

                              @if( $coupon->code == 1)
                                <label class="badge badge-pill badge-success">Code</label>
                              @else
                              <label class="badge badge-pill badge-info">Deal</label>
                              @endif

                          </td>

                          <td style="text-align:center;">{!! Str::words( $coupon->title, 7, ' ...') !!}</td>
                          <td>{{ \Carbon\Carbon::parse($coupon->expire_date)->format('d-M-Y') }}
                          
                          @if ($coupon->expire_date < \Carbon\Carbon::now()->toDateString())
                          <label class="badge badge-danger">
                            Expired
                          </label>
                          @endif
                          
                          </td>
                          
                        <td style="text-align:center;">
                          @if( $coupon->featured == 1)
                            <label class="badge badge-pill badge-success">Featured</label>
                          @endif
    
                          @if( $coupon->latest == 1)
                            <label class="badge badge-pill badge-info">Latest</label>
                          @endif
                        </td>

                        <td style="text-align:center;">{{ $coupon->store_name }}</td>
                    
                        
                          <td style="text-align:center;">{{ $coupon->updated_at->format('d-m-Y H:i:s') }}</td>
                          <td width="150" style="text-align:center;">
                            @can('coupon-edit')
                            <a href="{{ route('coupons.edit', $coupon->id)}}" class="btn btn-primary tableaction">Edit</a>
                            @endcan
                            
                            @can('coupon-delete')
                              
                              <form class="tableaction" action="{{ route('coupons.destroy', $coupon->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger del-btn" onclick="return confirm('Are you sure to delete record?')" type="submit">Delete</button>
                              </form>

                              </td>
                              @endcan
                          </td>
                        </tr>
                      @endforeach
                    @endif

                    </tbody>
                  </table>

                  @if(!empty($record))
                    {!! $record->appends(Request::all())->links() !!}
                  @endif

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