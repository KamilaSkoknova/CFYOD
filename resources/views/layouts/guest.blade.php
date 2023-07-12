<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="language" content="en"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Kamila Skokňová" >
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Courgette&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">

        <link rel="icon" href="{{ asset('assets/img/logo.jpg') }}">

        <!--</title> -->
        <title>
            @yield('title')
            Cook for yourself OR DON'T
        </title>

        @livewireStyles
    </head>
    <body>
       
        @include('layouts.navigation')
        <div>

            @if (isset($header))
                <header class="bg-white">
                    <div class="mx-auto py-5 px-4">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <footer class="footer d-flex justify-content-center">
            <p class="footer__copy mt-2">&copy; 
                @php
                    echo date('Y');
                @endphp 
                
                Cook for Yourself <span class="footer__copy--red"> or don't</span>
            </p>
        </footer>
        <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/scripts.js') }}"></script>
    </body>
</html>
