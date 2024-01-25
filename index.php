<?php
include_once __DIR__ . '/Models/Movie.php';

$firstMovie = new Movie('Shutter Island', 'A brief description of Shutter Island', 'Thriller', 2010);
$secondMovie = new Movie('Oppenheimer', 'A brief description of Oppenheimer', 'Storic', 2023);
$thirdMovie = new Movie('Tenet', 'A brief description of Tenet', 'Action', 2020);
$fourthMovie = new Movie('Fight Club', 'A brief description of Fight Club', 'Dramatic', 1999);

$moviesList = [$firstMovie, $secondMovie, $thirdMovie, $fourthMovie];
// var_dump($moviesList);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie oop</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <header>
        <h1 class="text-center mb-5 p-3">Movies with OOP</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($moviesList as $movie) { ?>
                    <article class="col-3">
                        <div class="card" style="width: 100%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie->getName() ?></h5>
                                <p class="card-text"><?php echo $movie->description ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Film category: <?php echo $movie->category ?></li>
                                <li class="list-group-item">Year: <?php echo $movie->releaseYear ?></li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Check info</a>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>