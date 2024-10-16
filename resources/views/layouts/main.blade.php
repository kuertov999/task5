<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="flex h-28 items-center bg-orange-100 gap-5">
        <img src="images/logo.png" alt="логотип" class="h-full border-8">
        <nav class="flex gap-5">
            <a class="font-bold" href="{{ route('report.index') }}">Отчеты</a>
            <a class="font-bold" href="{{ route('home') }}">Главная</a>
            <a class="font-bold" href="{{ route('array') }}">Массивы</a>
        </nav>
    </header>
    <main class="px-20">
        @yield('content')
    </main>
    <footer class="flex h-28 items-center bg-orange-100">
        <p class="text-xl font-bold mx-auto">©Батурин 2024</p>
    </footer>
</body>
</html>