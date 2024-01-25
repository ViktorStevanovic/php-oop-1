<?php
include_once __DIR__ . '/Models/Movie.php';

$firstMovie = new Movie('Shutter Island', 'A brief description of Shutter Island', 'Thriller', 2010);
$secondMovie = new Movie('Oppenheimer', 'A brief description of Oppenheimer', 'Storic', 2023);
$thirdMovie = new Movie('Tenet', 'A brief description of Tenet', 'Action', 2020);
$fourthMovie = new Movie('Fight Club', 'A brief description of Fight Club', 'Dramatic', 1999);


$moviesList = [$firstMovie, $secondMovie, $thirdMovie, $fourthMovie];
var_dump($moviesList);

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
        <h1 class="text-center">Movies with OOP</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <article class="col-3">
                    <?php foreach ($moviesList as $movie) { ?>
                        <div class="card" style="width: 100%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php $movie->getName() ?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">An item</li>
                                <li class="list-group-item">A second item</li>
                                <li class="list-group-item">A third item</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    <?php } ?>
                </article>
            </div>
        </div>
    </main>
</body>

</html>