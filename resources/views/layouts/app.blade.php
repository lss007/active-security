<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="icon/image" href="{{ asset('frontend/images/favicon.ico')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
              <!-- Toaster CSS -->
              {{-- start frontend css  --}}
              <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
              <link href="{{ asset('frontend/css/bootstrap.min.css.map') }}" rel="stylesheet" type="text/css" />
            
              <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css" />
              <link href="{{ asset('frontend/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
              
              
            
              {{-- end frontend css  --}}
              
              <!-- Fonts -->
              <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
              
              
              <!-- Scripts -->
              @vite(['resources/css/app.css', 'resources/js/app.js'])
              

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            
{{-- site header  --}}

{{-- site header  --}}
       @if(Auth::check())
            @livewire('navigation-menu')
       @endif
            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
