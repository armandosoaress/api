<?php 
if ($novamoeda !='' && $valorm !='') {
$consulta = "INSERT INTO `moedas` (`id`, `nome`, `valor`) VALUES (NULL, '$novamoeda', '$valorm')";
$resultado = $conexao->query($consulta) or die($conexao->error);

}

?>