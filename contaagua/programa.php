<?php

$mes2 = 0;
$mes3 = 0;
$media = 0;
$mes1 = $_POST["mes1"];
$mes2 = $_POST["mes2"];
$mes3 = $_POST["mes3"];

$mediaConta = ($mes1+$mes2+$mes3)/3;
echo "Sua Média da Conta é " . $mediaConta . "<br/>";
	

$mediaConsumo=($media / 2.50);
echo "Sua Média de Consumo é " . $mediaConsumo . "m³ <br/>";

echo "A Previsão da Sua Próxima Conta com o Aumento da Tarifa é de R$ " . ($mediaConsumo * 3.50);

?>
