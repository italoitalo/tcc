<html>
<head>
<meta charset="UTF-8">
<title>Exclusão de aluno</title>
</head>	  
<body bgcolor="#D3D3D3" text="white">
<center>
<?php
$matricula=$_GET['mat'];

echo"<b>Você realmente deseja excluir esta informação?</b>
<br>
<a href='excluir.php?mat=$matricula'>Sim</a>
<a href='visualizar.php'>Não</a>";

?>
<center>
</body>
</html>