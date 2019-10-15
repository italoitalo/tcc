<?php
session_start();
if(!isset ($_SESSION['user_id']) == true or $_SESSION['user_id'] != 2)
{
  header('location:login.php');
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>XXX-Shop</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
    <script type="text/javascript">
  $(document).ready(function(){
    $("#cpf").mask("999.999.999-99");
  });
$(document).ready(function(){
  $("#cep").mask("99.999-999");
});
</script>
</script>
  </head>
  <body>
    <div class="header">
        <div class="linha">
            <header>
                <div class="coluna col4">
            <a href="index.php">
              <img src="img/Pura Sedução.png">
            </a>
                </div>
                <div class="coluna col8">
                    <nav>
                        <ul class="menu inline sem-marcador">
                            <li><a href="index.php">home</a></li>
                            <li><a href="clientes.php">clientes</a></li>
                            <li><a href="servicos.php">serviços</a></li>
                            <li><a href="sobre.php">sobre</a></li>
                <li><a href="contato.php">contato</a></li>
                <br></br>
                <li><a href="login.php">login</a></li>
                <?php if( isset($_SESSION['user_id'])){ ?>
                <li><a href="deslogar.php">deslogar</a></li>
                <?php } ?>
                            <li><a href="cadastro.php">cadastro</a></li>
                        </ul>
                    </nav>
                </div>
            </header>       
        </div>          
    </div>  
    <div class="linha">

<center>
<table border= "0">
    <tr>
    <th colspan="6">
        <form method="get" action="visualizar.php">
         <input type="text" name="pesquisar" placeholder="Pesquisar">
         <select name="campo">
             <option value="nome">Nome</option>
         </select>
         <input type="submit" value="Pesquisar">
        </form>
        </th>
</tr>
<tr bgcolor="#778899">
<th>Id:</th>
<th>Nome:</th>
<th>Cor:</th>
<th>Fabricante:</th>
<th>Qtd Estoque:</th>
<th>Preço:</th>
<th colspan="2">Função:</th>
</tr>
<?php
include ("php/conexion.php");
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
$visualizar= "select * from produtos where $campo Like '%$pesquisar%'";

$result = mysqli_query($con, $visualizar);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
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

$matricula=$montar['id'];
$nome=$montar['nome'];
$curso=$montar['fabricante'];
$turma=$montar['cor'];
$quantidade=$montar['quantidade'];
$preco=$montar['preco'];
$mensagem=$montar['mensagem'];
$foto=$montar['foto'];

echo "
<tr bgcolor='$cor'>
<td>$matricula</td>
<td><!--- <a href='perfil_aluno.php?mat=$matricula'> -->$nome <!---</a>--> </td>
<td>$turma </td>
<td>$curso </td>
<td>$quantidade </td>
<td>R$ $preco </td>
<td>
<a href='editar.php? mat=$matricula'><img src='img/edit.png' width='30'></a>
</td>
<td>
<a href='qexcluir.php?mat=$matricula'><img src='img/delete.png' width='30'></a>
</td>
</tr>
";
}
?>
</table>
<a href="index.php">sair do estoque</a>
</center>
</body>
</html>
