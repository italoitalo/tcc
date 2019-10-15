<html lang="pt-br">
	<head>
		<link rel="shortcut icon" href="nova.png" type="image/x-icon" />
<style>
*{
	margin: 0;
	padding: 0;
	

}

a{
	text-decoration: none;
	color: #fff;
}

body{
	background: url('aqui.jpg');
	background-size: 88%;
	font-family: calibri;
	color: #fff;
} 

.container{
	font-color:#fff;
	margin: auto;
	width: 937px;
	margin-top: 20px;
	padding: 10px;
}

nav{
	
	background-color: #444;
	float: left;
	box-sizing:border-box;
	padding: 10px;
}

section{
	width: 870; 
	height: 470px;
	margin-left: 10px;
	float: left;
	background-color: rgba(0,0,0,0.5);
	box-sizing:border-box;
	padding-left: 10px;
}



.btn{
	border-radius:30px;
	width: 100px;
	height:30px;
	border: 1px solid rgba(0,0,0,0.5);
	cursor: pointer;
}
.campoo{
	border-radius:30px;
	width: 65px;
	height: 30px;
	border: 4px solid #ddd;
	margin-top: 5px;
	margin-bottom: 20px;
}

.campo{
	border-radius:30px;
	width: 300px;
	height: 30px;
	border: 4px solid #ddd;
	margin-top: 5px;
	margin-bottom: 20px;
}

article{
	width:100%;
	box-sizing:border-box;
	padding:10px;
	background-color:#d6d5d5;
	margin-bottom: 5px;
}
 
	
	.nova{
	width:300px;
	height: 300px;
	border-radius: 100%;
	position: absolute;
	top: 200px;
	left: calc(57% - 100px);
}

</style>

		<meta charset="utf-8">
		<title>Cadastro de Produtos</title>
	</head><br><br><br>
	<body>
	<img src="nova.png" class="nova">

	<form method="post" action="processaprod.php" enctype="multipart/form-data">
		<div class="container">
			<section>
			<br><br>
				<h1 style="text-align:center;">Cadastro de Produtos</h1>
				<hr><br><br>
				
				
					
					<b>Nome:
					<input type="text" name="nome" class="campo" maxlength="150"   required autofocus><br>
					Quantidade de entrada:<br><br>
					P <input type="number" name="p" class="campoo" maxlength="3"> &nbsp &nbsp &nbsp &nbsp;
					M <input type="number" name="m" class="campoo" maxlength="3">&nbsp &nbsp &nbsp &nbsp;
					G <input type="number" name="g" class="campoo" maxlength="3"><br><br>
					Preço: <input type="text" class="campo" maxlength="5" name="preco">	<br>		
					Foto:&nbsp &nbsp;<input type='file' name="arquivo"><br><br><br>	
					
					<input type="submit" value="Salvar" class="btn">
					<input type="reset" value="Limpar" class="btn">
					
					
					
					
				
			</section>
		</div>
		</form>
	</body>
</html>