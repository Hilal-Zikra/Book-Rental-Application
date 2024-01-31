@extends('layouts.app')

@section('content')

    <div class="flex m-10 items-center border border-gray-800 p-5 rounded-md bg-blue-400">
        <div>
            <img class="h-28 w-h-28 rounded-full" src="{{ asset('storage/' . $user->image_directory) }}" alt="user-img">
        </div>
        <div class="mx-5">
            <h1 class="text-xl font-medium"><span class="text-sm font-bold">Name: </span> {{ $user->name }}</h1>
            <p class="text-xl font-medium"><span class="text-sm font-bold">Email: </span> {{ $user->email }}</p>
        </div>
        
    </div>
    <hr class="h-px my-8 bg-gray-600 border-0 dark:bg-gray-700">

    <div class="m-10">
        <h1 class="text-3xl font-semibold m-4">Rented Books</h1>
        @foreach ($books as $book)
            <div class="border border-gray-800 p-5 rounded-md">
                <h1 class="text-xl"><span class="text-base">Author:</span> {{ $book->author }}</h1>
                <h1 class="text-xl"><span class="text-base">Published:</span> {{ $book->published_date }}</h1>
                <h1 class="text-xl"><span class="text-base">Publisher:</span> {{ $book->publisher }}</h1>
                <button class="py-2 px-3 rounded-md my-2 bg-green-600 text-white">Return Book</button>
            </div>
        @endforeach
    </div>
    

@endsection