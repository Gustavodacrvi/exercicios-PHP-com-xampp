<?php

$numero = $_POST['entrada'];

$i = 2;
$primo = true;
while (true) {
  if ($numero == $i) {
    break;
  }
  if ($numero % $i == 0) {
    $primo = false;
    break;
  }
  $i++;
}


if ($primo) {
  echo 'O número dado é primo';
} else {
  echo 'O número dado não é primo';
}

?>
