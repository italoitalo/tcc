<?php

include ('cnx.php');

//Recebendo dados do formulario
$nome = $_POST['nome'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$fone = $_POST['fone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];
if ($senha == "" or $csenha == "" or $email == "" or $cpf == "" or $telefone == "" or $numero == "" or $cep == "" or $rua == "" or $nome == "") {
            echo "<script type='text/javascript'>alert('preencha todos os campos');</script>";          
        } else if ($senha !== $csenha) {
            echo "<script type='text/javascript'>alert('as senha devem ser iguais');</script>";          
        } 
            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais!</span>";
            echo "<p id='mensagem'>".$mensagem."</p>";
            $inserir=mysqli_query($mysqli,"insert into clientes (nome, rua, cep, numero, telefone, cpf, email, senha) values('$nome','$rua','$cep','$numero','$fone','$cpf','$email','$senha')");
        
?>