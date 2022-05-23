<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link rel="icon" href="{{ asset('images/logo/logo salary.png') }}" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->

  <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/kanit_thai/index.css') }}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">

  @yield('style')
</head>

<body>
  {{-- @include('components.sidebar') --}}
  <div class="overlay"></div>
  @yield('content')

  <script src="{{ asset('bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/fontawesome/all.min.js') }}"></script>
  <script src="{{ asset('js/admin/main.js') }}"></script>
  
  @yield('script')

</body>

</html>
