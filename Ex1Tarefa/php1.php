<?php

$nome = $_POST["nome"];
$nota1 = $_POST["nota01"];
$nota2 = $_POST["nota02"];
$peso1 = $_POST["peso01"];
$peso2 = $_POST["peso02"];

$notas = ($nota1 * $peso1)+($nota2 * $peso2);
$media = $notas/($peso1+$peso2);

echo "<p>Caro(a) aluno(a) $nome, de acordo com os dados fornecidos, sua média na unidade Programação WEB é $media</p>";

?>