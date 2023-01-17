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

            @can('user-create')
            <div class="col-sm-4">
              <a href="{{ route('users.create') }}" class="btn btn-block btn-primary">Add User</a>
            </div>
            @endcan
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">All Users</li>
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
                  <!--<h3 class="card-title">Responsive Hover Table</h3>-->
                  <div class="row">
                    <div class="col-sm-6">
                    <span class="tbl-head"> Displaying {{$users->count()}} of {{ $users->total() }} user(s).</span>
                    </div>
                    <div class="col-sm-6">
                    <form class="float-right" name="user_search" id="" method="get" action="{{ route('users.index')}}">
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @if ($users->count() == 0)
                    <tr>
                        <td colspan="6" style="text-align:center;">No users to display.</td>
                    </tr>
                    @endif
                    
                    @if(!empty($users) && $users->count())
                    @php $no = 1; @endphp
                      @foreach( $users as $user)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                            <?php if($user->email_verified_at){ ?>
                              <label class='badge badge-success table-badge'>Active</label>
                              <?php }else{ ?>
                              <label class='badge badge-danger table-badge'>InActive</label>
                              <?php } ?>
                          </td>
                          <td>{{ $user->created_diff }}</td>
                          <td>{{ $user->updated_at->format('Y-m-d H:i:s') }}</td>
                          <td>
                            @can('user-edit')
                            <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary tableaction">Edit</a>
                            @endcan
                            
                            @can('user-delete')
                              <form action="{{ route('users.destroy', $user->id)}}" style="display: inline;" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger del-btn" onclick="return confirm('Are you sure to delete record?')" type="submit">Delete</button>
                              </form>
                              @endcan
                          </td>
                        </tr>
                      @endforeach
                    @endif

                    </tbody>
                  </table>
                  
                  {!! $users->appends(Request::all())->links() !!}

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