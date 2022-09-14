<?php

class Food {
  private $name;

  public function set_name($value) {
    $this->name = $value;
  }

  public function get_name() {
    return $this->name;
  }

  public function seeds() {
    if ($this->has_seeds == true) {
      return $this->name . " is a fruit, not a vegetable! ";
    }
      else {
        return $this->name . " is a vegetable, not a fruit! ";
      }
}
}

class Vegetable extends Food
{
  var $has_seeds = false;
  var $plant_part;
  function plant_part() {
    return $this->get_name() . " is the " . $this->plant_part . " of the plant. Cool!";
  }
}

class Fruit extends Food
{
  var $has_seeds = true;
  var $ripen_time;
  function time_to_ripen() {
    return $this->get_name() . " typically takes" . $this->ripen_time . " to ripen. <br>";
  }
}

$watermelon = new Fruit;
$watermelon->set_name('Watermelon');
$watermelon->get_name();
$watermelon->color = "red";
$watermelon->ripen_time = " 80-100 days";
echo $watermelon->seeds();
echo $watermelon->time_to_ripen();

$broccoli = new Vegetable;
$broccoli->set_name('Broccoli');
$broccoli->get_name();
$broccoli->color = "green";
$broccoli->plant_part = 'flower';
echo $broccoli->seeds();
echo $broccoli->plant_part();