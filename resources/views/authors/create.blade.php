@extends('authors.navbar')
@section('content')

    <div class="mt-5 container">
        <h1 class="text-center mb-3">CREATE A NEW CATEGORY</h1>
        <form action="{{route('authors.store')}}" method="POST">
            <!-- ان لم نضعها يظهر لنا صفحة page expired  ERORR 419-->
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Author Name :</label>
                <input type="text" name="name" class="form-control" id="name" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Author Email :</label>
                <input type="email" name="email" class="form-control" id="email" >
            </div>

            <div>
                <input type="submit" class="btn btn-success" name="submit" value="ADD AUTHOR">
            </div>
        </form>
    </div>

    @endsection
