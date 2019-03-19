<?php

$limite = $_POST['numero'];

$fib = '1 1';
$ant = 1;
$pos = 1;
while (true) {
	$temp = $pos;
	$pos = $ant + $pos;
	$ant = $temp;
	if ($pos < $limite)
		$fib .= ' '.$pos;
	else break;
}

echo $fib;

?>
