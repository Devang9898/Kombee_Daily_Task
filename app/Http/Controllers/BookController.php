<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // public function index()
    // {
    //     // Eager load author and publisher relationships
    //     $books = Book::with(['author', 'publisher'])->get();

    //     foreach ($books as $book) {
    //         return response  'Book: ' . $book->title . ', Author: ' . $book->author->name . ', Publisher: ' . $book->publisher->name . PHP_EOL;
    //         // echo 'Book: ' . $book->title . ', Author: ' . $book->author->name . ', Publisher: ' . $book->publisher->name . PHP_EOL;
    //     }
    // }



    public function index()
{
    // Eager load author and publisher relationships
    $books = Book::with(['author', 'publisher'])->get();

   
    $booksArray = $books->map(function ($book) {
        return [
            'title' => $book->title,
            'author' => $book->author->name,
            'publisher' => $book->publisher->name,
        ];
    });

   
    return response()->json($booksArray);
}

}