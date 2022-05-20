<?php

$teste = [1, 5.7, 'Cassino', true];
$qt = count($teste);

echo $qt;
echo "<hr>";

for($i = 0; $i < $qt; $i++){

    echo "$i ==> $teste[$i] <br>";

}


echo "<hr>";
echo " - A SEGUIR... UM NÚMERO ALEATÓRIO - <br>";
$n = (rand(1, 100))/10;
echo $n;


echo "<hr>";
echo " - MÉDIA E SOMA DOS VALORES - <br>";

$v = [1, 3, 5, 7, 9];
$qnt = count($v);
$s = 0;

for($x = 0; $x < $qnt; $x++){

    $s = $s +  $v[$x];

}

echo " Soma dos valores: = $s <br>";
$m = $s/$qnt;
echo "Média dos valores: = $m"

?>