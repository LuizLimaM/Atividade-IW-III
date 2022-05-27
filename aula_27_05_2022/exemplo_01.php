<?php 


    function teste(){
        echo "Olá Anderson";
    }

    teste();

    echo "<hr>";

    echo "2- Função com retorno e sem parametrs <br>";


    function teste2(){
        $retorno = "Anderson também é Vanin";
        return $retorno;
    }

    $recebe = teste2();
    echo "$recebe <br>";
    //echo"$retorno; Erro pois a variavel é local da funçãoç.
    echo "<hr>";


    function teste3($a){
        echo"$a <br>";
    }
    teste3("Alô galera de cowboy");
    $x = 10;

    teste3("Alô galera de peão");
    teste3($x);

    echo "<hr>";

    function teste4($x,$y){
        $soma = $x + $y;
        return $soma;
    }

    $resultado = teste4(10,20);
    echo "A soma é: $resultado";

    echo "<hr>";

?>