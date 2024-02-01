@extends('layouts.app')

@section('content')
<div class="m-5">
    <div class="bg-blue-400 flex justify-between p-3 rounded-md">
        <h1 class="text-xl font-medium">Filter Books</h1>
        <form action="{{ url('/search') }}" method="GET">
            <input type="text" name="author" placeholder="Book author" value="{{ request('author') }}">
            <input type="date" name="publishing_date" value="{{ request('publishing_date') }}">
            
        
            <button type="submit">Filter</button>
        </form>
        
    </div>
    <div class="flex justify-between mx-3">
        <h1 class="text-2xl my-5">Total Books Present</h1>
        @if (session('error'))
            <div class="text-red-500 text-xl font-bold">
                {{ session('error') }}
            </div>
        @endif

    </div>
    @foreach ($books as $book)
        <div class="border border-gray-800 p-5 rounded-md shadow-md mb-4">
            <h1 class="text-2xl font-semibold mb-2 w-1/3"><span class="text-base font-normal">Author:</span> {{ $book->author }}</h1>
            <h1 class="text-2xl font-semibold mb-2"><span class="text-base font-normal">Published:</span> {{ $book->published_date }}</h1>
            <h1 class="text-2xl font-semibold mb-2"><span class="text-base font-normal">Publisher:</span> {{ $book->publisherUser->name }}</h1>
            <form action="/rent-book" method="POST">
                @csrf
                <input type="hidden" name="bookId" value="{{ $book->id }}">
                <button class="py-2 px-4 rounded-md mt-4 bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    Rent Book
                </button>
            </form>
            
        </div>
    @endforeach
     {{-- Display pagination links --}}
    <div class="mt-4">
        {{ $books->links() }}
    </div>
</div>
@endsection