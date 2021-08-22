<?php

$venda = $_POST["venda"];



$descontoCli = ($venda10)/100;
$icms = ($venda12)/100;
$comissao = ($venda*5)/100;

echo "<p>O desconto do cliente foi de R$ $descontoCli, o valor do ICMS foi de R$ $icms e a comissão do vendedor foi de R$ $comissao.</p>";

?>