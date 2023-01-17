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

           @can('customerSatisfaction-create')
            <div class="col-sm-4">
              <a href="{{ route('satisfactions.create') }}" class="btn btn-block btn-primary main-btn">Add Satisfaction</a>
            </div>
           @endcan
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">All Customer Satisfaction</li>
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
                    <span class="tbl-head">Displaying {{$record->count()}} of {{ $record->total() }} Customer Satisfaction(s).</span> 

                    </div>
                    <div class="col-sm-6">
                    <form class="float-right" name="user_search" id="" method="get" action="{{ route('satisfactions.index')}}">
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
                        <th style="text-align:center;">Title</th>
                        <th style="text-align:center;">Short Description</th>
                        <th style="text-align:center;">Font Awsome Class</th>
                        <th style="text-align:center;">Updated</th>
                        <th width="150" style="text-align:center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @if ($record->count() == 0)
                    <tr>
                        <td colspan="6">No Customer Satisfactions to display.</td>
                    </tr>
                    @endif
                    
                    @if(!empty($record) && $record->count())
                    @php $no=1; @endphp
                      @foreach( $record as $satisfaction)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td style="text-align:center;">{!! Str::words( $satisfaction->title, 3, ' ...') !!}</td>
                          <td style="text-align:center;">{!! Str::words( $satisfaction->short_description, 5, ' ...') !!}</td>
                          <td style="text-align:center;">{{ $satisfaction->font_awsome }}</td>

                          <td style="text-align:center;">{{ $satisfaction->updated_at->format('Y-m-d H:i:s') }}</td>
                          <td width="150" style="text-align:center;">
                            
                            @can('customerSatisfaction-edit')
                            <a href="{{ route('satisfactions.edit', $satisfaction->id)}}" class="btn btn-primary tableaction">Edit</a>
                            @endcan
                            
                            @can('customerSatisfaction-delete')
                              
                              <form class="tableaction" action="{{ route('satisfactions.destroy', $satisfaction->id)}}" method="post">
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