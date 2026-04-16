<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body align = center>

<div class="titulo"> Gusta Parfum</div>

<?php

$nome = $_POST["nome"];
$perfume = $_POST["perfume"];
$valor = $_POST["valor"];
$peso = $_POST["peso"];
$distancia = $_POST["distancia"];
$produto = $_POST["produto"];
$entrega = $_POST["entrega"];

$frete = 0;
$prazo = 0;

echo "<h2>NOTA FISCAL - LOJA DE PERFUMES</h2>";

echo "Cliente: $nome <br>";
echo "Perfume: $perfume <br>";
echo "Valor da compra: R$ $valor <br>";
echo "Peso: $peso kg <br>";
echo "Distância: $distancia km <br>";
echo "<hr>";

if($valor > 500){
    echo "Compra acima de R$500 → FRETE GRÁTIS <br>";
    $frete = 0;
}
else{

switch($entrega){

case "economica":

if($peso <= 5){
$frete += 10;
echo "Frete econômico perfume leve: R$10 <br>";
}else{
$frete += 20;
echo "Frete econômico perfume pesado: R$20 <br>";
}

if($distancia > 100){
$frete += 10;
echo "Taxa distância longa: +R$10 <br>";
}

if($distancia <= 50){
$prazo = 3;
}elseif($distancia <= 200){
$prazo = 5;
}else{
$prazo = 8;
}
break;

case "normal":

if($peso <= 5){
$frete += 20;
echo "Frete normal até 5kg: R$20 <br>";
}
elseif($peso <= 10){
$frete += 35;
echo "Frete normal até 10kg: R$35 <br>";
}
else{
$frete += 50;
echo "Frete normal acima 10kg: R$50 <br>";
}

if($distancia > 100){
$frete += 15;
echo "Taxa distância longa: +R$15 <br>";
}

if($distancia <= 50){
$prazo = 2;
}elseif($distancia <= 200){
$prazo = 4;
}else{
$prazo = 6;
}
break;

case "expressa":

$frete += 50;
echo "Frete expresso base: R$50 <br>";
if($peso > 10){
$frete += 20;
echo "Perfume pesado: +R$20 <br>";
}

if($distancia > 100){
$frete += 20;
echo "Entrega rápida longa distância: +R$20 <br>";
}

if($distancia <= 100){
$prazo = 1;
}else{
$prazo = 2;
}
break;

case "retirada":

$frete = 0;
$prazo = 0;
echo "Retirada na loja → Frete grátis <br>";
break;

}

# Perfume frágil (vidro)
if($produto == "fragil"){
$frete += 15;
echo "Taxa embalagem vidro (frágil): +R$15 <br>";
}

# km extra
if($distancia > 200){
$extra = $distancia - 200;
$valorExtra = $extra * 1;
$frete += $valorExtra;
echo "Taxa km extra ($extra km): +R$ $valorExtra <br>";
}

}

echo "<hr>";
echo "<h3>Total do Frete: R$ $frete</h3>";
echo "<h3>Prazo de Entrega: $prazo dias</h3>";

?>

</body>
</html>