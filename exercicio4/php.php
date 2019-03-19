<?php

$limite = $_POST['numero'];

$i = 1;
$response = '';
while ($i < $limite) {
	if ($i % 2 == 0) {
		$response .= $i;
	} else {
		$response .= '1';
	}
	$response .= ' ';
	$i += 1;
}

echo $response;

?>
