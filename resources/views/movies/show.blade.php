<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Details</title>

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

        .movie-details {
            text-align: center;
            margin-top: 30px;
        }

        .movie-poster {
            max-width: 100%;
            height: auto;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="movie-details">
            <h1 class="display-4">{{ $movie->name}}</h1>
            <img src="https://via.placeholder.com/400x600" alt="Inception Poster" class="movie-poster img-fluid">
            <p class="lead">Genre: {{ $movie->genre }}</p>
            <p class="lead">Description: {{ $movie->description }}</p>

            <a href="/movies" class="btn btn-primary btn-back">Back to Movies</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
