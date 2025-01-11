@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
<div class="flex flex-col">
    <div class="flex flex-row">
        <p class="font-bold text-4xl ml-6">My Profile</p>
        <form method="post" action="{{ route('admin.logout') }}" class="ml-auto mr-5 border border-red-600 p-2 rounded-xl text-red-600">
            @csrf
            <button type="submit">Log out</button>
        </form>
    </div>
    <div class="flex flex-col mt-12 ml-6 gap-4">
        <div class="flex flex-row gap-2">
            <h2 class="text-xl font-bold">Name:</h2>
            <h1 class="font-medium text-lg mt-[1px]">{{ $user->first_name }} {{ $user->last_name }}</h1>
            <button class="text-blueviolet text-lg mt-[1px] ml-auto"><a href="{{ route('admin.profile.edit') }}">Edit</a></button>
        </div>
        <hr class="border-blueviolet">
        <div class="flex flex-row gap-2">
            <h2 class="text-xl font-bold">Role:</h2>
            <h1 class="font-medium text-lg mt-[1px]">{{ getUserRole($user->id) }}</h1>
        </div>
        <hr class="border-blueviolet">
        <div class="flex flex-row gap-2">
            <h2 class="text-xl font-bold">Registration date:</h2>
            <h1 class="font-medium text-lg mt-[1px]">{{ $user->created_at }}</h1>
        </div>
        <hr class="border-blueviolet">
    </div>
</div>
<div class="flex flex-col mt-12 gap-4">
    <h1 class="flex flex-row justify-center text-2xl">Your Last Notifications</h1>
    <div>

    </div>
</div>
@endsection

