<?php
namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('categories.index',compact('categories'));
    }

    public function create()
    {
        $authors=Author::all();
        return view('categories.create',compact('authors'));
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->title = $request->title;
        $category->save();
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show',compact('category'));
        ;

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $authors=Author::all();
        return view('categories.edit',compact('authors','category'));
    }


    public function update(Request $request, $id)
    {
        $category= Category::findOrFail($id);
        $category->title = $request->title;
        $category->save();
        return redirect()->route('categories.index');
    }
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index');
    }
    public function showdelcategories()
    {
        $categories=Category::onlyTrashed()->get();
        return view('categories.softdel',compact('categories'));
    }
    public function restore($id){
        Category::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
    public function forceDelete($id){
        Category::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }

    public function deleteAll()
    {
        Category::withTrashed()->forceDelete();
        return redirect()->back();
    }
    public function showbooks($id)
    {
        $category = Category::findOrFail($id);
        $books=$category->books;
        return view('categories.showbooks',compact('books','category'));
    }
}
