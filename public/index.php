<?php
require '../vendor/autoload.php';

use App\Util\CalculadoraDeIdade;

// Data de nascimento para cálculo
$dataNascimento = '2024-06-05'; // Substitua pela data desejada para testar

// Calcular a idade
$idade = CalculadoraDeIdade::calcular($dataNascimento);

// Exibir a idade
echo $idade;
