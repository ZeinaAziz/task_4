@extends('authors.navbar')
@section('content')
   <div class="container mt-5">
        <h1 class="text-center mb-3">Edit author "{{$author->name}}"  :</h1>
        <form action="{{route('authors.update',$author->id)}}" method="POST">
            <!-- ان لم نضعها يظهر لنا صفحة page expired  ERORR 419-->
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$author->name}}" >
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Author Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{$author->email}}" >
            </div>
            <div>
                <input type="submit" class="btn btn-success" name="edit" value="EDIT AUTHOR">
            </div>
        </form>
    </div>
    @endsection
