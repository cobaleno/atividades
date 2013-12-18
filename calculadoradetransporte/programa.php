<?php
$passagens = 0;
$total = 0;

$passagens = $_POST["passagens"];

if ($passagens <= 4){ 
	$total = $passagens * 1.40;
}

else if ($passagens >4){
	$total = ($passagens -4) * 2.80;
	$total = $total + 5.60;
}

echo "O Valor Será : " . number_format($total, 2, ",", ".");


?>
