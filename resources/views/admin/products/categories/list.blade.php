@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <header class="flex flex-row top-[45px]">
        <div>
            <h1 class="text-black font-bold text-[30px] leading-normal">Categories Page</h1>
        </div>
        <div class="ml-auto mt-[3px]">
            <button type="submit" class="bg-blueviolet py-1.5 px-3 rounded-[10px] text-[18px] font-light"><a href="{{ route('category.create') }}" class="text-white">Add category</a></button>
        </div>
    </header>
    <main class="flex flex-col mt-10 min-w-fit shadow-lg">
        <x-admin-list-table :entities="$categories"/>
    </main>
@endsection


