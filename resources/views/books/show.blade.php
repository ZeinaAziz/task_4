@extends('books.navbar')
@section('content')

    <div style="height:80px"></div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 100px; z-index: 1;">
       <a href="">
            <button class="btn btn-success mt-3 "> Create New Post</button>
       </a>
    </div>


            <div class="container mt-5"  style=" display:flex;align-items:center;justify-content:center;">
                <div class="card mb-3 " style="width: 40rem;border-radius:30px;">
                <div class="card-body">
                    <h5 class="card-title ">{{$book->id}}</h5>
                    <h2 class="card-title"> Title : {{$book->title}}</h2>
                    <p class="card-text">{{$book->body}}</p>
                    <h5 class="card-text">{{$book->author->name}}</h5>
                    <h6 class="card-text d-inline">All categories :</h6>
                    @foreach($book->categories as $cat)
                        {{$cat->title}},
                    @endforeach
                    <br>
                    <a href="{{route('books.edit',$book->id)}}" class="btn mt-3 btn-dark">edit</a>
                    <form action="{{route('books.destroy',$book->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn mt-3 btn-warning"> SoftDelete</button>
                    </form>

                </div>
                </div>
            </div>
            @endsection
