@php
    
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Primi Passi Laravel</title>
</head>
<body>

<header>
    <div>
        <a href=" {{ route("home") }} ">home</a>
        <a href=" {{ route("about_us")}}">About Us</a>
        <a href=" {{ route("team")}}">Team</a>
    </div>
</header>

<main>
    <div class="container">
        <h1 class="text-center">HELLO WORLD!</h1>
    </div>
</main>

<footer>

</footer>

    
</body>
</html>