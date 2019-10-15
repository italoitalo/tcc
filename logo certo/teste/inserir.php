<html>
<head>
      <title>Cadastro</title>
</head>
<body>
<?php

$remetente		= 'From: puraseducaoatendimento@gmail.com';
$destinatario	= 'ialvesjesus01@gmail.com';
$assunto        = 'Fale Conosco';
$nome			= $_POST['nome'];
$email			= $_POST['email'];
$mensagem		= $_POST['mensagem'];
$alerta			= 'Seus dados foram enviados com sucesso!!!';
$corpo			= "
Nome:       ".$nome." 
E-mail:     ".$email."
Assunto:    ".$assunto." 
Mensagem:   ".$mensagem."";

mail($destinatario, $assunto, $corpo, $remetente); 
echo $alerta;

?>
</body>
</html>