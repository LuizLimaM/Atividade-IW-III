<?php
    session_start();
    if ($_SESSION['logado'] != 1){
        header("Location: index.html");

    }

    echo "Login Concluído, redirecionando para uma página restrita... <br>";
    echo "<a href='logout.php'>VOLTAR</a>";

?>

