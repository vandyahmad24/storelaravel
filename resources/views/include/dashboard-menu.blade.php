<div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">
      <!-- sidebar -->
      <div class="border-right" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="/images/dashboard-store-logo.svg" class="mv-4" alt="">
        </div>
        <div class="list-group list-group-flush">
          <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }}" >Dashboard</a>
          <a href="{{route('dashboard-prdouct')}}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/product*')) ? 'active' : '' }}" active>My Product</a>
          <a href="{{route('dashboard-transaction')}}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/transaction*')) ? 'active' : '' }}">Transactions</a>
          <a href="{{route('dashboard-setting-store')}}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings*')) ? 'active' : '' }}">Store Setting</a>
          <a href="{{route('dashboard-setting-account')}}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/account*')) ? 'active' : '' }}">My Account</a>
           <a class="list-group-item list-group-item-action" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form1').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
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
                    Hi, {{Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu">
                    <a href="{{route('dashboard')}}" class="dropdown-item">
                      Dashboard
                    </a>
                    <a  href="{{route('dashboard-setting-account')}}" class="dropdown-item">
                      Setting
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="{{route('cart')}}" class="nav-link d-inline-block mt-2">
                  @php $carts = \App\Cart::where('users_id', Auth::user()->id)->count(); @endphp
                  @if($carts > 0)
                   <img src="/images/icon-cart-filled.svg" alt="" />
                   <div class="cart-badge">{{$carts}}</div>
                  @else
                  <img src="/images/icon-cart-empty.svg" alt="" />
                  @endif 
                </a>
                </li>
              </ul>
              <!-- end ddestkop menu -->
              <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    Hi, Vandy
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('cart')}}" class="nav-link d-inline-block">
                  @php $carts = \App\Cart::where('users_id', Auth::user()->id)->count(); @endphp
                  @if($carts > 0)
                   <img src="/images/icon-cart-filled.svg" alt="" />
                   <div class="cart-badge">{{$carts}}</div>
                  @else
                  <img src="/images/icon-cart-empty.svg" alt="" />
                  @endif 
                </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
       