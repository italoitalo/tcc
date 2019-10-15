<?php 	session_start();
?>
<html>
	<title>HOUSE OF PRINTS</title>
	<head>
	<link rel="shortcut icon" href="nova.png" type="image/x-icon" />
	<img src="nova.png" class="nova">
	<?php
include("conexao.php");

$sql="select * from produto";
$consulta=mysqli_query($conexao,$sql);//consulta na tabela
$registros=mysqli_num_rows($consulta);//conta quantas linhas tem

/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }
 
$logado = $_SESSION['email'];

?>

<style>
body{
	margin: -2px 0px;
	padding: 0;
	background: url(aqui.jpg);
	background-repeat: no-repeat;
	background-attachment: relative;
	background-size: 100% 306px;
}

.nova{
	width:230px;
	height: 230px;
	position: absolute;
	top:65px;
	left: calc(47% - 100px);
}
	*{
	margin:0;
	padding:0;
	font-family: calibri;
	
	}
	.menu{
	
		width:100%;
		height: 54.8px; abaixar o menu;
		background-color:  #96281B;
		font-family:'calibri';
		font-size: 14px;
		position: fixed;
	}
	.menu ul {
		list-style:none;
		position: relative;
	}
	.menu ul li {
		width: 150px;
		float: left;
	}
	.menu a{
		padding: 19px;
		display: block;
		text-decoration: none;
		text-align: center;
		background-color: #96281B;
		color: #fff;
	}
	.menu ul ul{
		position: absolute;
		visibility: hidden;
	}
	.menu ul li:hover ul{
		visibility: visible;
	}
	.menu a:hover{
	background-color: #C0392B;
	color: #fff;
	transition:.5s;
	}
	.menu ul ul li{
	float: none;
	border-bottom: solid 1px #ccc;
	}
	.menu ul ul li a{
	background-color:  #790D0F;
	}
	.menu li ul li{
		border:-4px solid #fff;
		display: block;
		width: 150px;
	}
	label[for="bt_menu"]{
	padding: 5px;
	background-color: #222;
	color: #fff;
	font-family: arial;
	text-align: center;
	font-size: 30px;
	cursor: pointer;
	width: 50px;
	height: 50px;
	}	
	
	footer{
		font-family: calibri;
		background-color: #96281B;
	}

	h1{
		font-size:18px;
	}
	
	h2{
		font-size:20px;
	}
</style>
</head>
	<body>
		<nav class="menu">
			<ul>
			<li><a href="telainicial.php">HOME</a></li>
			<li><a href="sobre.php">SOBRE</a></li>
			<li><a href="flconosco.php">FALE CONOSCO</a></li>
			<li><a href="sair.php">SAIR</a></li>
			<?php
  echo" Bem vindo $logado";
  ?>
			</ul>
		</nav>
		<div class="linha">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class="doc"></div>
		</div>
	
	<table  cellpadding="10px" cellspacing="1" ID="alter" style="margin: 100 auto" width="100%">
	<?php 
	$cont_linha=1;
	while ($registros=mysqli_fetch_array($consulta)){ 
	$registros["id_produto"];
	$id_produto=$registros["id_produto"];
	$imagem=$registros['imagem'];
	
	if ($cont_linha==1)
	{
	?>
		<tr>
		<td>
		<table>
		<tr>
		<th>
		<img src="imagens/<?php echo $imagem; ?>">
		</th>
		</tr>
		</tr>
		<tr >
		<th><h1><?php echo $registros["nome"]; ?></h1></th>
		</tr>
		<tr>
		<th><h2>R$ <?php echo $registros["preco"]; ?></h2></th>
		</tr>
		<tr>
		<th><?php echo'<a href="carrinho.php?acao=add&id='.$registros['id_produto'].'">Adicionar ao Carrinho +</a>';?></th>
		</tr>
		</table>
		</td>
	<?php 
	$cont_linha++;
	}
	elseif (($cont_linha==2) or ($cont_linha==3))
	{
	?>
		<td>
		<table>
		<tr>
		<th>
		<img src="imagens/<?php echo $imagem; ?>">
		</th>
		</tr>
		</tr>
		<tr>
		<th><h1><?php echo $registros["nome"]; ?></h1></th>
		</tr>
		<tr>
		<th><h2>R$ <?php echo $registros["preco"]; ?></h2></th>
		</tr>
		<tr>
		<th><?php echo'<a href="carrinho.php?acao=add&id='.$registros['id_produto'].'">Adicionar ao Carrinho +</a>';?></th>
		</tr>
		</table>
		</td>
		
	<?php
	$cont_linha++;
	}
	else
	{
	?>
		<td>
		<table>
		<tr>
		<th>
		<img src="imagens/<?php echo $imagem; ?>"><br>
		</th>
		</tr>
		</tr>
		<tr>
		<th><h1><?php echo $registros["nome"]; ?></h1></th>
		</tr>
		<tr>
		<th><h2>R$ <?php echo $registros["preco"]; ?></h2></th>
		</tr>
		<tr>
		<th><?php echo'<a href="carrinho.php?acao=add&id='.$registros['id_produto'].'">Adicionar ao Carrinho +</a>';?></th>
		</tr>
		</table>
		</td>
		</tr>
	<?php
	$cont_linha=1;
	}
	}	
	
	?>
	</TABLE>
	
	<br>
	<footer id="rodape">
                <table align="center" id="tbRodape">
                <tr>
		          <td>House Of Prints &nbsp </td>
				</tr>
            </footer>
	</html>
	