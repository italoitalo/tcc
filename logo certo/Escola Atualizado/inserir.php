<html>
<head>
      <title>Cadastro de alunos</title>
	  <meta http-equiv="Refresh" content="3; url=visualizar.php">
</head>	  
<body bgcolor="#D3D3D3">
<?php
include ('cnx.php');

//Recebendo os campos do formulário HTML e inserindo eles em variáveis.
$nome=$_POST['nome'];
$turma=$_POST['turma'];
$curso=$_POST['curso'];
$cpf=$_POST['cpf'];
$identidade=$_POST['identidade'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$email=$_POST['email'];


if(isset($_FILES['arquivo'])){
	
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()). $extensao;
	$diretorio = "imagens/";
	
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

if($inserir = mysqli_query($mysqli, "insert into alunos (nome, turma, curso, telefone, celular, email, cpf, identidade, foto) 
values ('$nome', '$turma', '$curso', '$telefone','$celular', '$email', '$cpf', '$identidade', '$novo_nome')"))
	{
		echo "Dados inseridos com sucesso";
		
	}
}
?>
</body>
</html>