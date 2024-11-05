@extends('authors.navbar')
@section('content')
    <div style="height:40px"></div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 126px;    z-index: 1;">
       <a href="{{route('authors.create')}}">
            <button class="btn btn-success mt-3"> Add New Author</button>
       </a>
    </div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 80px;    z-index: 1;">
    <form action="{{route('authors.deleteAll')}}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3">Delete All Authors</button>
    </form>
    </div>

        @foreach($authors as $author)
            <div class="container mt-5"  style=" display:flex; align-items:center;justify-content:center;">
                <div class="card mb-3 " style="width: 40rem;border-radius:30px;">
                <div class="card-body">
                    <h5 class="card-title ">{{$author->id}}</h5>
                    <h2 class="card-title"> Author Name : {{$author->name}}</h2>
                    <p class="card-text">{{$author->email}}</p>
                    <a href="{{route('authors.show',$author->id)}}" class="btn btn-info">view</a>
                    <a href="{{route('authors.edit',$author->id)}}" class="btn btn-dark">edit</a>
                    <form action="{{route('authors.destroy',$author->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                    <a href="{{route('authors.showbooks',$author->id)}}" class="btn btn-primary">view books</a>
                </div>
                </div>
            </div>
        @endforeach
    @endsection
