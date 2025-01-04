@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <div class="flex flex-row justify-center">
        <h3 class="text-black font-medium text-[30px] text-blueviolet">
            Edit Personal User Info
        </h3>
    </div>
    <form method="POST" action="{{ route('user.update', ['user' => $user->id, 'block' => $block]) }}" class="flex flex-col items-center mt-6">
        @csrf
        @method('PATCH')
        <div class="flex flex-col">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Login</label>
            <input name="login" id="login" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->login }}">
        </div>
        @error('login')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        <div class="flex flex-col mt-[15px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Email</label>
            <input name="email" id="login" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->email }}">
        </div>
        @error('email')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        <div class="flex flex-col mt-[15px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">First name</label>
            <input name="first_name" id="first_name" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->first_name }}">
        </div>
        @error('first_name')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        <div class="flex flex-col mt-[15px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Last name</label>
            <input  name="last_name" id="last_name" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->last_name }}">
        </div>
        @error('last_name')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        <div class="flex flex-col mt-[15px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Phone</label>
            <input  name="phone" id="phone" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->phone }}">
        </div>
        @error('phone')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        @error('NotRequired')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
        @enderror
        <div class="mt-[30px] flex justify-center">
            <button type="submit" class="bg-blueviolet px-[18px] py-[5px] text-white text-[19px] rounded-[10px] font-medium">Save</button>
        </div>
    </form>
@endsection

