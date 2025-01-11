@extends('layouts.master')
@section('content')
    <div class="flex flex-col items-center mt-24">
        <div>
            <h1 class="text-blueviolet font-bold text-3xl">Enter your new name</h1>
        </div>
        <form action="{{ route('admin.profile.update', $user->id) }}" method="post" class="flex flex-col gap-4 mt-4 min-w-80">
            @csrf
            @method('patch')
            <div class="flex flex-col gap-2">
                <label class="text-lg text-blueviolet font-light">First name</label>
                <input name="first_name" id="first_name" class="w-100% rounded-lg" placeholder="Enter your first name">
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-lg text-blueviolet font-light">Last name</label>
                <input name="last_name" id="last_name" class="w-100% rounded-lg" placeholder="Enter your last name">
            </div>
            <div class="flex flex-row justify-center mt-2">
                <button class="border border-blueviolet py-1.5 px-4 rounded-lg text-white bg-blueviolet">Save</button>
            </div>
        </form>
    </div>
@endsection

