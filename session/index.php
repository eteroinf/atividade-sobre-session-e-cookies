<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade Session</title>
</head>
<body>
<form method="POST" action="">
<input type="text" method="POST" name="user" placeholder="nome/Usuário">
</br>
</br>
<input type="password" method="POST" name="pass" placeholder="sua Senha">
</br>
</br>
<input type="submit" name="bt" value="Enviar/salvar">
</form>

<?php 

session_start();

if(isset($_POST['bt'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $_SESSION['session'] = $user;
    if($pass == $_POST['pass']){
        $_SESSION['session2'] = $pass;
        header("location:indexx.php");
    }else{
        echo "failled";
    }
}

?>
    
</body>
</html>