<?php

$consulta = "SELECT * FROM `moedas` WHERE `nome` LIKE '%$moedaR%'";
$resultado = $conexao->query($consulta) or die($conexao->error);



$dado = $resultado->fetch_array();
$moeda = $dado["nome"];
$valor = $dado["valor"];
$valordolar=$valor;

?>