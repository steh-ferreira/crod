<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "etecmcm";

$conexao = new MySQLi("$host","$usuario","$senha","$banco");
	echo "Conexão Bem Sucedida!";

if($conexao->connect_error){
	echo "Erro de Conexão!!!";
}
/*else{
	echo "Conexão Bem Sucedida!";
}*/

?>