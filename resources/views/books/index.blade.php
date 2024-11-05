@extends('books.navbar')
@section('content')
    <div style="height:40px"></div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 126px;    z-index: 1;">
       <a href="{{route('books.create')}}">
            <button class="btn btn-success mt-3"> Add New book</button>
       </a>
    </div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 80px;    z-index: 1;">
    <form action="{{route('books.deleteAll')}}" method="post" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3">Delete All Books</button>
     </form>
    </div>

    <div class="container" style="position: fixed; left: 50px;   bottom: 170px; z-index: 1;">
        <a href="{{route('books.softdel')}}">
                <button class="btn btn-info mt-3"> Show All books Soft Delete</button>
        </a>
    </div>
        @foreach($books as $book)
            <div class="container mt-5"  style=" display:flex; align-items:center;justify-content:center;">
                <div class="card mb-3 " style="width: 40rem;border-radius:30px;">
                <div class="card-body">
                    <h5 class="card-title ">{{"*".$book->id."*"}}</h5>
                    <h2 class="card-title"> book Title : {{$book->title}}</h2>
                    <p class="card-text">{{$book->body}}</p>
                    <h5 class="card-text">Written by  :{{$book->author->name}}</h5>
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
