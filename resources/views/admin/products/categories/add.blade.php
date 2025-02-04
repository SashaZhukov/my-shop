@extends('layouts.master')
@section('content')
    <div class="mt-44">
        <div class="flex justify-center">
            <h1 class="text-blueviolet text-[36px] font-bold leading-normal">Add category</h1>
        </div>
        <div class="relative flex top-[20px] justify-center">
            <form method="POST" action="{{ route('category.store') }}">
                @csrf
                <div class="flex flex-col">
                    <label class="text-blueviolet text-[20px] font-medium leading-normal">Name</label>
                    <input name="name" class="w-[300px] mt-[10px] rounded-[10px]" placeholder="Enter category name">
                </div>
                @error('name')
                <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
                @enderror
                <div class="mt-[30px] flex justify-center">
                    <button type="submit" class="bg-blueviolet px-[18px] py-[5px] text-white text-[19px] rounded-[10px] font-medium">Create category</button>
                </div>
            </form>
        </div>
    </div>
@endsection

