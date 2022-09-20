<?php

class Bird
{
  public static $instance_count = 0;
  public static $egg_num = 0;
  var $habitat;
  var $food;
  var $nesting = "tree";
  var $conservation;
  var $song = "chirp";
  var $flying = true;
  var $name;

  public static function create()
  {
    $class_name = get_called_class();
    $obj = new $class_name;
    self::$instance_count++;
    return $obj;
  }

  function can_fly()
  {
    $flying_string = $this->flying ? " can fly" : " is stuck on the ground";
    return  $flying_string;
  }
}

class YellowBelliedFlyCatcher extends Bird
{
  var $name = "yellow-bellied flycatcher";
  var $diet = "mostly insects.";
  var $song = "flat chilk";
  var $flying = true;
}

class Kiwi extends Bird
{
  var $name = "kiwi";
  var $diet = "omnivorous";
  var $flying = false;
}