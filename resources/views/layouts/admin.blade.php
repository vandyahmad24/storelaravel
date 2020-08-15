<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>@yield('title')</title>
  @stack('preprend-style')
  @include('include.style')
  @stack('addon-style')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css"/>

</head>

<body>
  @include('include.dashboard-admin')
   <!-- content yah -->
        @yield('content')
        </div>
      </div>
    </div>
  </div>  

  <!-- Bootstrap core JavaScript -->
  @stack('preprend-script')
  @include('include.script')
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    })
  </script>
  @stack('addon-script')
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
</body>

</html>