<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nome de usuario ou email ja registrados.\");window.location='../registro.php';</script>";
			}
			$rua = $_POST['rua'];
			$cep = $_POST['cep'];
			$numero = $_POST['numero'];
			$fone = $_POST['fone'];
			$cpf = $_POST['cpf'];
			$sql = "insert into user(username,fullname,email,password,created_at, rua,cep,numero,fone,cpf) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",NOW(),\"$_POST[rua]\",\"$_POST[cep]\",\"$_POST[numero]\",\"$_POST[fone]\",\"$_POST[cpf]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro foi com sucesso.\");window.location='../login.php';</script>";
			}
		}
	}
}



?>