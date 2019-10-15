<html>
<head>
<meta charset="UTF-8">
<title>Visualizar</title>
</head>	  
<body bgcolor="#D3D3D3">
<center>
<a href="inserir.html">Cadastrar novo aluno</a><br>
<table border= "0">
    <tr>
    <th colspan="6">
        <form method="get" action="visualizar.php">
         <input type="text" name="pesquisar" placeholder="Pesquisar">
         <select name="campo">
             <option value="nome">Nome</option>
             <option value="turma">Turma</option>
             <option value="curso">Curso</option>
         </select>
         <input type="submit" value="Pesquisar">
        </form>
        </th>
</tr>
<tr bgcolor="#778899">
<th>Matrícula</th>
<th>Nome</th>
<th>Turma</th>
<th>Curso</th>
<th colspan="2">Função</th>
</tr>
<?php
include ("cnx.php");
if(isset($_GET['pesquisar']))
{
$campo=$_GET['campo'];
$pesquisar=$_GET['pesquisar'];
}
else
{
   $campo="nome";
   $pesquisar=""; 
}
$cont_cor=1;
$visualizar= "select * from alunos where $campo Like '%$pesquisar%'";

$result = mysqli_query($mysqli, $visualizar);
if (!$result) {
    printf("Error: %s\n", mysqli_error($mysqli));
    exit();
}
while ($montar=mysqli_fetch_array ($result))

{
if ($cont_cor=="1")
{
	$cor="#B0C4DE";
	$cont_cor--;
}
else
{
	$cor="white";
	$cont_cor++;
}

$matricula=$montar ['matricula'];
$nome=$montar['nome'];
$curso=$montar['curso'];
$turma=$montar['turma'];

echo "
<tr bgcolor='$cor'>
<td>$matricula</td>
<td><a href='perfil_aluno.php?mat=$matricula'>$nome</a> </td>
<td>$turma </td>
<td>$curso </td>
<td>
<a href='editar.php? mat=$matricula'><img src='edit.png' width='30'></a>
</td>
<td>
<a href='qexcluir.php?mat=$matricula'><img src='delete.png' width='30'></a>
</td>
</tr>
";
}
?>
</table>
<a href="inserir.html">Cadastrar novo aluno</a>
</center>
</body>
</html>
