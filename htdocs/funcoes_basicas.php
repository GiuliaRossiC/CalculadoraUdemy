<?php 

//isset verifica se a variavel foi iniciada

$valor = null;
if(isset($valor)){
	echo "variavel iniciada";	
}

//isempty verifica se variavel esta vazia
//true -> '',0,'0',false, null,array()
//false ->*/

$valor = '0';
if(empty($valor)){
	echo "variavel vazia";
}

//is_numeric() verifica se é um numero ou uma string numerica
$valor = 'asdqa';
if(is_numeric($valor)){
	echo "variável é numero";
}
?>
