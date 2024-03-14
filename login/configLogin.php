<?php
session_start();
//print_r($_REQUEST); //Confirm data send
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    //Access to system
    include_once('..\register\config.php');
    $email= $_POST['email'];
    $senha= $_POST['senha'];

    /*print_r('email: '. $email);
    print_r('<br>');
    print_r('Senha: '. $senha);*/
    $sql= "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
    $result= $conexao-> query($sql);

    if(mysqli_num_rows($result) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }else{
        $_SESSION['email']= $email;
        $_SESSION['senha']= $senha;
        header('Location: ../logged/logged.php');
    }
    //print_r($sql);
} else {
    //No access
    header('Location: ../login/login.php');
}
?>