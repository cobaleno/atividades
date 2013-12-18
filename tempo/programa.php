<?php

$textoInicio = $_POST["inicio"];
$textoFim = $_POST["fim"];

$textoInicio = explode("/", $textoInicio);
$textoFim = explode("/", $textoFim);

	$tempoInicio = mktime (0, 0, 0, $textoInicio[1], $textoInicio[0], $textoInicio[2]);
	$tempoFim = mktime (0, 0, 0, $textoFim[1], $textoFim[0],
$textoFim[2]);

$tempoAtual = time();

if ($tempoAtual >= $tempoInicio and $tempoAtual <= $tempoFim){
	echo "O Tempo Está Bom Para Comprar";
}
else {
	echo "O Tempo Não Está Bom Para Comprar";
}



?>
