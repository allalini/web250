<?php

class Bicycle {

  var $brand;
  var $model;
  var $year;
  var $description = 'Available bicycles' . '<br>';
  var $weight_kg = 10;
  
  function name() {
    return "This bicycle is a " . $this->year . " " . $this->brand . " " . $this->model . ".<br>";
  }

  function weight_lbs() {
    return "This bicycle weighs " . number_format($this->weight_kg * 2.2046226218, 2) . " pounds" . ".<br>";
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

$bicycle = new Bicycle;

echo $bicycle->description;
$bicycle->brand = "Schwinn";
$bicycle->model = "Wayfarer";
$bicycle->year = "2022";

echo $bicycle->name();
echo $bicycle->weight_lbs();

$bicycle2 = new Bicycle;

$bicycle2->brand = "Kulana";
$bicycle2->model = "Moon Dog";
$bicycle2->year = "2012";
echo $bicycle2->set_weight_lbs(15);

echo $bicycle2->name();
echo $bicycle2->weight_lbs();
