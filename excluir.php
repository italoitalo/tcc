<?php
include ('php/conexion.php');

$matricula=$_GET['mat'];

if($inserir = mysqli_query($con, "Delete from produtos where id='$matricula'"))
{
	header("refresh:3;visualizar.php");
echo "Dados excluídos com sucesso";
}else{
echo "Problemas aos excluir o aluno.";
}
?>