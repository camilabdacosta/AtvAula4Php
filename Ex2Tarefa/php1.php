<?php

$cons = $_POST["consumo"];
$precgaso = $_POST["preco"];

$dis = $cons*10;
$cal = ($dis*$precgaso)/10;


echo "<p>A distancia foi de $dis KM, o consumo de gasolina foi de $cons L, o preço pago por litro é R$ $precgaso e foram gastos R$ $cal.</p>";

?>
