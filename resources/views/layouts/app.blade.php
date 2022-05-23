<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <link rel="icon" href="{{ asset('image/logo/logo salary.png') }}" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>

 
  @yield('style')
</head>

<body>

  @yield('content')

 


  @yield('script')

</body>

</html>
