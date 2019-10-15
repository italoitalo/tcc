<html>
<head>
      <title>Atualizar dados do alunos</title>
	 
</head>	  
<body bgcolor="#D3D3D3">
<?php
include ('cnx.php');

//Recebendo os campos do formulário HTML e inserindo eles em variáveis.
$matricula=$_POST['matricula'];
$nome=$_POST['nome'];
$turma=$_POST['turma'];
$curso=$_POST['curso'];
$cpf=$_POST['cpf'];
$identidade=$_POST['identidade'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$email=$_POST['email'];

if($atualizar = mysqli_query($mysqli, "update alunos set nome='$nome', turma='$turma', curso='$curso', telefone='$telefone' ,celular='$celular', email='$email', cpf='$cpf', identidade='$identidade' where matricula='$matricula'"))
	{
		echo "Dados Alterados com sucesso";
		
	}
	else {
    echo "Error updating record: " . mysqli_error($mysqli);
}
?>
</body>
</html>