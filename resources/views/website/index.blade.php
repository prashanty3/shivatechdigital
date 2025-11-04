<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">  
    <title>@yield('title', 'ShivaTechDigital - Digital Marketing Agency')</title>
    <meta name="description" content="Leading digital marketing agency specializing in web applications, mobile apps, and comprehensive digital marketing solutions.">
    <link rel="shortcut icon" href="{{ asset('storage/settings/icons/' . basename($settings->site_icon ?? '')) }}" type="image/x-icon">
    
    @include('website.css.style')
</head>

<body>

    @include('website.components.navbar')
    
    @yield('website.content')

    @include('website.components.footer')

    <!-- jQuery (if needed) -->
    @include('website.js.script')

    @stack('scripts')
</body>

</html>