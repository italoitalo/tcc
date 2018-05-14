<?php
	require("configs/connection.php")
?>
<!doctype html>
<html>
	<!--aula 10 de php, inclopleta, 6:50 -->
	<head>
		<meta charset="UTF-8">
		<title>SUCUBBUS</title>
	</head>
	<body>
		<h1>
			loja
		</h1>
		<form action="" method="POST">
			<label>
				nome:
			</label> </br />
			<input type="text" name="nome"placeholder="nome completo" /> <br /> <br />
			<label>
				email:
			</label> <br />
			<input type="text" name="email"placeholder="local@host.com.br" /> <br /> <br />			
			<label>
				senha:
			</label> <br />
			<input type="text" name="senha"placeholder="********" /> <br /> <br />			
			<label>
				confirmar senha:
			</label> <br/>
			<input type="text" name="csenha"placeholder="********" /> <br /> <br />	
			<input type="submit" value="registrar" name="button" />
		</form>					
	</body>
</html>
<?php
	if(isset ($_POST[])) {
		$nome = $_POST["nome"]
		$email = $_POST["email"]
		$senha = $_POST["senha"]
		$csenha = $_POST["csenha"]

		if($nome == "" || $email == "" || $senha == "" || $csenha == "" ){
			echo "<script> alert ('preencha todos os campos!'); </script>"
			returne true;
		}
		if($senha != $csenha){
			echo "<script> alert ('as senhas devem ser IGUAIS!'); </script>"
			returne true;
		}

		$select = $mysqli->query("SELECT * FROM usuarios WHERE Email='$email'");
		$row = $select->num_rows;
		if($row > 0){
			echo "<script> alert ('já existe usuario com esse email!'); </script>"	
		} else{

		}


		if($select)
	}

?>	