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
<section class="bg-heroGradient h-[2000px]">
    @include('layouts.header')
    <section>
        <div class="max-w-[1250px] mx-auto grid grid-cols-2 pt-32">
            <div>
                <h1 class="text-white font-bold text-[60px] leading-normal">You are gonna have to get a bigger closet.</h1>
                <p class="mt-5 text-white text-[22px] leading-[33px]">
                    We only have the widest assortment and
                    lowest prices. Nothing extra
                </p>
                <div class="flex items-center mt-8 gap-5">
                    <a href="" class="py-[10px] px-10 bg-[#FF00C7] rounded-xl text-white font-semibold">Men</a>
                    <a href="" class="py-[10px] px-6 bg-[#FF00C7] rounded-xl text-white font-semibold">Women</a>
                </div>
            </div>
            <div>
                <img class="w-[1000px] h-[500px]" src="{{ asset('storage') . '/images/mainPage-foto.png' }}">
            </div>
        </div>
    </section>
</section>
</body>
</html>


