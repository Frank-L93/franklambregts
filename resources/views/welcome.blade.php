<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Frank Lambregts">
        <meta name="description" content="Personal website of Frank Lambregts, 30 years old, SAP Consultant, Chess Player">
        <meta name="keywords" content="Frank, Lambregts, Frank Lambregts, SAP, Consultant, PHP, Laravel, Chess, SD, Finance">
        <title>@yield('title', 'Home') - Frank Lambregts</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        @php
            $page = e($__env->yieldContent('title'));
            if(!$page == ""){
                @endphp

                        <x-menu :currentPage="strtolower($page)" />
                        @php
            }

        @endphp

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-500 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @yield('content')
            
        </div>
        @livewireScripts
    </body>
</html>
