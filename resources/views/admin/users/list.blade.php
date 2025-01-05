@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <header class="flex flex-row top-[45px]">
        <div>
            <h1 class="left-[365px] absolute text-black font-bold text-[32px] leading-normal">Users Page</h1>
        </div>
        <div class="absolute right-[110px]">
            <button type="submit" class="bg-blueviolet py-1.5 px-3 rounded-[10px] text-[18px] font-light leading-normal mt-[10px]"><a href="{{ route('user.create') }}" class="text-white">Add user</a></button>
        </div>
    </header>
    <main class="absolute flex flex-col left-[365px] top-[150px] w-[1000px] shadow-lg">
        <table class="w-[1000px] border-[1px] border-black">
            <thead class="bg-gray-800 2">
                <tr>
                    <th class="text-white font-bold text-[24px] text-left py-[12px] px-[15px] left-[20px]">ID</th>
                    <th class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Login</th>
                    <th class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Maile</th>
                    <th class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Role</th>
                    <th class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $user->id }}</td>
                        <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $user->login }}</td>
                        <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $user->email }}</td>
                        <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ getUserRole($user->id) }}</td>
                        <td class="font-medium text-blueviolet text-[18px] py-[12px] px-[15px]"><a href="{{ route('user.view', $user->id) }}">More</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
