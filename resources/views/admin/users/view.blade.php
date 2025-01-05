@extends('admin.layouts.master')
@section('nav')
    @include('admin.layouts.navigation')
@endsection
@section('content')
    <div class="flex flex-col gap-5">
        <div class="ml-[400px]">
            <h2 class="text-black text-[24px] font-bold">User Information</h2>
        </div>
        <div class="flex flex-col gap-[25px]">
            <div class="border border-black rounded-[10px] h-[400px] mt-[20px]">
                <div class="flex flex-row">
                    <h2 class="text-black text-[20px] font-bold pl-[55px] pt-6">Personal Information</h2>
                    <div class="pt-[30px] ml-auto pr-[55px]">
                        <form action="{{ route('user.edit', $user->id) }}" method="get">
                            <input type="hidden" name="block" value="personalInfo">
                            <button type="submit" class="flex items-center text-[18px] border border-blueviolet px-2 py-1 rounded-[10px] text-blueviolet">
                                <svg class="mr-[5px]" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8477 1.87868C19.6761 0.707109 17.7766 0.707105 16.605 1.87868L2.44744 16.0363C2.02864 16.4551 1.74317 16.9885 1.62702 17.5692L1.03995 20.5046C0.760062 21.904 1.9939 23.1379 3.39334 22.858L6.32868 22.2709C6.90945 22.1548 7.44285 21.8693 7.86165 21.4505L22.0192 7.29289C23.1908 6.12132 23.1908 4.22183 22.0192 3.05025L20.8477 1.87868ZM18.0192 3.29289C18.4098 2.90237 19.0429 2.90237 19.4335 3.29289L20.605 4.46447C20.9956 4.85499 20.9956 5.48815 20.605 5.87868L17.9334 8.55027L15.3477 5.96448L18.0192 3.29289ZM13.9334 7.3787L3.86165 17.4505C3.72205 17.5901 3.6269 17.7679 3.58818 17.9615L3.00111 20.8968L5.93645 20.3097C6.13004 20.271 6.30784 20.1759 6.44744 20.0363L16.5192 9.96448L13.9334 7.3787Z" fill="#5027B5"/>
                                </svg>
                                Edit
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col flex-wrap h-[340px] gap-4 pl-[85px]">
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Login:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->login }}</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">First Name:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->first_name }}</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Last Name:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->last_name }}</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Email Address:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->email }}</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Phone:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->phone }}</h4>
                    </div>
                </div>
            </div>
            <div class="border border-black rounded-[10px] h-[400px] mt-[20px]">
                <div class="flex flex-row">
                    <h2 class="text-black text-[20px] font-bold pt-[30px] pl-[55px]">Address</h2>
                    <div class="pt-[30px] ml-auto pr-[55px]">
                        <form action="{{ route('user.edit', $user->id) }}" method="get">
                            <input type="hidden" name="block" value="userAddress">
                            <button type="submit" class="flex items-center text-[18px] border border-blueviolet px-2 py-1 rounded-[10px] text-blueviolet">
                                <svg class="mr-[5px]" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8477 1.87868C19.6761 0.707109 17.7766 0.707105 16.605 1.87868L2.44744 16.0363C2.02864 16.4551 1.74317 16.9885 1.62702 17.5692L1.03995 20.5046C0.760062 21.904 1.9939 23.1379 3.39334 22.858L6.32868 22.2709C6.90945 22.1548 7.44285 21.8693 7.86165 21.4505L22.0192 7.29289C23.1908 6.12132 23.1908 4.22183 22.0192 3.05025L20.8477 1.87868ZM18.0192 3.29289C18.4098 2.90237 19.0429 2.90237 19.4335 3.29289L20.605 4.46447C20.9956 4.85499 20.9956 5.48815 20.605 5.87868L17.9334 8.55027L15.3477 5.96448L18.0192 3.29289ZM13.9334 7.3787L3.86165 17.4505C3.72205 17.5901 3.6269 17.7679 3.58818 17.9615L3.00111 20.8968L5.93645 20.3097C6.13004 20.271 6.30784 20.1759 6.44744 20.0363L16.5192 9.96448L13.9334 7.3787Z" fill="#5027B5"/>
                                </svg>
                                Edit
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col flex-wrap h-[340px] gap-[15px] pl-[85px]">
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Country:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->address ? $user->address->country : '' }}</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">City:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->address ? $user->address->city : '' }}</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Street:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->address ? $user->address->stree : '' }}</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Building:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->address ? $user->address->building : '' }}</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Postcode:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ $user->address ? $user->address->postcode : '' }}</h4>
                    </div>
                </div>
            </div>
            <div class="border border-black rounded-[10px] h-[380px] mt-[20px]">
                <div class="flex flex-row">
                    <h2 class="text-black text-[20px] font-bold pt-[30px] pl-[55px]">Security and other</h2>
                    <div class="pt-[30px] ml-auto pr-[55px]">
                        <form action="{{ route('user.edit', $user->id) }}" method="get">
                            <input type="hidden" name="block" value="securityAndOther">
                            <button type="submit" class="flex items-center text-[18px] border border-blueviolet px-2 py-1 rounded-[10px] text-blueviolet">
                                <svg class="mr-[5px]" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8477 1.87868C19.6761 0.707109 17.7766 0.707105 16.605 1.87868L2.44744 16.0363C2.02864 16.4551 1.74317 16.9885 1.62702 17.5692L1.03995 20.5046C0.760062 21.904 1.9939 23.1379 3.39334 22.858L6.32868 22.2709C6.90945 22.1548 7.44285 21.8693 7.86165 21.4505L22.0192 7.29289C23.1908 6.12132 23.1908 4.22183 22.0192 3.05025L20.8477 1.87868ZM18.0192 3.29289C18.4098 2.90237 19.0429 2.90237 19.4335 3.29289L20.605 4.46447C20.9956 4.85499 20.9956 5.48815 20.605 5.87868L17.9334 8.55027L15.3477 5.96448L18.0192 3.29289ZM13.9334 7.3787L3.86165 17.4505C3.72205 17.5901 3.6269 17.7679 3.58818 17.9615L3.00111 20.8968L5.93645 20.3097C6.13004 20.271 6.30784 20.1759 6.44744 20.0363L16.5192 9.96448L13.9334 7.3787Z" fill="#5027B5"/>
                                </svg>
                                Edit
                            </button>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col flex-wrap h-[340px] gap-[15px] pl-[85px]">
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Password:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">You don't can see password. Only set new.</h4>
                    </div>
                    <div class="flex flex-col gap-[5px]">
                        <h4 class="pt-[20px] text-gray-500 font-light text-[18px]">Role:</h4>
                        <h4 class="text-gray-500 font-light text-[18px]">{{ getUserRole($user->id) }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
