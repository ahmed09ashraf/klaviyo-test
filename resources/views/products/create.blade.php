<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
{{--    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">--}}


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        *{
            padding: 10px;
        }

    </style>

</head>
<body>
    <div class="container">
        <h1>Create Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Book Name:</label>
                <input type="text" name="name" id="name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="image">Image URL:</label>
                <input type="text" name="image" id="image" class="form-control" >
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input name="author" id="author" class="form-control"></input>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input name="price" id="price" class="form-control"></input>
            </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>

</body>
