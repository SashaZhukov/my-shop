@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <header class="flex flex-row top-[45px]">
        <div class="mr-auto">
            <h1 class="text-black font-bold text-[32px] leading-normal">Users Page</h1>
        </div>
        <div class="">
            <button type="submit" class="bg-blueviolet py-1.5 px-3 rounded-[10px] text-[18px] font-light leading-normal mt-[10px]"><a href="{{ route('user.create') }}" class="text-white">Add user</a></button>
        </div>
    </header>
    <main class="flex flex-col mt-10 shadow-lg">
         <x-admin-list-table :essences="$users" :columns="$columns" :moreRoute="$moreRoute"/>
    </main>
@endsection
