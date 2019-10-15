<?php
include ('cnx.php');

$matricula=$_GET['mat'];

if($inserir = mysqli_query($mysqli, "Delete from alunos where matricula='$matricula'"))
{
	header("refresh:3;visualizar.php");
echo "Dados excluídos com sucesso";
}else{
echo "Problemas aos excluir o aluno.";
}
?>