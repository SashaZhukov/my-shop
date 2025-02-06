@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <header class="flex flex-row top-[45px]">
        <div>
            <h1 class="text-black font-bold text-[30px] leading-normal"><a href="{{ route('users.index') }}">Users Page</a></h1>
        </div>
        <div class="flex flex-col w-[690px] ml-4 relative">
            <input id="search" class="content-center rounded-xl w-full px-3 py-2" placeholder="Search by login" autocomplete="off" autocorrect="off" autocapitalize="off">
            <div id="suggestions" class="absolute z-10 bg-white shadow-lg w-full mt-12 border border-black rounded-xl hidden">
            </div>
        </div>
        <div class="mt-2 ml-6">
            <img src="{{ asset('storage') . '/images/filter.png' }}" class="w-7 h-7">
        </div>
        <div class="ml-auto mt-[3px]">
            <button type="submit" class="bg-blueviolet py-1.5 px-3 rounded-[10px] text-[18px] font-light"><a href="{{ route('user.create') }}" class="text-white">Add user</a></button>
        </div>
    </header>
        @if($errors->has('UserNotFound'))
            <h1 class="text-black font-bold text-4xl mt-10">{{ $errors->first('UserNotFound') }}</h1>
        @else
            <main class="flex flex-col mt-10 shadow-lg">
                <x-admin-list-table :entities="$users"/>
            </main>
        @endif
@endsection
@section('scripts')
    @vite('resources/js/admin-search.js')
@endsection
