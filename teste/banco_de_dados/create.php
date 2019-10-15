<?php

include ('cnx.php');

//Recebendo dados do formulario
$nome = $_POST['nome'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$telefone = $_POST['fone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];
if ($senha == "" or $csenha == "" or $email == "" or $cpf == "" or $telefone == "" or $numero == "" or $cep == "" or $rua == "" or $nome == "") {
            $mensagem = "<span class='aviso'><b>Aviso</b>: preencha todos os campos!</span>";
            echo "<script type='text/javascript'>alert('preencha todos os campos');</script>";
            echo "<p id='mensagem'>".$mensagem."</p>";            
        } else if ($senha !== $csenha) {
            $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        } else {
            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais!</span>";

	$inserir=mysqli_query($mysqli,"insert into clientes (nome, rua, cep, numero, telefone, cpf, email, senha) values('$nome','$rua','$cep','$numero','$telefone','$cpf','$email','$senha')");
        }
?>