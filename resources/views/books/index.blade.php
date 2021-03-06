<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

        @livewireStyles


        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="bg--light">
            @livewire('navigation-menu')

            <!-- Page Heading -->

                <header class="bg--blue-light shadow border-b">
                    <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8">
           
                    <h2 class="font-semibold leading-tight">
                        Books
                    </h2>

                    </div>
                </header>


            <!-- Page Content -->
            <main>
                @livewire('books')
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
