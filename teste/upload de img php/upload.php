<?php
	include("conexion.php");

	$msg = false;
	if(isset($_FILES['arquivo'])){
		$extensao = strolower(substr($_FILES['arquivo']['name'], -4)); // remove a extensão
		$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
		$diretorio = "upload/";

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

		$sql_code = "INSERT INTO arquivo (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
		if($mysqli->query($sql_code)){
			$msg="arquivo enviado com sucesso!";
		}
		else{
			$msg = "falha ao enviar!";
		}


	}


?>
<h1>upload de arquivo</h1>
<?php if($msg != false)  ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
	arquivo: <input type="file" required name="arquivo">
	<input type="submit" value="salvar">
</form>