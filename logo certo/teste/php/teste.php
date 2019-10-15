<?php


	include ("conexion.php");
	$sql="select * from produto";

$sql="select * from produto";
$consulta=mysqli_query($con,$sql);//consulta na tabela
$registros=mysqli_num_rows($consulta);//conta quantas linhas tem


?>