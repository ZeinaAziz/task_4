@extends('categories.navbar')
@section('content')
    <div style="height:80px"></div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 100px; z-index: 1;">
       <a href="">
            <button class="btn btn-success mt-3 "> Create New Category</button>
       </a>
    </div>


            <div class="container mt-5"  style=" display:flex;align-items:center;justify-content:center;">
                <div class="card mb-3 " style="width: 40rem;border-radius:30px;">
                <div class="card-body">
                    <h5 class="card-title ">{{$category->id}}</h5>
                    <h2 class="card-title"> Title : {{$category->title}}</h2>
                    <p class="card-text">{{$category->email}}</p>
                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-dark">edit</a>
                    <form action="{{route('categories.destroy',$category->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning"> SoftDelete</button>
                    </form>

                </div>
                </div>
            </div>
            @endsection
