<?php

$hostname="localhost";
$user="root";
$senha="";
$banco="hop";
$conexao=mysqli_connect($hostname,$user,$senha,$banco);

if(!$conexao){
	print "Falha na conexão com o BD";
}

?>