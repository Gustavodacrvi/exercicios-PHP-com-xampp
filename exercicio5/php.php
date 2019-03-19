<?php

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$oper = $_POST['operacao'];

if ($oper == 'Somar') {
	echo $num1 + $num2;
} else if ($oper == 'Subtrair') {
	echo $num1 - $num2;
} else if ($oper == 'Multiplicar') {
	echo $num1 * $num2;
} else {
	echo $num1 / $num2;
}

?>
