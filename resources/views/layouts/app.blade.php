<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'LMS')</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"><!-- Include the compiled CSS file -->
  @vite('resources/css/app.css')
</head>

<body class="@yield('class', '')" id="@yield('id', '')">
  <!-- Page Wrapper -->
  @hasSection('content')
    @yield('content')
  @else
    <h1 class="text-center pt-5">Welcome from the main end point.</h1>
  @endif

  <!-- Include the compiled JS file -->
  @vite('resources/js/app.js')
</body>

</html>
