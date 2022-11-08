<?php
	$hostname= "172.16.0.18";
	$user = "'dtoadm";
	$password = "dtoAdmin2022$lab";
	$database ="dto_keys";
	$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao){
	print "Falha na conexao com o Banco de Dados..";
}
?>