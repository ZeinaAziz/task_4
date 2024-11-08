
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap-5-dist/css/bootstrap.css" rel="stylesheet">
    <title>Category</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Category</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('books.index')}}">Books</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('authors.index')}}">Authors</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('categories.index')}}">Category</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-info" type="submit">Search</button>
        </form>
        </div>
    </div>
</nav>
@yield('content')
<script src="/bootstrap-5-dist/js/popper.min.js"></script>
    <script src="/bootstrap-5-dist/js/jquery-3.7.1.js"></script>
    <script src="/bootstrap-5-dist/js/bootstrap.js"></script>
</body>
</html>


