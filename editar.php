<html>
<head>
<meta charset="UTF-8">
<title>Estoque</title>
</head>	  
<body bgcolor="#D3D3D3">
<center>

<?php
include ("php/conexion.php");
$matricula=$_GET['mat'];

$visualizar= "select * from produtos where id=$matricula";

$result = mysqli_query($con, $visualizar);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

while ($montar = mysqli_fetch_array ($result))
{

$matricula=$montar['id'];
$nome=$montar['nome'];
$fabricante=$montar['fabricante'];
$cor=$montar['cor'];
$preco=$montar['preco'];
$largura=$montar['largura'];
$altura=$montar['altura'];
$peso=$montar['peso'];
$quantidade=$montar['quantidade'];
$mensagem=$montar['mensagem'];
$foto=$montar['foto'];

echo "
<table border='0' bgcolor='white'>
<form method='POST' action='editar2.php'>
<input type= 'hidden' name='matricula' value='$matricula'>
<tr>
<th colspan='3'>
<h1> Atualizar dados do produto </h1>
</th>
</tr>
<tr>
<th rowspan='10'>
<img src='php/uploads/$foto' width='150' height='200'><br>
<!--- <a href='editar_foto.php?mat=$matricula'>Alterar</a> --> 
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
        <b>fabricante:</b>
    </td>
    <td>
        <input type= 'text' name= 'turma' value='$fabricante'>
    </td>
</tr>
<tr>
    <td>
        <b>cor:</b>
    </td>
    <td>
        <input type= 'text' name= 'turma' value='$cor'>
    </td>
</tr>
<tr>
    <td><b>Preco:</b></td>
    <td>
        <input type= 'text' name= 'cpf' value='$preco'>
    </td>
</tr>
<tr>
    <td><b>Peso:</b></td>
    <td>
        <input type= 'text' name= 'identidade' value='$peso'>
    </td>
</tr>
<tr>
    <td><b>Quantidade:</b></td>
    <td>
        <input type= 'text' name= 'celular' value='$quantidade'>
    </td>
</tr>
<tr>
    <td><b>Descrição:</b></td>
    <td>
        <input type= 'text' name= 'telefone' value='$mensagem'>
    </td>
<tr>
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
