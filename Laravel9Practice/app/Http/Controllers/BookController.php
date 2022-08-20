<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index', compact('books'));
    }
    public function search(Request $request){
        $search = $request->input('search');
        $books = Book::query()
            ->where('title', 'LIKE', "%{$search}%")->get();
        return view('books.search', compact('books'));
    }
}
