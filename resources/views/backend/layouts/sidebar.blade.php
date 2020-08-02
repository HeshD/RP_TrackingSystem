
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{('/img/logo1.png')}}" alt="SL Post Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SL Post</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{('website/backend/dist/img/user2-160x160.jpg')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @can('isAdmin') 

          <li class="nav-item has-treeview">
            <a href="/dashboard" class="nav-link active">
            <i class="fas fa-tachometer-alt"></i>              
            <p>
                Dashboard
                <i class="right fas fa-angle"></i>
              </p>
            </a>   
            @endcan 
            @can('isAdmin') 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
            <i class="fas fa-user"></i>              
            <p>
                Manage Accounts
                <i class="right fas fa-angle"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/addpm" class="nav-link active">
                <i class="fas fa-user-plus"></i>
 
                  <p>
                    Add Post Master
                  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/deletepm" class="nav-link active">
                <i class="fas fa-user-times"></i>
 
                  <p>
                    Delete Post Master
                  
                  </p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="/editpm" class="nav-link active">
                <i class="fas fa-user-edit"></i>
 
                  <p>
                    Update Post Master
                  
                  </p>
                </a>
              </li>
             
             </ul>
            </li>
            @endcan
          
           
            @can('isAdmin') 

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link active">
                <i class="fas fa-building"></i>              
                  <p>
                    Manage Branches
                    <i class="right fas fa-angle"></i>
                  </p>
                </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/add_branch" class="nav-link active">
                <i class="fas fa-building"></i>
                  <p>Add Branch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/addpm" class="nav-link active">
                <i class="fas fa-minus-circle"></i>
 
                  <p>
                    Delete Branch
                  
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/brdetails" class="nav-link active">
                <i class="fas fa-wrench"></i>
 
                  <p>
                    Update Branch
                  
                  </p>
                </a>
              </li>
             </ul>
            </li>
            
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link active">
                <i class="fas fa-chart-bar"></i>              
                  <p>
                    View Reports
                  </p>
              </a>
          </li>
          @endcan
          @can('isCustomer') 

          <li class="nav-item has-treeview">
              <a href="/d_req" class="nav-link active">
              <i class="fa fa-address-card" aria-hidden="true"></i>
                  <p>
                    Place Delivery Request
                  </p>
              </a>
          </li>
          <li class="nav-item has-treeview">
              <a href="/calculator" class="nav-link active">
                <i class="fa fa-calculator" aria-hidden="true"></i>              
                  <p>
                    Postage Calculator
                  </p>
              </a>

          @endcan
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-cog" aria-hidden="true""></i>
              <p>
                Settings
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          
     
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          
               
              
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            
              <i class="fas fa-sign-out-alt text-danger"></i>
                <p>
                    Sign out
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  