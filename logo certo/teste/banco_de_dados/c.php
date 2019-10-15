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
 if ($senha !== $csenha) {
            echo "<script type='text/javascript'>alert('as senha devem ser iguais');</script>";          
        } else
       	 {
			echo "<script type='text/javascript'>alert('parabens');</script>"; 
           $inserir=mysqli_query($mysqli,"insert into clientes (nome, rua, cep, numero, telefone, cpf, email, senha) values('$nome','$rua','$cep','$numero','$fone','$cpf','$email','$senha')");
        }
        
?>