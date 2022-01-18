<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {


        // $books = Book::all();

        // dd($books);
        $data = [
            'title' => 'Ini Senarai Buku',
            'books' => Book::all()
        ];
        
        return view('books.index', $data );
    }
}
