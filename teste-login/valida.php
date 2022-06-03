<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = 'Carlos o Calvo';
    $pass = 6969;

    if (($usuario == $user) && ($senha == $pass)){
        //echo "ok, validado.";
        session_start();
        $_SESSION['username'] = $usuario;
        $_SESSION['logado'] = 1;
        header("Location: restrita.php");

    }else{
        echo "Log In recusado, verifique sua senha e nome de usuário... <br>";
        echo "<a href='index.html'>Voltar</a>";
    }




?>