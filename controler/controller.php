
<?php
include '../model/conexao.php';

$moedaR ='erro';
$totalR = '0';
$margemR = '0';
$erro ='susseso';
$novamoeda='';
$valor='';



if (isset($_GET['moeda'])) {
$moedaR = $_GET['moeda'];
                           }
if (isset($_GET['hotel'])) {
             $totalR = $_GET['hotel'];
                           }
if (isset($_GET['margem'])){
        $margemR = $_GET['margem'];
                          }


////////////////////cadastro de moeda///////////////

if (isset($_GET['novamoeda'])){
$novamoeda = $_GET['novamoeda'];

}
if (isset($_GET['valor'])){
    $valorm = $_GET['valor'];
    }
////////////////////////////////////////////////////////
         
                    

include '../model/cadastrarmoeda.php';

include_once '../model/consulta.php';



$total=$totalR;
$converterparamoeda = 1 / $valordolar * $total;
$lucro = $converterparamoeda;
$margempercent =$margemR;


$margem = ($margempercent / 100) * $converterparamoeda +$converterparamoeda ;
$lucro=$margem - $lucro;

if ($moedaR =='erro' && $margemR == '0' && $totalR == '0') {
    $data = array(
        "status"=> 'INFORME OS PARAMENTROS NECESSSARIOS', 
        "moeda" => ' parametro -> moeda',
        "valor do hotel em reais" => 'parametro -> hotel',
        "margem" =>'parametro -> margem'
    
       );
}
else {
    $data = array(
        "status"=> 'ERROR NÃO ENCONTRADO', 

    );
}



if ($novamoeda !='' && $valorm !='') {
    $data = array(
        "status"=> 'moeda cadastrada com sucesso', 
        "moeda" => $novamoeda, 
        "valor da moeda" => $valorm, 

       
       );
}if ($moedaR !='erro' && $margemR != '0' && $totalR != '0') {
    $data = array(
        "status"=> $erro, 
        "moeda" => $moeda, 
        "valor da moeda" => $valordolar .' $', 
        "valor do hotel em reais" => $total .' R$',
        "valor do hotel convertido" => $converterparamoeda .' $',
        "margem" =>$margempercent .'%',
        "total a pagar pelo cliente" => $margem,
        "lucro" => $lucro.' R$'
       
       );
}



?>
