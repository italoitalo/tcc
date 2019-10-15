<html>
<head>
      <title>Atualizar dados do alunos</title>
	 
</head>	  
<body bgcolor="#D3D3D3">
<?php
include ('cnx.php');
if(isset($_GET['mat']))
{
    $matricula=$_GET['mat'];
}
else
{
    $matricula=$_POST['mat'];
}
if(isset($_FILES['foto'])){
	
	$extensao = strtolower(substr($_FILES['foto']['name'], -4));
	$novo_nome = md5(time()). $extensao;
	$diretorio = "imagens/";
	
	move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);
if($atualizar = mysqli_query($mysqli, "update alunos set foto='$novo_nome' where matricula='$matricula'"))
	{
		echo "Foto alterada com sucesso
		
		<a href='visualizar.php'>voltar</a>
		";
		
	}
	else {
    echo "Error updating record: " . mysqli_error($mysqli);
}
}
else {
echo"
<form method= 'post' action= 'editar_foto.php' enctype='multipart/form-data'>
<input type= 'file' name='foto'>
<input type='hidden' name='mat' value='$matricula'>
<input type= 'submit' name='alterar' value= 'Alterar'>
</form>
";
}
?>
</body>
</html>