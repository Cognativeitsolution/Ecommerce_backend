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

           @can('store-create')
            <div class="col-sm-4">
              <a href="{{ route('categories_stores.create') }}" class="btn btn-block btn-primary main-btn">Add</a>
            </div>
           @endcan
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">All Categories</li>
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
                    <span class="tbl-head">Displaying {{$record->count()}} of {{ $record->total() }} categories.</span> 

                    </div>
                    <div class="col-sm-6">
                    <form class="float-right" name="user_search" id="" method="get" action="{{ route('categories_stores.index')}}">
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
                        <th>Image</th>
                        <th>Name</th>
                        <th  style="text-align:center;">Title</th>
                        <th style="text-align:center;">Type</th>

                        <th style="text-align:center;">Updated</th>
                        <th width="150" style="text-align:center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @if ($record->count() == 0)
                    <tr>
                        <td colspan="6">No categories to display.</td>
                    </tr>
                    @endif
                    
                    @if(!empty($record) && $record->count())
                    @php $no=1; @endphp
                      @foreach( $record as $category)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>
                            @if( !empty($category->image) )
                            <img width="40px" src="{{ url('/images/') }}/{{ $category->image }}" >
                            @else
                              &nbsp;&nbsp;
                            @endif
                          </td>

                          <td>{!! Str::words( $category->name, 4, ' ...') !!}</td>
                          <td  style="text-align:center;">{!! Str::words( $category->title, 4, ' ...') !!}</td>

                          <td style="text-align:center;">

                            @if( $category->popular == 1)
                            <label class="badge badge-pill badge-success">Popular</label>
                            @endif                            

                          </td>


                          <td style="text-align:center;">{{ $category->updated_at->format('Y-m-d H:i:s') }}</td>
                          <td width="150" style="text-align:center;">
                            @can('store-edit')
                            <a href="{{ route('categories_stores.edit', $category->id)}}" class="btn btn-primary tableaction">Edit</a>
                            @endcan
                            
                            @can('store-delete')
                              
                              <form class="tableaction" action="{{ route('categories_stores.destroy', $category->id)}}" method="post">
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