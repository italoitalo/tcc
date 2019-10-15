<html>
<head>
<meta charset="UTF-8">
<title>Perfil do aluno</title>
</head>	  
<body bgcolor="#D3D3D3">
<center>
<a href="visualizar.php">Voltar para a listagem de alunos</a><br>
<?php
include ("cnx.php");
$matricula=$_GET['mat'];

$visualizar= "select * from alunos where matricula=$matricula";

$result = mysqli_query($mysqli, $visualizar);

while ($montar=mysqli_fetch_array ($result))

{

$matricula=$montar ['matricula'];
$nome=$montar['nome'];
$curso=$montar['curso'];
$turma=$montar['turma'];
$telefone=$montar['telefone'];
$celular=$montar['celular'];
$email=$montar['email'];
$identidade=$montar['identidade'];
$cpf=$montar['cpf'];
$foto=$montar['foto'];

echo "
<table border='1' bgcolor='white'>
<tr>
<td colspan='3'>
<font size='5'><b>$nome</b></font>
</td>
</tr>
<tr>
<td colspan='3'>
<b>Matrícula:</b> $matricula
</td>
</tr>
<tr>
<td rowspan='4'>
<img src='imagens/$foto' width='150' height='200'>
</td>
</tr>
<tr>
<td>
<b>Curso:</b> $curso
</td>
<td>
<b>Turma:</b> $turma
</td>
</tr>
<tr>
<td>
<b>Telefone:</b> $telefone
</td>
<td>
<b>Celular:</b> $celular
</td>
</tr>
<tr>
<td colspan='2'>
<b>Email:</b> $email
</td>
</tr>
</table>
";
}
?>
<a href="visualizar.php">Voltar para a listagem de alunos</a>
</center>
</body>
</html>
