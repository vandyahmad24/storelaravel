<div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
      <!-- sidebar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="/images/admin.png" class="mv-4" style="max-width: 150px;" alt="">
        </div>
        <div class="list-group list-group-flush">
          <a href="{{route('admin-dashboard')}}" class="list-group-item list-group-item-action">Dashboard</a>
          <a href="{{route('category.index')}}" class="list-group-item list-group-item-action {{ (request()->is('admin/category')) ? 'active' : '' }} ">Categories</a>
          <a href="{{route('dashboard-prdouct')}}" class="list-group-item list-group-item-action ">Product</a>
          <a href="{{route('dashboard-transaction')}}" class="list-group-item list-group-item-action ">Transactions</a>
          <a href="{{route('dashboard-setting-store')}}" class="list-group-item list-group-item-action ">Users</a>
          <a href="{{route('dashboard-setting-account')}}" class="list-group-item list-group-item-action ">My Account</a>
          <a href="/index.html" class="list-group-item list-group-item-action ">Sign Out</a>
        </div>
      </div>
      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light navbar-dashboard fixed-top" data-aos="fade-down">
          <div class="container-fluid">
            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
              &laquo; Menu
            </button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- destkop menu -->
              <ul class="navbar-nav d-none d-lg-flex ml-auto">
                <li class="nav-item dropdown">
                  <a href="" class="nav-link" id="navbar-dropdown" role="button" data-toggle="dropdown">
                    <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture">
                    Hi, Vandy
                  </a>
                  <div class="dropdown-menu">
                    <a href="/dashboard.html" class="dropdown-item">
                      Dashboard
                    </a>
                    <a href="/dashboard-account.html" class="dropdown-item">
                      Setting
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="/" class="dropdown-item">
                      Logout
                    </a>
                  </div>
                </li>
              </ul>
              <!-- end ddestkop menu -->
              <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    Hi, Vandy
                  </a>
                </li>
               
              </ul>
            </div>
          </div>
        </nav>
       