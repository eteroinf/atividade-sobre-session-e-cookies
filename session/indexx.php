<?php 

session_start();
if(isset($_SESSION['pass']) == true){
    unset($_SESSION['pass']);
    header("location:index.php");
}
    echo "Usuário: ".$_SESSION['session'];

?>