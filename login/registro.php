<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Registro</h2>

		<form role="form" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">
		    <label for="username">Nome de usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nome de usuario">
		  </div>
		  <div class="form-group">
		    <label for="fullname">Nome Completo</label>
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nome Completo">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="password">Senha</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Senha</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Senha">
		  </div>

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>