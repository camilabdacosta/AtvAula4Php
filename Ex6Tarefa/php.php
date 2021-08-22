
<?php

$venda = $_POST["venda"];
$comissao = $_POST["comissao"];

$total = ($venda*$comissao)/100;

echo "<p>O total da compra e $venda, a comissao e de $comissao e o total de .</p>";

?>