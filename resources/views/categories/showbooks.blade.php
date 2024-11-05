@extends('categories.navbar')
@section('content')
    <div style="height:40px"></div>

        <h3 class="container">Books in category "{{$category->title}}" :</h3>
        @foreach($books as $book)
            <div class="container mt-5"  style=" display:flex; align-items:center;justify-content:center;">
                <div class="card mb-3 " style="width: 40rem;border-radius:30px;">
                <div class="card-body">
                    <h5 class="card-title ">{{"*".$book->id."*"}}</h5>
                    <h2 class="card-title"> book Title : {{$book->title}}</h2>
                    <p class="card-text">{{$book->body}}</p>
                    <h6 class="card-text d-inline">All categories :</h6>
                    @foreach($book->categories as $cat)
                        {{$cat->title}},
                    @endforeach
                    <br>
                    <div class="mt-3"></div>
                    <a href="{{route('books.show',$book->id)}}" class="btn btn-info">view</a>
                    <a href="{{route('books.edit',$book->id)}}"" class="btn btn-dark">edit</a>
                    <form action="{{route('books.destroy',$book->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> SoftDelete</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
  @endsection
