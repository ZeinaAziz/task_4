
@extends('authors.navbar')
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
                    <h5 class="card-title ">{{$author->id}}</h5>
                    <h2 class="card-title"> Title : {{$author->name}}</h2>
                    <p class="card-text">{{$author->email}}</p>
                    <a href="{{route('authors.edit',$author->id)}}" class="btn btn-dark">edit</a>
                  

                </div>
                </div>
            </div>
            @endsection
