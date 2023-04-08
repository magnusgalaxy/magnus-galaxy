<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('assets/site-images/favicon.png') }}" />
        
        {{-- SEO Tags --}}
        {!! SEO::generate(true) !!}

        <link href="https://fonts.gstatic.com" crossorigin="crossorigin" rel="preconnect" />
        <link as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="preload"/>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"/>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        @livewireStyles

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-311C482TK9"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-311C482TK9');
        </script>
    </head>
<body  x-data="global()" x-init="themeInit()" :class="isMobileMenuOpen ? 'max-h-screen overflow-hidden relative' : ''" class="dark:bg-primary">
    <div id="main">
        <div class="container mx-auto">
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
    <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="sahilchahal" data-description="Support me on Buy me a coffee!" data-message="" data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
  @livewireScripts
</body>
</html>