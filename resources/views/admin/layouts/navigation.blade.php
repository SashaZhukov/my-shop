<div class="bg-blueviolet h-[832px] w-[300px] absolute">
    <div class="flex flex-row justify-center relative top-[25px]">
        <h1 class="text-white text-[32px] font-bold leading-normal">Admin Panel</h1>
    </div>

    <nav class="flex flex-col gap-[20px] ml-6 mt-14">
        <div class="flex flex-row">
            <a href="{{ route('admin.profile') }}" class="text-white text-[20px] font-medium leading-normal">My Profile</a>
            @if(Route::currentRouteName() === 'admin.profile')
                <div class="h-[30px] bg-white w-[4px] rounded-[40px] ml-auto mr-1.5"></div>
            @endif
        </div>
        <div class="flex flex-row">
            <a href="{{ route('users.index') }}" class="text-white text-[20px] font-medium leading-normal">Users</a>
            @if(Request::is('admin/users*'))
                <div class="h-[30px] bg-white w-[4px] rounded-[40px] ml-auto mr-1.5"></div>
            @endif
        </div>
        <div class="flex flex-row">
            <a href="{{ route('roles.index') }}" class="text-white text-[20px] font-medium leading-normal">Roles</a>
            @if(Route::currentRouteName() === 'roles.index')
                <div class="h-[30px] bg-white w-[4px] rounded-[40px] ml-auto mr-1.5"></div>
            @endif
        </div>
        <div class="flex flex-col">
            <div class="flex flex-row items-center">
                <button class="text-white text-[20px] font-medium leading-normal" id="productsButton">Products</button>
                <span class="ml-auto text-3xl text-white mr-2 transition-transform duration-200 inline-block rotate-90" id="arrow"> > </span>
            </div>
            <div id="dropdown" class="ml-4 hidden">
                <ul class="flex flex-col gap-2 mt-2 text-white">
                    <li class="flex flex-row">
                        <a href="{{ route('stores.index') }}" class="text-lg font-medium">Stores</a>
                        @if(Request::is('admin/products/store*'))
                            <div class="h-4.5 bg-white w-1 rounded-3xl mt-[2px] ml-auto mr-2"></div>
                        @endif
                    </li>
                    <li class="flex flex-row">
                        <a href="{{ route('category.index') }}" class="text-lg font-medium">Category</a>
                        @if(Request::is('admin/products/category*'))
                            <div class="h-4.5 bg-white w-1 rounded-3xl mt-1 ml-auto mr-2"></div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<script>
    const button = document.getElementById('productsButton')
    const dropdown = document.getElementById('dropdown')

    const currentRoute = window.location.pathname

    if (currentRoute.startsWith("/admin/products")) {
        dropdown.classList.remove('hidden')
    }

    button.addEventListener('click', function () {
        dropdown.classList.toggle('hidden')
        const arrow = document.getElementById('arrow')
        arrow.classList.toggle('rotate-90')
    })
</script>
