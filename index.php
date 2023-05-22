<?php

class Movie { //classe MOVIE

  public $name; //variabili d'istanza
  public $rating;
  public $approved;

  function __construct($_name, $_rating){ //costruttore
    $this->name = $_name;
    $this->rating = $_rating;
  }

  public function getRating(){ //creo un metodo
    if($this->rating > 4) {
      $this->approved = "Si";
    } else {
      $this->approved = "No";
    }
  }
}

$film1 = new Movie("Fast X",3); //creo oggetto class movie

$film2 = new Movie("Guardiani della Galassia Vol.3", 5);

$film3 = new Movie("L'esorcista del Papa", 4);

$film1->getRating(); //richiamo il metodo
$film2->getRating();
$film3->getRating();

echo "Film 1:<br>";
echo "Nome: " . $film1->name . "<br>";
echo "Rating: " . $film1->rating . "<br>";
echo "Approvato: " . $film1->approved . "<br><br>";

echo "Film 2:<br>";
echo "Nome: " . $film2->name . "<br>";
echo "Rating: " . $film2->rating . "<br>";
echo "Approvato: " . $film2->approved . "<br><br>";

echo "Film 3:<br>";
echo "Nome: " . $film3->name . "<br>";
echo "Rating: " . $film3->rating . "<br>";
echo "Approvato: " . $film3->approved . "<br>";
?>