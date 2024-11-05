@extends('books.navbar')
@section('content')
    <div class="mt-5 container">
        <h1 class="text-center mb-3">CREATE A NEW CATEGORY</h1>
        <form action="{{route('books.store')}}" method="POST">
            <!-- ان لم نضعها يظهر لنا صفحة page expired  ERORR 419-->
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Book Title :</label>
                <input type="text" name="title" class="form-control" id="title" >
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Book Content :</label>
                <input type="text" name="body" class="form-control" id="body" >
            </div>

            <div class="mb-3">
            <label  class="form-label ">Author :</label>
            <select class="form-select" name="author" aria-label="Default select example">
                <option selected></option>
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
                    <label class="form-check-label" for="flexCheckChecked{{$category->id}}">
                        {{$category->title}}
                    </label>
                </div>
            @endforeach
            </div>
            <div>
                <input type="submit" class="btn btn-success" name="submit" value="ADD BOOK">
            </div>
        </form>
    </div>
@endsection


