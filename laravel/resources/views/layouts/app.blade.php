<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Мой сайт')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="h-full bg-fixed bg-cover bg-center"
    style="background-image: url('/images/earth.jpg')"
>
<div id="app" class="min-h-screen flex flex-col">
    @include('partials.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')
</div>
</body>
</html>
