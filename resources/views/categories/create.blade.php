@extends('categories.navbar')
@section('content')

    <div class="mt-5 container">
        <h1 class="text-center mb-3">CREATE A NEW CATEGORY</h1>
        <form action="{{route('categories.store')}}" method="POST">
            <!-- ان لم نضعها يظهر لنا صفحة page expired  ERORR 419-->
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name :</label>
                <input type="text" name="title" class="form-control" id="title" >
            </div>
            <div>
                <input type="submit" class="btn btn-success" name="submit" value="ADD category">
            </div>
        </form>
    </div>

    @endsection
