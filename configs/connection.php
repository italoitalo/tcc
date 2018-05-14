<?php
	$user = "root";
	$serv = "127.0.0.1";
	$pass = "";
	$data = "registro";

	$mysqli = new mysqli($serv, $user, $pass, $data);
	if($mysqli -> connect_error){
		echo "erro de conexão com o banco de dados";
	}
	else{
		echo "conectado com succeso";
	}
?>