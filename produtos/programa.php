<?php
$codigo = 0;

$codigo = $_POST["codigo"];


if ($codigo == 1){
	echo "Caneta 1.20";
}
else if ($codigo == 2){
	echo "Lápis 0.80";
}
else if ($codigo == 3){
	echo "Caderno 4.50";
}
else if ($codigo == 4){
	echo "Lápis de Cor 4.70";
}
else{
	echo "Produto Não Cadastrado";
}
?>
