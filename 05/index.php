<?php
echo "Contagem Regressiva <br><HR>";

$numero = 5; //Número fornecido pelo usuário.
for ($numero; $numero >= 0; $numero--){
    if($numero == 0){
        break;
    };
    echo "falta $numero segundos <br>";
}
echo "<hr><hr><br>";

$numero = 5; //Número fornecido pelo usuário.
do {
    echo "falta $numero segundos <br>";
    $numero--;
    if($numero == 0){
        break;
    }
} while($numero >= 0);
echo "<hr><hr><br>";

$numero = 5; //Número fornecido pelo usuário.
while($numero >= 0){
    echo "falta $numero segundos <br>";
    $numero --;
    if($numero == 0){
        break;
    }
}
// 
?>