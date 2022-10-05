<?php

class Bird {

  var $commonName;
  var $food;
  var $habitat;
  var $nestPlacement;
  var $clutchSize;
  var $conservationLevel;
  var $song;

  function birdFacts() {
    return "The " . $this->commonName . " eats " . $this->food . " and places its nest on " . $this->nestPlacement . ". These birds typically lay " . $this->clutchSize . " per clutch. Their conservation level of concern is " . $this->conservationLevel . ". <br>";
  }

  function birdSong() {
    return "This bird's song sounds like " . $this->song . "<br><br>";
  }
}

$bird1 = new Bird;
$bird1->commonName = "Eastern Towhee";
$bird1->food = "seeds, fruits, insects, spiders";
$bird1->nestPlacement = "the gound";
$bird1->clutchSize = "2-6 eggs";
$bird1->conservationLevel = "low";
$bird1->song = "drink-your-tea!";


$bird2 = new Bird;
$bird2->commonName = "Indigo Bunting";
$bird2->food = "small seeds, berries, buds, and insects";
$bird2->nestPlacement = "fields and on the edges of woods, roadsides, and railroad rights-of-way";
$bird2->clutchSize = "3-4 eggs";
$bird2->conservationLevel = "low";
$bird2->song = "what! what!";

echo $bird1->birdFacts();
echo $bird1->birdSong();
echo $bird2->birdFacts();
echo $bird2->birdSong();
