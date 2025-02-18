@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <header class="flex flex-row top-[45px]">
        <div>
            <h1 class="text-black font-bold text-[30px] leading-normal">Stores Page</h1>
        </div>
        <div>
            <input class="content-center w-[690px] ml-4 mt-[2px] rounded-xl" placeholder="Search">
        </div>
        <div class="mt-2 ml-6">
            <img src="{{ asset('storage') . '/images/filter.png' }}" class="w-7 h-7">
        </div>
        <div class="ml-auto mt-[3px]">
            <button type="submit" class="bg-blueviolet py-1.5 px-3 rounded-[10px] text-[18px] font-light"><a href="{{ route('store.create') }}" class="text-white">Add store</a></button>
        </div>
    </header>
    <main class="flex flex-col mt-10 min-w-fit shadow-lg">
        <x-admin-list-table :entities="$stores"/>
    </main>
@endsection

