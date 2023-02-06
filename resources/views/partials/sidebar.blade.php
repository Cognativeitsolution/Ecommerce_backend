@section('css')
  
@endsection

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar_close-container" id="close_btn">
    <i class="fas fa-times-circle"></i>
    </div>

    <!-- Brand Logo -->
    <a href="{{ url('/admin/home') }}" class="brand-link">
      <img src="{{ asset('images/logowhite.png') }}" alt="Admin Panel Logo" class="brand-image" >
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image user_image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          <a href="#" class="d-block user_info">{{ Auth::user()->name }}</a>
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview menu-open">

            <li class="nav-item">
                <a href="{{ url('/admin/home') }}" class="nav-link {{ Request::is('admin/home') ? 'active' : '' }}">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              @can('role-list')
              <li class="nav-item">
                <a href="{{ url('/admin/roles') }}" class="nav-link {{ Request::is('admin/roles') ? 'active' : '' }}">
                  <i class="fa fa-arrows-alt nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              @endcan

              @can('admin-list')
              <li class="nav-item">
                <a href="{{ url('/admin/admins') }}" class="nav-link {{ Request::is('admin/admins') ? 'active' : '' }}">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Admins</p>
                </a>
              </li>
              @endcan

              <!-- user-list can permission -->
              <!-- <li class="nav-item">
                <a href="{{ url('/admin/users') }}" class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Users</p>
                </a>
              </li> -->
              

              @can('subscriber-list')
              <li class="nav-item">
                <a href="{{ url('admin/subscribers') }}" class="nav-link {{ Request::is('admin/subscribers') ? 'active' : '' }}">
                  <i class="fa fa-bell nav-icon"></i>
                  <p>Subscribers</p>
                </a>
              </li>
              @endcan   
              
              @can('contact-list')
              <li class="nav-item">
                <a href="{{ route('contactus.home') }}" class="nav-link {{ Request::is('admin/contact_us') ? 'active' : '' }}">
                  <i class="fa fa-envelope nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>
              @endcan    

              @can('slider-list')
              <li class="nav-item">
                <a href="{{ url('/admin/sliders')}}" class="nav-link {{ Request::is('admin/sliders') ? 'active' : '' }}">
                  <i class="fa fa-newspaper nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              @endcan

              @can('store-list')
              <li class="nav-item">
                <a href="{{ url('/admin/stores')}}" class="nav-link {{ Request::is('admin/stores') ? 'active' : '' }}">
                  <i class="fa fa-shopping-cart nav-icon"></i>
                  <p>Stores</p>
                </a>
              </li>
              @endcan

              @can('coupon-list')
              <li class="nav-item">
                <a href="{{ url('/admin/coupons')}}" class="nav-link {{ Request::is('admin/coupons') ? 'active' : '' }}">
                  <i class="fa fa-book nav-icon"></i>
                  <p>Coupons</p>
                </a>
              </li>
              @endcan

              @can('tag-list')
              <li class="nav-item">
                <a href="{{ url('/admin/tags')}}" class="nav-link {{ Request::is('admin/tags') ? 'active' : '' }}">
                  <i class="fa fa-tags nav-icon"></i>
                  <p>Tags</p>
                </a>
              </li>
              @endcan

              @can('blog-list')
              <li class="nav-item">
                <a href="{{ url('/admin/blogs')}}" class="nav-link {{ Request::is('admin/blogs') ? 'active' : '' }}">
                  <i class="fa fa-cubes nav-icon"></i>
                  <p>Blogs</p>
                </a>
              </li>
              @endcan

              @can('comment-list')
              <li class="nav-item">
                <a href="{{ url('/admin/comments')}}" class="nav-link {{ Request::is('admin/comments') ? 'active' : '' }}">
                  <i class="fa fa-newspaper nav-icon"></i>
                  <p>Comments</p>
                </a>
              </li>
              @endcan
             
              @can('page-list')
              <li class="nav-item">
                <a href="{{ url('/admin/pages')}}" class="nav-link {{ Request::is('admin/pages') ? 'active' : '' }}">
                  <i class="fa fa-file nav-icon"></i>
                  <p>Pages</p>
                </a>
              </li>
              @endcan

              @can('service-list')
              <li class="nav-item">
                <a href="{{ url('/admin/services')}}" class="nav-link {{ Request::is('admin/services') ? 'active' : '' }}">
                  <i class="fa fa-cog nav-icon"></i>
                  <p>Services</p>
                </a>
              </li>
              @endcan

              @can('setting-list')
              <li class="nav-item">
                <a href="{{ url('/admin/settings')}}" class="nav-link {{ Request::is('admin/settings') ? 'active' : '' }}">
                  <i class="fa fa-cogs nav-icon"></i>
                  <p>Settings</p>
                </a>
              </li>
              @endcan
              

          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

