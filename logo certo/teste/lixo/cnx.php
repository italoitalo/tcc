<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'dados');
if(!$mysqli) {
	print "falha na conexão";
}
else{
	echo "conexão com banco de dados realizada com sucesso";
}
?>