@extends('layouts.master')
@section('content')
    <div class="mt-32">
        <div class="flex justify-center">
            <h1 class="text-blueviolet text-[36px] font-bold leading-normal">Add store</h1>
        </div>
        <div class="relative flex top-[20px] justify-center">
            <form method="POST" action="{{ route('store.store') }}">
                @csrf
                <div class="flex flex-col">
                    <label class="text-blueviolet text-[20px] font-medium leading-normal">Name</label>
                    <input name="name" class="w-[300px] mt-[10px] rounded-[10px]" placeholder="Enter store name">
                </div>
                @error('name')
                <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
                @enderror
                <div class="flex flex-col mt-[15px]">
                    <label class="text-blueviolet text-[20px] font-medium leading-normal">Phone</label>
                    <input name="phone" class="w-[300px] mt-[10px] rounded-[10px]" placeholder="Enter store phone">
                </div>
                @error('phone')
                <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
                @enderror
                <div class="flex flex-col mt-[15px]">
                    <label class="text-blueviolet text-[20px] font-medium leading-normal">Choose category</label>
                    <div class="flex flex-row relative items-center mt-[8px]">
                        <select class="border-blueviolet rounded-[10px]" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('category')
                <div class="text-red-600 font-semibold leading-6 mt-2 text-[15px]">{{ $message }}</div>
                @enderror
                <div class="mt-[30px] flex justify-center">
                    <button type="submit" class="bg-blueviolet px-[18px] py-[5px] text-white text-[19px] rounded-[10px] font-medium">Create store</button>
                </div>
            </form>
        </div>
    </div>
@endsection
