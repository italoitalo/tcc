<!doctype html>
<html>
	<!--aula 10 de php, inclopleta, 3:40 -->
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
			<input type="text" name="local@host.com.br"placeholder="nome completo" /> <br /> <br />			
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
		$name = $_POST
		$email = $_POST
		$senha = $_POST
		$csenha = $_POST
	}


?>