<?php

$num = $_POST['numero'];

$result = $num;
while ($num != 1) {
	$num -= 1;
	$result = $num * $result;
}

echo $result;

?>
