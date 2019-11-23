<html>
<head>
<meta charset="utf-8">
<style>
h1{
font-size:20px;}
</style>
</head>
<body>
<center><h1>Este código mostra o tipo de estação referente ao número atribuido a variável. Data 18/09/2019</h1></center>
<?php
$variável=2;
switch($variável)
{
case 1:
echo"O valor atribuido foi: ",$variável," ","Se refere a estação: Primavera";
echo"<br>";
echo"Nesta época do ano a Natureza se torna mais bela que nunca, vestindo-se de flores das mais variadas cores, dos mais ricos matizes, de intensos e diversos perfumes";
break;
case 2:
echo"O valor atribuido foi: ",$variável," ","Se refere a estação: Verão";
echo"<br>";
echo"Suas principais características são as elevadas temperaturas e o aumento dos índices pluviométricos.";
break;
case 3:
echo"O valor atribuido foi: ",$variável," ","Se refere a estação: Outono";
echo"<br>";
echo"O outono é muito bonito";
break;
case 4:
echo"O valor atribuido foi: ",$variável," ","Se refere a estação: Inverno";
echo"<br>";
echo"Esta é a melhor estação do ano, friozinho que dá para tomar chocolate quente";
break;
}
?>
</body> 
</html>