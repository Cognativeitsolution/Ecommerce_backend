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

           
            <div class="col-sm-4">
              <!--<a href="{{ route('settings.create') }}" class="btn btn-block btn-primary">Add Setting</a>-->
            </div>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item">All Settings</li>
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
                    
                    </div>
                    <div class="col-sm-6">
                    <form class="float-right" name="user_search" id="" method="get" action="{{ route('settings.index')}}">
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
                        <th>ID</th>
                        <th>Email</th>
                        <th style="text-align:center;">Contact</th>
                        <th style="text-align:center;">WhatsApp Contact</th>
                        <th style="text-align:center;">Created</th>
                        <th style="text-align:center;">Updated</th>
                        <th width="150" style="text-align:center;">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @if ($record->count() == 0)
                    <tr>
                        <td colspan="6">No settings to display.</td>
                    </tr>
                    @endif
                    
                    @if(!empty($record) && $record->count())
                      @foreach( $record as $setting)
                        <tr>
                          <td>{{ $setting->id }}</td>
                          <td>{{ $setting->contact_email }}</td>
                          <td style="text-align:center;">{{ $setting->contact_number }}</td>
                          <td style="text-align:center;">{{ $setting->contact_whatsapp }}</td>
                        
                          <td style="text-align:center;">{{ $setting->created_at->format('Y-m-d H:i:s') }}</td>
                          <td style="text-align:center;">{{ $setting->updated_at->format('Y-m-d H:i:s') }}</td>
                          <td width="150" style="text-align:center;">
                            @can('setting-edit')
                            <a href="{{ route('settings.show', $setting->id)}}" class="btn btn-info">Show</a>
                            <a href="{{ route('settings.edit', $setting->id)}}" class="btn btn-primary">Edit</a>
                            @endcan
                            
                            @can('setting-delete')
                              <!--<td>
                              <form action="{{ route('settings.destroy', $setting->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure to delete record?')" type="submit">Delete</button>
                              </form>

                              </td>-->
                              @endcan
                          </td>
                        </tr>
                      @endforeach
                    @endif

                    </tbody>
                  </table>
                  

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