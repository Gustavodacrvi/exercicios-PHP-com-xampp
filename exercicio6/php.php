<?php

/*
  Faça um programa em PHP que a partir do número informado, exiba as tabuadas dos números de 2 até o número informado.

  Exemplo: número: 4

  1 * 2 = 2
  2 * 2 = 3
  ...

  .
  .
  .
  .

  1 * 4 = 4
  2 * 4 = 8

*/

$numero = $_POST['entrada'];


$res = '';

for ($i = 2 ; $i <= $numero ; $i++) {
  $res .= '<h5>Tabuado do '.$i.'</h5>';
  
  for ($j = 1 ; $j <= 10 ; $j++) {
    $res .= $i.' * '.$j.' = '.$i * $j.'<br/>';
  }

}

// loop interior<br/>loop interior<br/>loop interior<br/>loop interior<br/>loop interior<br/>

echo $res;

?>
