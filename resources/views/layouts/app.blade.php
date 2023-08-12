<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/reset-min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/css/satellite-min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    {{-- <link rel="stylesheet" href="https://unpkg.com/instantsearch.css@7/themes/satellite-min.css"/> --}}

    <title>@yield('title')</title>
</head>

<body>
        <main class="py-4">
            @yield('content')
        </main>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="{{asset('/js/app.js')}}"></script>
    <script src="{{asset('/js/search.js')}}"></script>
    
    
    <script>
    function dropDown() {
        const dropdownContent = document.getElementById("myDropdown");
        dropdownContent.classList.toggle("show");
    }
    </script>


</body>
</html>