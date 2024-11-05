<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books=Book::all();
        return view('books.index',compact('books'));
    }

    public function create()
    {
        $categories=Category::all();
        $authors=Author::all();
        return view('Books.create',compact('authors','categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' =>['required','string'],
            'body' =>['required','string'],
            'author' =>['required','integer'],
            'categories' =>['required','array'],
        ]);
        $book = new Book();
        $book->title = $request->title;
        $book->body = $request->body;
        $book->author_id = $request->author;
        $book->save();
        $book->categories()->sync($request->categories);
        return redirect()->route('books.index');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show',compact('book'));

    }
    public function edit($id)
    {
        $categories=Category::all();
        $book = Book::findOrFail($id);
        $authors=Author::all();
        $cats=$book->categoreis;
        return view('books.edit',compact('authors','book','categories','cats'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' =>['required','string'],
            'body' =>['required','string'],
            'author' =>['required','integer'],
            'categories' =>['required','array'],
        ]);
        $book=Book::findOrFail($id);
        $book->title = $request->title;
        $book->body = $request->body;
        $book->author_id = $request->author;
        $book->save();
        $book->categories()->sync($request->categories);
        return redirect()->route('books.index');
    }
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->route('books.index');
    }
    public function showdelBooks()
    {
        $books=Book::onlyTrashed()->get();
        return view('books.softdel',compact('books'));
    }
    public function restore($id){
        Book::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
    public function forceDelete($id){
        Book::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
    public function deleteAll()
    {
        Book::withTrashed()->forceDelete();
        return redirect()->back();
    }
}
