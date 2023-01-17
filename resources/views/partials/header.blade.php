<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item push_menu">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        
      </li>
        
    </ul>

    <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto"> 
     
      <!-- <li>
        <a class="nav-link2" href="#" >
        <i class="fa fa-paste"></i>
          <span class="badge badge-danger navbar-badge">
            {{ isset($new_applications) ? $new_applications : 0 }}
          </span>
        </a>
      </li> -->
      
      <!-- Messages Dropdown Menu -->
       <li class="nav-item dropdown">
        
        <ul class="navbar-nav ms-auto">
            
            @guest
               
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-links" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <!-- <i class="fas fa-bars"></i> -->
                    <i class="fa fa-ellipsis-v"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <a class="dropdown-item" href="{{ url('/admin/settings')}}">
                            <span class="logout_icon">
                              <i class="fa fa-cogs" width="24" height="24"></i>
                            </span>
                                Settings
                        </a>
                      
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                        <span class="logout_icon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                        <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
                    </svg>
                      </span>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>

    </ul> 
  </nav>

  <!-- /.navbar -->

  