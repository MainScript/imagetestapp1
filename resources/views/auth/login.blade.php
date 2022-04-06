@extends('layouts.app')

@section('content')
<div class="flex justify-center">
        <div class="bg-white w-6/12 rounded-lg p-6 drop-shadow-md">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-6">
                    <label for="username" class="block mb-2">Username</label>
                    <input type="text" name="username" id="username" class="border-2 border-gray-400 p-2 w-full rounded-md @error('username') border-red-500 @enderror">
                    @error('username')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2">Password</label>
                    <input type="password" name="password" id="password" class="border-2 border-gray-400 p-2 w-full rounded-md @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-rose-300 text-white rounded-lg py-2 px-20 text-lg drop-shadow-md">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection