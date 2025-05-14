<?php
echo "Olá mundo";
?>
<br>
5+2 = <?php echo 5+2; ?> <br>
10-2 = <?php echo 10-2; ?> <br>
10/2 = <?php echo 10/2; ?> <br>
10*2 = <?php echo 10*2; ?> <br>
10%2 = <?php echo 10%2; ?> <br>
12**2 = <?php echo 10** 2; ?> <br> 

<?php
$salario = 0.01;
$idade = 16;
$sobrenome = "Carosi Lourenço";
$animalEstimacao = false;

echo "Eu tenho $idade anos <br>" ;
echo 'Eu tenho $idade anos <br>';
echo 'Eu tenho' . $idade . 'anos <br>';
echo "Eu tenho" . $idade . "anos <br>"; 
echo "Pode jogar no tigrinho : ";
if($idade >= 18){
    echo "Sim";
}else{
    echo "Não";
}
?> <br>

<?="ola";?>

<?php
//uma linha

/*
varias
linhas
*/

switch ($corFavorita) {
    case 'azul':
        echo "<br>Sua cor favorita é azul";
        break;
    case 'vermelho':
        echo "<br>Sua cor favorita é vermelho";
        break;
    case 'amarelo':
        echo "<br>Sua cor favorita é amarelo";
        break;
    default:
        echo "<br>Não sei sua cor favorita";
        break;
}
 
$i = 0;
while