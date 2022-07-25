<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Team</title>
</head>
<body>
    
    <header>
        <div class="text-center">
            <h1 class="text-primary">Membri del Team</h1>
        </div>
        
    </header>

    <main>
        <div>
            <h3> {{ $team['user1'] }} </h3>
            <h3> {{ $team['user2'] }} </h3>
            <h3> {{ $team['user3'] }} </h3>
            <h3> {{ $team['user4'] }} </h3>
        </div>
    </main>

    <footer>

    </footer>
    
</body>
</html>