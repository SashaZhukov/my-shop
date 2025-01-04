<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>MyShop</title>
</head>
<body>
<section>
    <div class="flex min-h-screen">
        <aside class="w-[300px] bg-blueviolet">
            @yield('nav')
        </aside>
        <main class="flex-1 p-[50px]">
            @yield('content')
        </main>
    </div>
</section>
</body>
</html>

