<div class="bg-blueviolet h-[832px] w-[300px] absolute">
    <div class="flex flex-row justify-center relative top-[25px]">
        <h1 class="text-white text-[32px] font-bold leading-normal">Admin Panel</h1>
    </div>

    <nav class="flex flex-col relative gap-[20px] left-[20px] top-[75px]">
        <div class="flex flex-row relative">
            <a href="{{ route('admin.home') }}" class="text-white text-[20px] font-medium leading-normal">Home</a>
            @if(Route::currentRouteName() === 'admin.home')
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
        <div class="flex flex-row relative">
            <a href="{{ route('admin.profile') }}" class="text-white text-[20px] font-medium leading-normal">My Profile</a>
            @if(Route::currentRouteName() === 'admin.profile')
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
        <div class="flex flex-row relative">
            <a href="{{ route('users.index') }}" class="text-white text-[20px] font-medium leading-normal">Users</a>
            @if(Route::currentRouteName() === 'users.index')
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
        <div class="flex flex-row relative">
            <a href="{{ route('roles.index') }}" class="text-white text-[20px] font-medium leading-normal">Roles</a>
            @if(Route::currentRouteName() === 'roles.index')
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
        <div class="flex flex-row relative" id="dropdown">
            <a href="{{ route('stores.index') }}" class="text-white text-[20px] font-medium leading-normal" id="button">Stores</a>
            @if(Route::currentRouteName() === 'stores.index')
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
        <div class="flex flex-row relative" id="dropdown">
            <a href="{{ route('category.index') }}" class="text-white text-[20px] font-medium leading-normal" id="button">Stores categories</a>
            @if(Route::currentRouteName() === 'category.index')
                <div class="h-[30px] bg-white w-[4px] absolute rounded-[40px] right-[30px]"></div>
            @endif
        </div>
    </nav>
</div>
