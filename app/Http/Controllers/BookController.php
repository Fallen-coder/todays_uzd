<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index',compact('books'));
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        try{
        $val=$request->validate([
            'title' => 'required|unique:books|max:255',
            'author' => 'required|max:255',
            'released_at' => 'required',
        ]);
        $book = Book::create($val);
        }catch(ValidationError $e){
            \log::debug('validation error'.$e->getMessage());
        }
        return redirect('/books/' . $book->id);
    }

    public function show($id) {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    public function edit($id) {
        $book = Book::find($id);
        return view('books.edit', compact('book'));;
    }

    public function update(Request $request, $id) {
        try{
        $book = Book::find($id);
        $val=$request->validate([
            'title' => 'required|unique:books|max:255',
            'author' => 'required|max:255',
            'released_at' => 'required',
        ]);
        $book->update($val);
        }catch(ValidationError $e){
            \log::debug('validation error'.$e->getMessage());
        }
        return redirect('/books/' . $book->id);
    }
    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books') ;
    }
}
