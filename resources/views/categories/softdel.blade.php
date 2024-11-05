@extends('categories.navbar')
@section('content')
    <div style="height:40px"></div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 100px;    z-index: 1;">
       <a href="{{route('categories.create')}}">
            <button class="btn btn-success mt-3"> Add New Category</button>
       </a>
    </div>

        @foreach($categories as $category)
            <div class="container mt-5"  style=" display:flex;align-items:center;justify-content:center;">
                <div class="card mb-3 " style="width: 40rem;border-radius:30px;">
                <div class="card-body">
                    <h5 class="card-title ">{{$category->id}}</h5>
                    <h2 class="card-title"> Title : {{$category->title}}</h2>
                    <form action="{{route('categories.forcedel',$category->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{route('categories.restore',$category->id)}}" class="btn btn-warning">Restore</a>
                </div>
                </div>
            </div>
        @endforeach
  @endsection
