<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Movie</title>

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

        .edit-form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="edit-form">
            <h1 class="display-4 text-center">Edit Movie</h1>

            <form action="/movies/{{ $movie->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Name of the movie</label>
                    <input type="text" class="form-control" id="title" name="name" value="{{ $movie->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="{{ $movie->genre }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $movie->description }}</textarea>
                </div>


                <button type="submit" class="btn btn-primary">Update Movie</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
