<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors=Author::all();
        return view('authors.index',compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }
    public function store(Request $request)
    {

        $author = new Author();
        $author->name = $request->name;
        $author->email = $request->email;
        $author->save();
        return redirect()->route('authors.index');
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show',compact('author'));

    }


    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit',compact('author'));
    }


    public function update(Request $request, $id)
    {
        $author=Author::findOrFail($id);
        $author->name=$request->name;
        $author->email=$request->email;
        $author->save();
        return redirect()->route('authors.index');
    }
    public function destroy($id)
    {
        Author::destroy($id);
        return redirect()->route('authors.index');
    }
    public function showdelauthors()
    {
        $authors=Author::onlyTrashed()->get();
        return view('authors.softdel',compact('authors'));
    }
    public function restore($id){
        Author::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
    public function deleteAll()
    {
        Author::withTrashed()->forceDelete();
        return redirect()->back();
    }
    public function showbooks($id)
    {
        $author = Author::findOrFail($id);
        $books=$author->books;
        return view('authors.showbooks',compact('books'));
    }

}
