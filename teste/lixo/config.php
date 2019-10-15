<?php
$con = @mysql_connect("localhost", "root", "") or die("Não foi possível conectar com o servidor de dados!");
mysql_select_db("cliente", $con) or die("Banco de dados não localizado!");
?>