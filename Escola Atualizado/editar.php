<html>
<head>
<meta charset="UTF-8">
<title>Perfil do aluno</title>
</head>	  
<body bgcolor="#D3D3D3">
<center>

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
<table border='0' bgcolor='white'>
<form method='POST' action='editar2.php'>
<input type= 'hidden' name='matricula' value='$matricula'>
<tr>
<th colspan='3'>
<h1> Atualizar dados de aluno </h1>
<//th>
</tr>
<tr>
<th rowspan='10'>
<img src='imagens/$foto' width='150' height='200'><br>
<a href='editar_foto.php?mat=$matricula'>Alterar</a>
</th>
</tr>
<tr>
    <td>  
        <b>Nome:</b>
    </td>
    <td>
        <input type= 'text' name='nome' value='$nome'>
    </td>
</tr>
<tr>
    <td>
        <b>Curso:</b>
    </td>
    <td>
        <select name='curso' style='width: 172px;'>
        <option value='$cursol'seected>$curso</option>
        <option value='informática'>Informática</option>
        <option value='administração'>Administração</option>
        <option value='enfermagem'>Enfermagem</option>
        </select>
    </td>
</tr>
<tr>
    <td>
        <b>Turma:</b>
    </td>
    <td>
        <input type= 'text' name= 'turma' value='$turma'>
    </td>
</tr>
<tr>
    <td><b>CPF:</b></td>
    <td>
        <input type= 'text' name= 'cpf' value='$cpf'>
    </td>
</tr>
<tr>
    <td><b>Identidade:</b></td>
    <td>
        <input type= 'text' name= 'identidade' value='$identidade'>
    </td>
</tr>
<tr>
    <td><b>Celular:</b></td>
    <td>
        <input type= 'text' name= 'celular' value='$celular'>
    </td>
</tr>
<tr>
    <td><b>Telefone:</b></td>
    <td>
        <input type= 'text' name= 'telefone' value='$telefone'>
    </td>
<tr>
</tr>
<tr>
    <td><b>Email:</b></td>
    <td>
        <input type= 'text' name= 'email' value='$email'>
    </td>
</tr>
<tr>
    <th colspan='3'>
        <input type= 'submit' name='cadastrar' value='Enviar'> <a href='visualizar.php'><input type='button' value='Voltar'></a>
    </th>
</tr>
</form>
</table>
";
}
?>
</center>
</body>
</html>
