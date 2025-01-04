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
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Country</label>
            <input name="country" id="country" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->address->country }}">
        </div>
        @error('country')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        <div class="flex flex-col mt-[15px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">City</label>
            <input name="city" id="city" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->address->city }}">
        </div>
        @error('city')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        <div class="flex flex-col mt-[15px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Street</label>
            <input name="street" id="street" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->address->street }}">
        </div>
        @error('street')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        <div class="flex flex-col mt-[15px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Building</label>
            <input  name="building" id="building" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->address->building }}">
        </div>
        @error('building')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
        @enderror
        <div class="flex flex-col mt-[15px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Postcode</label>
            <input  name="postcode" id="postcode" class="w-[300px] mt-[10px] rounded-[10px]" value="{{ $user->address->postcode }}">
        </div>
        @error('postcode')
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


