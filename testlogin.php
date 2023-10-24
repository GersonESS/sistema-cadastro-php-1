<?php

    print_r($_REQUEST);
    print_r('<br>');
   if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
   {
    include_once('config.php');
    print_r('<br>');
    $submit = $_POST['submit'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    print_r('Enviar ').$submit;
    print_r('<br>');
    print_r('Email ').$email;
    print_r('<br>');
    print_r('Senha ').$senha;


    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

     //print_r($sql);
     //print_r($result);
     if(mysqli_num_rows($result) < 1)
        {
         print_r("não existe");
         
        }
        else
        {
         print_r("existe");
        }

   }
   else
   {
    header('Location: login.php');
   }

?>
 