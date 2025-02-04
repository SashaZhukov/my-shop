@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <header class="flex flex-row top-[45px]">
        <div class="mr-auto">
            <h1 class="text-black font-bold text-[32px] leading-normal">Roles Page</h1>
        </div>
        <div>
            <button type="submit" class="bg-blueviolet py-1.5 px-3 rounded-[10px] text-[18px] font-light leading-normal mt-[10px]"><a href="{{ route('role.create') }}" class="text-white">Add role</a></button>
        </div>
    </header>
    <main class="flex flex-col mt-10 min-w-fit shadow-lg">
         <x-admin-list-table :entities="$roles"/>
    </main>
@endsection

