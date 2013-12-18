<?php

date_default_timezone_set("Brazil/East");
$dataAtual = getdate();

echo "<b>Hora Certa: <b/>";
echo '<meta http-equiv="refresh" content="1">';

$diaSemana = $dataAtual["wday"];

switch($diaSemana){

	case 0:
echo "Domingo";
break;
	case 1:
echo "Segunda";
break;
	case 2:
echo "Terça";
break;
	case 3:
echo "Quarta";
break;
	case 4:
echo "Quinta";
break;
	case 5:
echo "Sexta";
break;
	case 6:
echo "Sábado";
break;
}

echo ", ";


echo $dataAtual["mday"];
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"];

echo "<br/>" . "<br/>";

echo $dataAtual["hours"] -1;
echo ":";
echo $dataAtual["minutes"];
echo ":";
echo $dataAtual["seconds"] . "<br/>" . "<br/>";


?>
