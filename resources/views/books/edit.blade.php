@extends('books.navbar')
@section('content')
   <div class="container mt-5">
        <h1 class="text-center mb-3">Edit book "{{$book->title}}"  :</h1>
        <form action="{{route('books.update',$book->id)}}" method="POST">
            <!-- ان لم نضعها يظهر لنا صفحة page expired  ERORR 419-->
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Book Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{$book->title}}" >
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Book Content</label>
                <input type="text" name="body" class="form-control" id="body" value="{{$book->body}}" >
            </div>
            <div class="mb-3">
            <label  class="form-label ">Author :</label>
            <select class="form-select" name="author" aria-label="Default select example">
                <option value="{{$book->author_id}}" selected>{{$book->author->name}}</option>
                @foreach($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group mb-3">
            <h6 class="card-text d-inline">Select categories :</h6>
            @foreach($categories as $category)
                <div class="form-check">
                    <input name="categories[]" class="form-check-input" type="checkbox" value="{{$category->id}}" id="flexCheckChecked{{$category->id}}"
                        @if(in_array($category->id, $book->categories->pluck('id')->toArray())) checked @endif>
                    <label class="form-check-label" for="flexCheckChecked{{$category->id}}">
                        {{$category->title}}
                    </label>
                </div>
            @endforeach
            </div>
            <div>
                <input type="submit" class="btn btn-success"  value="EDIT book">
            </div>
        </form>
    </div>
    @endsection
