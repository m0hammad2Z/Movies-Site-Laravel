<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
        }

        .container {
            margin-top: 50px;
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .links {
            text-align: right;
            margin-bottom: 20px;
        }

        .links a.create-button {
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        .movies .card {
            margin-bottom: 20px;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="title m-b-md">
                <h1>Movies</h1>
            </div>

            <div class="links">
                <a href="/movies/create" class="create-button">Create</a>
            </div>

            <div class="movies">
                <div class="row">
                    @foreach ($movies as $movie)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Movie Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movie->name }}</h5>
                                    <p class="card-text">{{ $movie->genre }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="/movies/{{ $movie->id }}" class="btn btn-sm btn-primary">View</a>
                                        <a href="/movies/{{ $movie->id }}/edit" class="btn btn-sm btn-success">Edit</a>
                                        <form action="/movies/{{ $movie->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
{{-- 
            {{ $movies->links() }}             --}}
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstr

</body>

</html>