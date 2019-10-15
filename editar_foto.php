<html>
<head>
      <title>Atualizar dados do alunos</title>
	 
</head>	  
<body bgcolor="#D3D3D3">
<?php
include ('php/conexion.php');
if(isset($_GET['mat']))
{
    $matricula=$_GET['mat'];
}
else
{
    $matricula=$_POST['mat'];
}

echo"
<form method= 'post' action= 'editar_foto.php' enctype='multipart/form-data'>
<input type= 'file' name='fileToUpload' id='fileToUpload'>
<input type='hidden' name='mat' value='$matricula'>
<input type= 'submit' name='alterar' value= 'Alterar'>
</form>
";
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
$target_dir = "php/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        print_r($novo_nome);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>
</body>
</html>