<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('assets/site-images/favicon.png') }}" />
        <title>Home Page | Magnus Galaxy</title>
        <link href="https://fonts.gstatic.com" crossorigin="crossorigin" rel="preconnect" />
        <link as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="preload"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"/>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        @livewireStyles
    </head>
<body  x-data="global()" x-init="themeInit()" :class="isMobileMenuOpen ? 'max-h-screen overflow-hidden relative' : ''" class="dark:bg-primary">
    <div id="main">
        <div class="container mx-auto">
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
  @livewireScripts
</body>
</html>