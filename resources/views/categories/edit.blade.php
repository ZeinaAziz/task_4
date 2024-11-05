@extends('categories.navbar')
@section('content')
   <div class="container mt-5">
        <h1 class="text-center mb-3">Edit Category "{{$category->title}}"  :</h1>
        <form action="{{route('categories.update',$category->id)}}" method="POST">
            <!-- ان لم نضعها يظهر لنا صفحة page expired  ERORR 419-->
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">ategory Name :</label>
                <input type="text" name="title" class="form-control" id="name" value="{{$category->title}}" >
            </div>
            <div>
                <input type="submit" class="btn btn-success" name="edit" value="EDIT category">
            </div>
        </form>
    </div>
    @endsection
