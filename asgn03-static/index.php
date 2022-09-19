<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>asgn03 Inheritance</title>
</head>

<body>
  <h1>Inheritance Examples</h1>

  <?php
  include 'Bird.php';

  $bird = new Bird;
  echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

  $fly_catcher = new YellowBelliedFlyCatcher;
  echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

  $kiwi = new Kiwi;
  $kiwi->flying = false;
  echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
  echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>";

  echo "Before using create() method:<br>";
  echo "Bird count: " . Bird::$instance_count . "<br>";
  echo "Flycatcher count: " . Bird::$instance_count . "<br>";
  echo "Kiwi count: " . Bird::$instance_count . "<br>";

  Bird::create();
  YellowBelliedFlyCatcher::create();
  Kiwi::create();
  echo "After using create() method:<br>";
  Bird::$instance_count;
  echo "Bird count: " . Bird::$instance_count . "<br>";
  echo "Flycatcher count: " . Bird::$instance_count . "<br>";
  echo "Kiwi count: " . Bird::$instance_count . "<br>";
  ?>
</body>

</html>