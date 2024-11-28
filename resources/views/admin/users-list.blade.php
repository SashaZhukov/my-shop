@extends('layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <header class="flex flex-row absolute left-[365px] top-[45px]">
        <h1 class="text-black font-bold text-[32px] leading-normal">Users Page</h1>
    </header>
    <main class="relative flex flex-col left-[365px] top-[150px] w-[1000px] shadow-lg">
        <table class="w-[1000px] border-collapse border border-[1px] border-black">
            <thead class="bg-gray-800">
                <tr class="">
                    <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">ID</th>
                    <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Name</th>
                    <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Maile</th>
                    <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">Role</th>
                    <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="border border-[1px] border-black">
                        <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $user->id }}</td>
                        <td class="font-medium text-[18px] py-[12px] px-[15px]">Alex</td>
                        <td class="font-medium text-[18px] py-[12px] px-[15px]">sasha01zhu</td>
                        <td class="font-medium text-[18px] py-[12px] px-[15px]">Admin</td>
                        <td class="font-medium text-blueviolet text-[18px] py-[12px] px-[15px]"><a href="">More</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
