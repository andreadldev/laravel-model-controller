<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div>
        @foreach ($movies as $movie)
        <ul class="list-unstyled">
            <li><h3><?php echo $movie->title ?></h3></li>
            <li>Data di uscita: <?php echo $movie->date ?></li>
            <li>Voto: <?php echo $movie->vote ?></li>
        </ul>
        @endforeach
    </div>
</body>
</html>