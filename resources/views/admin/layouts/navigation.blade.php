<div class="bg-blueviolet h-[832px] w-[300px] absolute">
    <div class="flex flex-row justify-center relative top-[25px]">
        <h1 class="text-white text-[32px] font-bold leading-normal">Admin Panel</h1>
    </div>

    <nav class="flex flex-col relative gap-[20px] left-[20px] top-[75px]">
        <div class="flex flex-row relative">
            <a href="{{ route('admin.home') }}" class="text-white text-[20px] font-medium leading-normal">Home</a>
            @if(str_starts_with(request()->getRequestUri(), '/admin/home'))
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
        <div class="flex flex-row relative">
            <a href="{{ route('admin.users.index') }}" class="text-white text-[20px] font-medium leading-normal">Users</a>
            @if(str_starts_with(request()->getRequestUri(), '/admin/users'))
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
        <div class="flex flex-row relative">
            <a href="" class="text-white text-[20px] font-medium leading-normal">Products</a>
            @if(str_starts_with(request()->getRequestUri(), '/admin/products'))
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
    </nav>
</div>
