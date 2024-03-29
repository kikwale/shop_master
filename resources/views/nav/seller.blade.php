<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-info navbar-i" style="background-color:#27AAE1" >
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      {{-- <a href="index3.html" class="nav-link">Home</a> --}}
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      {{-- <a href="#" class="nav-link">Contact</a> --}}
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      {{-- <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"> --}}
      <div class="input-group-append">
        {{-- <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button> --}}
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">

          <p>{{__('message.language')}}</p>

        
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        {{-- <span class="dropdown-item dropdown-header">15 Notifications</span> --}}
        <div class="dropdown-divider"></div>
        <a href="en" class="dropdown-item">
         English
          {{-- <span class="float-right text-muted text-sm">3 mins</span> --}}
        </a>
        <div class="dropdown-divider"></div>
        <a href="sw" class="dropdown-item">
        Swahili
          {{-- <span class="float-right text-muted text-sm">12 hours</span> --}}
        </a>
        <div class="dropdown-divider"></div>
       

        {{-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-user text-white"></i>
        
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        {{-- <span class="dropdown-item dropdown-header">15 Notifications</span> --}}
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-user mr-2"></i> Profile
          {{-- <span class="float-right text-muted text-sm">3 mins</span> --}}
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-lock mr-2"></i>Change Password
          {{-- <span class="float-right text-muted text-sm">12 hours</span> --}}
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                               <i class="fa fa-sign-out" aria-hidden="true"></i>    {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>

        <div class="dropdown-divider"></div>
        {{-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
          class="fas fa-th-larg"></i></a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-prima elevation-4" style="background-color:#024263f1">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/bosy.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Seller Panel</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->fname}}</a>
        </div>
      </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color:#024263f1">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="home" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
         {{__('message.seller.dashboard')}}
            </p>
          </a>
         
        </li>
      
        <li class="nav-item has-treeview">
          <a href="seller_shop_workers?ower_id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
            {{-- <i class="nav-icon fas fa-users"></i> --}}
            <img src="dist/img/users-icon-01.png" alt="" srcset="">
            <p>
            {{__('message.seller.workers')}}
              {{-- <span class="badge badge-info right">6</span> --}}
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <img src="dist/img/sales-icon-01.png" alt="" srcset="">
            <p>
               {{__('message.seller.sales')}}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
          
            <li class="nav-item">
              <a href="seller_selling_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                Start Selling
              </a>
            </li>
            <li class="nav-item">
              <a href="seller-sold-product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sales</p>
              </a>
            </li>
            

          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            {{-- <i class="nav-icon fas fa-shopping-bag" aria-hidden="true"></i> --}}
            <img src="dist/img/receipt-icon-01.png" alt="" srcset="">
            <p>
               {{__('message.receipt')}}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
          
            <li class="nav-item">
              <a href="seller-receipt-data?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                Print Receipts
              </a>
            </li>
            <li class="nav-item">
              <a href="seller_printed_receipt?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Printed Receipts</p>
              </a>
            </li>

          </ul>
        </li>

        
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            {{-- <i class="nav-icon fas fa-store" ></i> --}}
            <img src="dist/img/product-icon-01.png" alt="" srcset="">
            <p>
                {{__('message.seller.product')}}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
          
            {{-- <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                Wholesale
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="seller_add_jumla_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="seller_view_jumla_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>view</p>
                  </a>
                </li>
              </ul>
            </li> --}}
         
            <li class="nav-item has-treeview">
              <a href="seller_add_rejareja_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                Register Product(s)
                </p>
              </a>
              {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="seller_add_rejareja_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="seller_view_rejareja_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>View</p>
                  </a>
                </li>
              </ul> --}}
            </li>

         

            {{-- <li class="nav-item">
              <a href="seller_finished_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Product Returned</p>
              </a>
            </li> --}}

            <li class="nav-item">
              <a href="seller_finished_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Finished Products</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="seller_store?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Store</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="seller_expired_product?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                 Expired Products
              </a>
            </li>
           

          </ul>
        </li>

      

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <img src="dist/img/order-icon-01.png" alt="" srcset="">
            {{-- <i class="nav-icon fas fa-store" ></i> --}}
            <p>
         {{__('message.seller.order')}}
              <i class="fas fa-angle-left right"></i>
              {{-- <span class="badge badge-info right">6</span> --}}
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="seller-place-order?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
              Place Order
              </a>
            </li>

            <li class="nav-item">
              <a href="seller-placed-order?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
              My Orders
              </a>
            </li>

            <li class="nav-item">
              <a href="seller-incoming-order?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Incoming Orders</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="seller-delivered-order?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Delivered Orders</p>
              </a>
            </li>

           
           
           
          </ul>
        </li>

        <li class="nav-item">
          <a href="seller-general-profile?id={{Session::get('owner_id')}}&&shop_id={{Session::get('shop_id')}}" class="nav-link">
              <i class="far fa-user nav-icon"></i>
           General Profile
          </a>
        </li>
        {{-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
           Farm Products
              <i class="fas fa-angle-left right"></i>
              {{-- <span class="badge badge-info right">6</span> 
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                 Add User
              </a>
            </li>
            <li class="nav-item">
              <a href="adminPrimary" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Users</p>
              </a>
            </li>
           
           
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
            Report
              <i class="fas fa-angle-left right"></i>
       
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                 Add User
              </a>
            </li>
            <li class="nav-item">
              <a href="adminPrimary" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Users</p>
              </a>
            </li> --}}
           
           
          {{-- </ul>
        </li>


        <li class="nav-item has-treeview">
          {{-- <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
             University Leaders
              <i class="fas fa-angle-left right"></i>
              {{-- <span class="badge badge-info right">6</span> --}}
            {{-- </p>
          </a>  --
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="selectLeader" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Select Leader</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="adminViewLeader" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View</p>
              </a>
            </li>
          
           
          </ul>
        </li> --}}
       
          
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>







