<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'Available bicycles' . '<br>';
  private $weight_kg = 0;
  protected $wheels = 2;
  
  public function name() {
    return "This bicycle is a " . $this->year . " " . $this->brand . " " . $this->model . ".<br>";
  }

  public function weight_lbs() {
    return "This bicycle weighs " . number_format($this->weight_kg * 2.2046226218, 2) . " pounds" . ".<br>";
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  public function wheel_details() {
    $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
    return "This cycle has " . $wheel_string . ".<br>";
  }

  public function weight_kg() {
    return "This cycle weighs " . number_format($this->weight_kg, 2) . ' kg.';
  }

  // Even though $weight_kg is private, weight_kg() is public and has access to weight_kg!

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }
}

class Unicycle extends Bicycle {
  protected $wheels = 1;
}

$bicycle = new Bicycle;

// echo $bicycle->description;
// $bicycle->brand = "Schwinn";
// $bicycle->model = "Wayfarer";
// $bicycle->year = "2022";

// echo $bicycle->name();
// echo $bicycle->weight_lbs();
// $bicycle2 = new Bicycle;

// $bicycle2->brand = "Kulana";
// $bicycle2->model = "Moon Dog";
// $bicycle2->year = "2012";
// echo $bicycle2->set_weight_lbs(15);

// echo $bicycle2->name();
// echo $bicycle2->weight_lbs();

$uni = new Unicycle;

echo "Bicyle: " . $bicycle->wheel_details() . "<br>";
echo "Unicyle: " . $uni->wheel_details() . "<br>";

echo "Set weight using kg<br>";
$bicycle->set_weight_kg(1);
echo $bicycle->weight_kg() . "<br>";
echo $bicycle->weight_lbs() . "<br>";

echo "Set weight using lbs<br>";
$bicycle->set_weight_lbs(2);
echo $bicycle->weight_kg() . "<br>";
echo $bicycle->weight_lbs() . "<br>";

echo "Set weight for Unicycle<br>";
$uni->set_weight_kg(1);
echo $uni->weight_kg() . "<br>";
echo $uni->weight_lbs() . "<br>";