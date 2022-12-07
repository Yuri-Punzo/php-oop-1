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

    public function filmEvaluation($rating)
    {
        if ($rating >= 7) {
            return "Recommended Movie";
        } elseif ($rating >= 5 && $rating <= 6) {
            return "Average Movie";
        } else {
            return "Bad Movie ! Bad !";
        }
    }

    function __construct($title, $duration, $rating, $description)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->rating = $rating;
        $this->description = $description;
    }
}

$pulpFiction = new Movie("Pulp Fiction", 154, 9, "lorem ipsum dolor sit amet");
$nightmareBeforeChristmas = new Movie("Nightmare Before Christmas", 76, 9, "lorem ipsum dolor");

echo $pulpFiction;

?>

<!-- class Movie
{

public $title;
public $desc;
public $link;
/* Define a static prop */
public static $type = 'Movie';

/**
* @param string $title - a string with the movie name
* */
function __construct($title, $desc, $link)
{
$this->title = $title;
$this->desc = $desc;
$this->link = $link;
}

public static function returnDetails()
{
echo 'Movie details';
}
}

$movie = new Movie('Murder', 'lorem murder', 'https://');
/* Access static prop */
var_dump(Movie::$type);
/* Access stati methods */

Movie::returnDetails();

/* $matrix = new Movie('Matrix', 'lorem matrix', 'https://matrix.com');
$avatar = new Movie('Avatar', 'lorem avatar', 'https://avatar.com');
var_dump($matrix);
var_dump($avatar); -->