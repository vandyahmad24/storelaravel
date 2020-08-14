<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  {{-- untuks tyle --}}
  @stack('preprend-style')
  @include('include.style')
  @stack('addon-style')

</head>

<body>
  {{-- ini navbar --}}
  @include('include.navbar')

  <!-- page content -->
  @yield('content')
  <!-- endpage content -->

  {{-- ini footer --}}
  @include('include.footer')
  <!-- Bootstrap core JavaScript -->
  {{-- untuk script --}}
  @stack('preprend-script')
  @include('include.script')
  @stack('addon-script')
</body>

</html>