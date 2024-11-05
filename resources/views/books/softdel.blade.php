@extends('books.navbar')
@section('content')
    <div style="height:40px"></div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 100px;    z-index: 1;">
       <a href="{{route('books.create')}}">
            <button class="btn btn-success mt-3"> Add New book</button>
       </a>
    </div>

        @foreach($books as $book)
            <div class="container mt-5"  style=" display:flex;align-items:center;justify-content:center;">
                <div class="card mb-3 " style="width: 40rem;border-radius:30px;">
                <div class="card-body">
                    <h5 class="card-title ">{{$book->id}}</h5>
                    <h2 class="card-title"> Title : {{$book->title}}</h2>
                    <p class="card-text">{{$book->body}}</p>
                    <h5 class="card-text">{{$book->author->name}}</h5>
                    <form action="{{route('books.forcedel',$book->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                    <a href="{{route('books.restore',$book->id)}}" class="btn btn-warning">Restore</a>
                </div>
                </div>
            </div>
        @endforeach
    @endsection
