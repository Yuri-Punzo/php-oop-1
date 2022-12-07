<!-- 
Consegna:
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe 'Movie'
    - all'interno della classe sono dichiarate delle variabili d'istanza
    - all'interno della classe è definito un costruttore
    - all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
 -->

<?php

class Movie
{
    public $title;
    public $duration;
    public $rating;
    public $description;

    public function filmEvaluation($movie)
    {
        if ($movie->rating >= 7) {
            return "Recommended Movie";
        } elseif ($movie->rating >= 5 && $movie->rating <= 6) {
            return "Average Movie";
        } else {
            return "Bad Movie ! Bad !";
        }
    }

    function __construct(string $title, $duration, $rating, string  $description)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->rating = $rating;
        $this->description = $description;
    }
}

$movies = [
    $pulpFiction = new Movie("Pulp Fiction", 154, 9, "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate et, neque possimus voluptatum dolore tenetur eveniet maxime adipisci laboriosam quis voluptate tempora, minus qui praesentium. In, consequuntur."),
    $nightmareBeforeChristmas = new Movie("Nightmare Before Christmas", 76, 9, "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate et, neque possimus voluptatum dolore tenetur eveniet maxime adipisci laboriosam quis voluptate tempora, minus qui praesentium. In, consequuntur.")
];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Movies</title>
</head>

<body>
    <div class="container pt-5">
        <div class="row pt-5">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">
                                <?= $movie->title ?>
                            </h3>
                            <!-- /title -->
                            <h5 class="pt-2">
                                Rating: <?= $movie->rating ?>
                            </h5>
                            <!-- /rating -->
                            <h5 class="pt-1">
                                Duration: <?= $movie->duration ?>
                            </h5>
                            <!-- /duration -->
                            <h5 class="pt-1">Description: </h5>
                            <p class="card-text">
                                <?= $movie->description ?>
                            </p>
                            <!-- /description -->
                            <h5 class="pt-1">Personal Evaluation: </h5>
                            <p class="card-text">
                                <?= $movie->filmEvaluation($movie) ?>
                            </p>
                            <!-- personal evalutaion -->
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>