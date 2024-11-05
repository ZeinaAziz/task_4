@extends('categories.navbar')
@section('content')
    <div style="height:40px"></div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 126px;    z-index: 1;">
       <a href="{{route('categories.create')}}">
            <button class="btn btn-success mt-3"> Add New Category</button>
       </a>
    </div>

    <div class="container" style="position: fixed; left: 50px;   bottom: 80px;    z-index: 1;">
        <form action="{{route('categories.deleteAll')}}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn mt-3 btn-danger"> Delete All Categoies</button>
        </form>
    </div>
    <div class="container" style="position: fixed; left: 50px;   bottom: 170px; z-index: 1;">
        <a href="{{route('categories.softdel')}}">
                <button class="btn btn-info mt-3"> Show All categories Soft Delete</button>
        </a>
    </div>
        @foreach($categories as $category)
            <div class="container mt-5"  style=" display:flex; align-items:center;justify-content:center;">
                <div class="card mb-3 " style="width: 40rem;border-radius:30px;">
                <div class="card-body">
                    <h5 class="card-title ">{{$category->id}}</h5>
                    <h2 class="card-title ">{{$category->title}}</h2>
                    <a href="{{route('categories.show',$category->id)}}" class="btn btn-info">view</a>
                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-dark">edit</a>
                    <form action="{{route('categories.destroy',$category->id)}}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> SoftDelete</button>
                    </form>
                    <a href="{{route('categories.showbooks',$category->id)}}" class="btn btn-primary">view books</a>
                </div>
                </div>
            </div>
        @endforeach
    @endsection
