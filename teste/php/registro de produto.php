<?php

include ('conexion.php');

//Recebendo dados do formulario
$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];
$largura = $_POST['largura'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$quantidade = $_POST['quantidade'];
$mensagem = $_POST['mensagem'];


if(isset($_FILES['arquivo'])){
	
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()). $extensao;
	$diretorio = "imagens/";
	
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);


if($inserir=mysqli_query($con,"insert into produtos (nome, fabricante, cor, preco, largura, altura, peso, quantidade, mensagem, foto) values('$nome','$fabricante','$cor','$preco','$largura','$altura','$peso','$quantidade','$mensagem','$novo_nome')")){
	echo "cadastro";
}
}
?>