<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show all books
    public function index()
    {
        $books = Book::with('publisherUser')->paginate(2);
        // dd($books);
        return view('books.index', compact('books'));
    }

    
    
    public function rentBook(Request $request)
    {
        $book = Book::find($request->bookId);

        if($book->rented === 1)
        {
            return redirect()->back()->with('error', 'This book is already rented.');
        }

        $rented_books_limit = Book::where('rented', auth()->user()->id)->count();

        if($rented_books_limit >= 3)
        {
            return redirect()->back()->with('error', 'You can only rent a maximum of 3 books at a time.');
        }

        $book->rented = 1;
        $book->rented_by = auth()->user()->id;
        $book->rented_at = Carbon::now();
        $book->save();

        return redirect('/profile');
    }

    public function returnBook(Request $request)
    {
        $book = Book::find($request->book_id);

        $book->rented = 0;
        $book->rented_by = null;
        $book->rented_at = null;
        $book->save();

        return redirect('/profile');
    }

    public function checkRent()
    {
        $retend_books = Book::where('rented', 1)->get();

        $books_counter = 0;

        foreach($retend_books as $book)
        {
            $rented_at = $book->rented_at;
            $rented_at = Carbon::parse($rented_at);
            $now = Carbon::now();
            $diff = $now->diffInDays($rented_at);

            if($diff >= 3)
            {
                // Here first we find user and then send an email
                $books_counter++;
            }
            
        }   

        // Here we will return a view with the number of books that are overdue
    }

    public function search(Request $request)
    {
        $books = [];
        $books = Book::where('author', 'LIKE', '%' . $request->author . '%')->orWhere('published_date', $request->published_date)->paginate(2);

        // dd($books);
        return view('books.search', compact('books'));
    }

}
