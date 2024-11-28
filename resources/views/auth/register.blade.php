@extends('layouts.master')
@section('content')
<div class="flex flex-col justify-center px-6 py-12 lg:px-8 pt-[200px]">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm pl-[100px]">
        <h1 class="text-blueviolet font-bold text-[35px]">Register</h1>
    </div>

    <form action="{{ route('register.store') }}" method="POST" class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm space-y-6">
    @csrf
        <div>
            <label for="name" class="block font-medium leading-6 text-blueviolet">Name</label>
            <div class="mt-2">
                <input type="text" name="name" id="name" class="block w-[350px] border-0 py-1.5 text-gray shadow-sm ring-1 ring-inset ring-gray-300 rounded-md placeholder:text-gray-400 placeholder:font-light  placeholder:text-[15px]" placeholder="Enter Name">
            </div>
            @error('name')
            <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email" class="block font-medium leading-6 text-blueviolet">Email</label>
            <div class="mt-2">
                <input type="email" name="email" id="email" class="block w-[350px] border-0 py-1.5 text-gray shadow-sm ring-1 ring-inset ring-gray-300 rounded-md placeholder:text-gray-400 placeholder:font-light  placeholder:text-[15px]" placeholder="Enter email">
            </div>
            @error('email')
                <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password" class="block font-medium leading-6 text-blueviolet">Password</label>
            <div class="mt-2">
                <input type="password" name="password" id="password" class="block w-[350px] border-0 py-1.5 text-gray shadow-sm ring-1 ring-inset ring-gray-300 rounded-md placeholder:text-gray-400 placeholder:font-light placeholder:text-[15px]" placeholder="Enter password">
            </div>
            @error('password')
                <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block font-medium leading-6 text-blueviolet">Confirmation password</label>
            <div class="mt-2">
                <input type="password" name="password_confirmation" id="password_confirmation" class="block w-[350px] border-0 py-1.5 text-gray shadow-sm ring-1 ring-inset ring-gray-300 rounded-md placeholder:text-gray-400 placeholder:font-light placeholder:text-[15px]" placeholder="Enter password confirmation">
            </div>
            @error('password_confirmation')
                <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('login.index') }}" class="text-blueviolet font-light text-[14px]">Have account? Sign in</a>
        </div>

        <div>
            <button type="submit" class="flex w-[85px] rounded-md bg-blueviolet text-white px-3 py-1.5 leading-6 text-sm font-semibold shadow-sm">Sign up</button>
        </div>

    </form>
</div>
@endsection
