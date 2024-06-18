<?php
// 1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
// 2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"
// 3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"
// 4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.
// 5 - Conte quantos elementos o array de dias de semana possui.
// 6 - Utilize a função array_serach() para econtrar a posicao do dia "Sábado" no array e exiba o resultado.
 
echo '1______________ <br>';
$dias_semana = ['domingo', 'segunda', 'terca', 'quarta', 'quinta', 'sabado', 'domingo'];

echo $dias_semana[2];
echo '<br>';

echo '2_______________ <br>';
$meses_ano = ['janeiro', 'fevereiro', 'marco', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
$meses_ano[-1] = '0nzembro';
print_r($meses_ano);
echo '<br>';

echo '3_______________ <br>';
$array_vazio = [];
$array_vazio = [1, 2, 3, 4, 5];
$array_vazio[] = 6;
print_r($array_vazio);
echo '<br>';
?>