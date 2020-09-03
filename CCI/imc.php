<html>
<body>
<center><h1> TESTE DE IMC</h1></center>
<center>
<?php
$peso = 73; // atribuindo o peso para o calculo
$altura = 1.71; // atribuindo a altura

$firula = "<br>********************************** <br>"; // variável com a firula do Fredson

// calculo do imc já fazendo o arredondamento
$imc = round($peso / ($altura * $altura), 2); 

// exibindo os valores
echo "Seu IMC é: <strong>$imc</strong><br>";

echo $firula;

// estruturas condicionais
if ($imc <= 18.5) {
	echo "Indivíduo abaixo do peso.";
} 
if ($imc >= 18.6 AND $imc <= 24.9) {
	echo "Peso ideal. Parabéns!";
}
if ($imc >= 25 AND $imc <= 29.9) {
	echo "Levemente acima do peso";
}
if ($imc >= 30 AND $imc <= 34.9) {
	echo "Obesidade grau I";
}
if ($imc >= 35 AND $imc <= 39.9) {
	echo "Obesidade grau II (severa).";
}
if ($imc >= 40) {
	echo "Obesidade grau III (mórbida).";
}
echo $firula;
// fim!
?>
</center>
</body>
</html>