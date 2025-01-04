@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <header class="flex flex-row top-[45px]">
        <div>
            <h1 class="left-[365px] absolute text-black font-bold text-[32px] leading-normal">Roles Page</h1>
        </div>
        <div class="absolute right-[110px]">
            <button type="submit" class="bg-blueviolet py-1.5 px-3 rounded-[10px] text-[18px] font-light leading-normal mt-[10px]"><a href="{{ route('role.create') }}" class="text-white">Add role</a></button>
        </div>
    </header>
    <main class="absolute flex flex-col left-[365px] top-[150px] w-[1000px] shadow-lg">
        <table class="w-[1000px] border-collapse border border-[1px] border-black">
            <thead class="bg-gray-800">
            <tr class="">
                <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">ID</th>
                <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Role</th>
                <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Guard name</th>
                <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Created at</th>
                <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Updated at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr class="border border-[1px] border-black">
                    <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $role->id }}</td>
                    <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $role->name }}</td>
                    <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $role->guard_name }}</td>
                    <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $role->created_at }}</td>
                    <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $role->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </main>
@endsection

