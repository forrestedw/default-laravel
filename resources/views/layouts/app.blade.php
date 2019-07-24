<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layouts.head')
</head>
<body>
    <div id="app">

        @include('layouts.nav')

        @include('layouts.alerts')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>
</body>
</html>
