<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-rose-100">
        <div class="flex justify-center mt-6">
            <div class="bg-white w-6/12 rounded-lg p-6 drop-shadow-md">
                <div class="absolute right-6 top-4 border-2 w-6 h-6 rounded-full drop-shadow-cm border-gray-400 text-gray-400 hover:border-gray-300 hover:text-gray-300">
                    <button class="text-xl font-extrabold absolute left-[20%] -top-1/4"><a href="">x</a></button>
                </div>
                <form action="{{ route('posts') }}" method="post">
                    @csrf
                    <div class="mb-6">
                        <label for="title" class="block mb-2">Title</label>
                        <input type="text" name="title" id="title" class="border-2 border-gray-400 p-2 w-full rounded-md @error('username') border-red-500 @enderror">
                        @error('title')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="body" class="block mb-2">Description</label>
                        <textarea type="text" name="body" id="body" cols="30" rows="4" 
                        class="border-2 border-gray-400 p-2 w-full rounded-md @error('password') border-red-500 @enderror"></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="imageurl" class="block mb-2">Image Link</label>
                        <input type="url" name="imageurl" id="imageurl" class="border-2 border-gray-400 p-2 w-full rounded-md @error('password') border-red-500 @enderror">
                        @error('imageurl')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-center">
                        <button type="submit" class="bg-rose-300 text-white rounded-lg py-2 px-20 text-lg drop-shadow-md">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>