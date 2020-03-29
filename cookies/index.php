<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade Cookies</title>
</head>
<body>
<div>
<form method="POST" action="">
<input type="text" name="username" method="POST" placeholder="nome/usuário">
<input type="submit" value="enviar/salvar">
</form>

<?php 
error_reporting(0);
$user = $_POST['username'];
if(isset($user)){
    setcookie("name",$_POST['username']);
    header("location:indexx.php");
}


?>
</div>
    
</body>
</html>