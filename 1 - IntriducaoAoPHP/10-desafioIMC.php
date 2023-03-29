<?php
$altura = 1.76;
$peso = 90.0;

$imc = $peso / ($altura ** 2);

if ($imc < 18.5 ) {
    echo "Seu IMC = $imc - Magreza - Grau 0";
} else if ($imc >= 18.5 && $imc < 24.9 ) {
    echo "Seu IMC = $imc - Normal - Grau 0";
} else if ($imc > 25 && $imc < 29.9 ) {
    echo "Seu IMC = $imc - Sobrepeso - Grau I";
} else if ($imc > 30 && $imc < 39.9 ) {
    echo "Seu IMC = $imc - Obesidade - Grau II";
} else if ($imc > 40 ) {
    echo "Seu IMC = $imc - Obesidade Grave - Grau III";
} 
