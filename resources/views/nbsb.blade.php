<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Frank Lambregts">
        <meta name="description" content="Personal website of Frank Lambregts, 31 years old, SAP Consultant and Chess Player with an interest in web design and processes">
        <meta name="keywords" content="Frank, Lambregts, Frank Lambregts, SAP, Consultant, PHP, Laravel, Chess, SD, Finance, SAP Architect">
        <title>@yield('title', 'Home') - Frank Lambregts</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="mx-auto antialiased">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center">
            @yield('content')

        </div>
        @livewireScripts
    </body>
</html>
