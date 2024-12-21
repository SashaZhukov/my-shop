@extends('layouts.master')
@section('content')
    <div class="flex justify-center mt-[130px]">
        <h1 class="text-blueviolet text-[36px] font-bold leading-normal">Add user</h1>
    </div>
    <div class="relative flex top-[20px] justify-center">
        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="flex flex-col">
                <label class="text-blueviolet text-[20px] font-medium leading-normal">Enter name</label>
                <input name="name" class="w-[300px] mt-[10px] rounded-[10px]" placeholder="Enter name">
            </div>
            @error('name')
            <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
            <div class="flex flex-col mt-[15px]">
                <label class="text-blueviolet text-[20px] font-medium leading-normal">Enter email</label>
                <input name="email" class="w-[300px] mt-[10px] rounded-[10px]" placeholder="Enter email">
            </div>
            @error('email')
            <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
            <div class="flex flex-col mt-[15px]">
                <label class="text-blueviolet text-[20px] font-medium leading-normal">Enter password</label>
                <input type="password" name="password" id="password" class="w-[300px] mt-[10px] rounded-[10px]" placeholder="Enter password">
            </div>
            @error('password')
            <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
            <div class="flex flex-col mt-[15px]">
                <label class="text-blueviolet text-[20px] font-medium leading-normal">Enter password confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-[300px] mt-[10px] rounded-[10px]" placeholder="Enter password confirmation">
            </div>
            @error('password_confirmation')
            <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
            <div class="flex flex-col mt-[15px]">
                <label class="text-blueviolet text-[20px] font-medium leading-normal">Chose role</label>
                <div class="flex flex-row relative items-center mt-[8px]">
                     <select class="border-blueviolet rounded-[10px]" name="role">
                         @foreach($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                         @endforeach
                     </select>
                 </div>
            </div>
            @error('role')
            <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
            <div class="mt-[30px] flex justify-center">
                <button type="submit" class="bg-blueviolet px-[18px] py-[5px] text-white text-[19px] rounded-[10px] font-medium">Create user</button>
            </div>
        </form>
    </div>
@endsection
