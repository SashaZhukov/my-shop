@extends('admin.layouts.master')
@section('nav')
@include('admin.layouts.navigation')
@endsection
@section('content')
<div class="flex flex-row justify-center">
    <h3 class="font-medium text-[30px] text-blueviolet">
        Edit Personal User Info
    </h3>
</div>
<form method="POST" action="{{ route('user.update', ['user' => $user->id, 'block' => $block]) }}" class="flex flex-col items-center mt-6">
    @csrf
    @method('PATCH')
    <div class="flex flex-col">
        <label class="text-blueviolet text-[20px] font-medium leading-normal">Password</label>
        <input name="password" id="password" type="password" class="w-[300px] mt-[10px] rounded-[10px]" placeholder="Set new password">
    </div>
    @error('password')
    <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]"></div>
    @enderror
    <div class="flex flex-col mt-[15px]">
        <div class="flex flex-col ml-[-148px]">
            <label class="text-blueviolet text-[20px] font-medium leading-normal">Chose role</label>
            <div class="flex flex-row relative items-center mt-[8px]">
                <select class="border-blueviolet rounded-[10px]" name="role">
                    @foreach($roles as $role)
                        <option {{ $role->name === getUserRole($user->id) ? 'selected' : '' }} value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @error('role')
        <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
        @enderror
    </div>
    @error('NotRequired')
    <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
    @enderror
    <div class="mt-[30px] flex justify-center">
        <button type="submit" class="bg-blueviolet px-[18px] py-[5px] text-white text-[19px] rounded-[10px] font-medium">Save</button>
    </div>
</form>
@endsection


