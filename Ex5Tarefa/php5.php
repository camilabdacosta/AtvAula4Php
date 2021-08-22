<?php

$valReal = $_POST["valReal"];
$valDolar = 5.41;



$conversao = $valReal * $valDolar;

echo "<p>O dólar está R$ $valDolar e o valor da conversão de R$ $valReal para dólar é de US$ $conversao.</p>";

?>