<?php

$num = $_POST['numero'];

$str = '';

for ($i = 1;$i < 11;$i++) {
	$str .= ''.$num.' x '.$i.' = '.($num * $i).'</br>';
}

echo $str;

?>