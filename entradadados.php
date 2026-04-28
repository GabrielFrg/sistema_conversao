<?php
require_once "bibliotecaFuncoes.php";

use function geometria\Quadrado;
use function geometria\Retangulo;
use function geometria\Triangulo;
use function geometria\Circulo;
use function geometria\Trapesio;

echo "A area do Quadrado é: ", Quadrado(5);
echo "A area do Retangulo é: ", Retangulo(5,10);
echo "A area do Triangulo é: ", Triangulo(3,6);
echo "A area do Circulo é: ", Circulo(8);
echo "A area do Trapesio é: ", Trapesio(5,8,5);

use function saude\caucularimc;
use function saude\valorIdealAgua;
use function saude\frequenciaCardiacaMaxima;
use function saude\converterLibrasParaQuilo;
use function saude\calcularCaloriasBasais;


echo "O seu imc é de: ", caucularimc(1.70,60);
echo "o seu consumo ideal de agua é de: ", valorIdealAgua(60);
echo "A frequencia cardiaca maxima é de: ", frequenciaCardiacaMaxima(25);
echo "A conversao de libras para kg é: ", converterLibrasParaQuilo(50);
echo "As suas calorias diarias são: ", calcularCaloriasBasais(60,1.70,25);
?>