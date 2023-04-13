<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auction</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="flex flex-col min-h-screen bg-sky-100">
    <header>
        @yield('header')
    </header>
    <main class="flex-grow">
        <div class="w-full max-w-2xl mx-auto">
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>

