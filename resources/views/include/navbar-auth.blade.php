 <!-- start nav -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="{{route('home')}}">
        <img src="/images/logo.svg" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="{{route('home')}}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{route('category')}}" class="nav-link">Categories</a>
          </li>
          <li class="nav-item">
            <a href="/index.html" class="nav-link">Rewards</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav -->