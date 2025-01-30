<header class="max-w-[1336px] mx-auto flex justify-between pt-[35px]">
    <h1><a class="font-bold text-[25px] leading-[22px] text-white">MyShop</a></h1>
    <nav class="">
        <ul class="flex items-center gap-20">
            <li><a href="" class="relative font-medium text-[15px] leading-[22px] text-white after:absolute after:left-0 after:h-[1px] after:w-full after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Home</a></li>
            <li><a href="" class="relative font-medium text-[15px] leading-[22px] text-white after:absolute after:left-0 after:h-[1px] after:w-full after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Men</a></li>
            <li><a href="" class="relative font-medium text-[15px] leading-[22px] text-white after:absolute after:left-0 after:h-[1px] after:w-full after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Women</a></li>
            <li><a href="" class="relative font-medium text-[15px] leading-[22px] text-white after:absolute after:left-0 after:h-[1px] after:w-full after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Catalog</a></li>
        </ul>
    </nav>

    <div class="flex items-center gap-[20px]">
        <a class="flex items-center gap-1" href=""><img class="w-[25px] h-[25px] invert-[100%]" src="{{ asset('storage') . '/images/loupe.png' }}"></a>
        <a class="flex items-center gap-1" href=""><img class="w-[25px] h-[25px] invert-[100%]" src="{{ asset('storage') . '/images/shopping.cart.png' }}"></a>
        @if(\Illuminate\Support\Facades\Auth::check())
        <a class="flex items-center gap-1" href="#"><img class="w-[25px] h-[25px] invert-[100%]" src="{{ asset('storage') . '/images/account.png' }}"></a>
        @else
        <a href="{{ route('register.index') }}" class="relative text-white font-medium text-[15px] leading-[22px] gap-1 after:absolute after:left-0 after:h-[1px] after:w-full after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Sign up</a>
        <div class="text-white gap-1 ml-[-8px]">|</div>
        <a href="{{ route('login.index') }}" class="relative text-white font-medium text-[15px] leading-[22px] gap-1 ml-[-8px] after:absolute after:left-0 after:h-[1px] after:w-full after:-bottom-1 after:bg-white after:scale-0 hover:after:scale-100 after:transition-transform">Login</a>
        @endif
    </div>
</header>
