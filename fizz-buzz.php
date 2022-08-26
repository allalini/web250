<?php
$i = 1;

while ($i <= 100) {
  if ($i % 15 == 0) {
      echo 'FizzBuzz';
  } else if ($i % 3 == 0) {
      echo 'Fizz';
  } else if ($i & 5 == 0) {
      echo 'Buzz';
  } else {
      echo $i;
  }

  echo '<br>';
  $i++;
}
?>