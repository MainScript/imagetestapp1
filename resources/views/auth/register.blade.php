@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white w-6/12 rounded-lg p-6 drop-shadow-md">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2">Name</label>
                    <input type="text" name="name" id="name" class="border-2 border-gray-400 p-2 w-full rounded-md @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2">Username</label>
                    <input type="text" name="username" id="username" class="border-2 border-gray-400 p-2 w-full rounded-md @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    @error('username')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2">E-Mail</label>
                    <input type="email" name="email" id="email" class="border-2 border-gray-400 p-2 w-full rounded-md @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
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
                <div class="mb-6">
                    <label for="password_confirmation" class="block mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="border-2 border-gray-400 p-2 w-full rounded-md @error('password_confirmation') border-red-500 @enderror">
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-rose-300 text-white rounded-lg py-2 px-20 text-lg drop-shadow-md">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection