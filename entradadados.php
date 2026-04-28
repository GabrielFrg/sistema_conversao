<?php
require_once "bibliotecaFuncoes.php";

use function conversao\dolarParaReal;
use function conversao\euroParaReal;
use function conversao\pesoParaReal;
use function conversao\libraParaReal;
use function conversao\ieneParaReal;

use function geometria\Quadrado;
use function geometria\Retangulo;
use function geometria\Triangulo;
use function geometria\Circulo;
use function geometria\Trapesio;
use function saude\caucularimc;

use function saude\valorIdealAgua;
use function saude\frequenciaCardiacaMaxima;
use function saude\converterLibrasParaQuilo;
use function saude\calcularCaloriasBasais;
$op = "";
$opcoes = "";
$opcaoconversao = "";

while($opcaoconversao !=4);{
echo "Menu\n Escolha uma das funções abaixo.\n 1-conversão\n 2-geometria\n 3-saude\n 4-sair\n";
$opcoes = readline(">>> ");

switch ($opcoes){
case 1:
    while($opcaoconversao !=6);{
    echo "Menu\n 1- Dolar para real\n 2- Euro para real\n 3-Peso para real\n 4-Libra para real\n 5-Iene para real\n 6-sair\n";
    $opcaoconversao = readline(">>> ");{
    switch ($opcaoconversao){
        case 1: 
            $dolar = readline("Digite a quantidade de dolares");
            $dolarcotacao = readline("digite o valor atual do dolar");

            echo "Dolar para real: ", dolarParaReal($dolar,$dolarcotacao); 
            break;
        case 2: 
            $euro = readline("Digite a quantidade de dolares");
            $eurocotacao = readline("digite o valor atual do dolar");

            echo "Euro para real: ", euroParaReal($euro,$eurocotacao); 
            break;
        case 3: 
            $peso = readline("Digite a quantidade de dolares");
            $pesocotacao = readline("digite o valor atual do dolar");

            echo "Peso para real: ", pesoParaReal($peso,$pesocotacao); 
            break;
        case 4: 
            $libra = readline("Digite a quantidade de dolares");
            $libracotacao = readline("digite o valor atual do dolar");

            echo "Libra para real: ", libraParaReal($libra,$libracotacao);
            break;
        case 5: 
            $iene = readline("Digite a quantidade de dolares");
            $ienecotacao = readline("digite o valor atual do dolar");

            echo "Iene para real: ", ieneParaReal($iene,$ienecotacao); 
            break;
        case 6:
            echo "saindo";
            default:
            echo "Opção não encontrada \n";
            break;
         }
    }
}
case 2:
    echo "Menu\n 1- Area do quadrado\n 2- Area do retangulo\n 3-Area do triangulo\n 4-Area do circulo\n 5-Area do trapesio\n 6-sair\n";
        $op = readline(">>> ");
    switch ($op){
        case 1: 
            $lado = readline("Digite o valor do lado");
        
            echo "A area do Quadrado é: ", Quadrado($lado**2);
            break;
        case 2: 
            $lado = readline("Digite o valor do lado");
            $base = readline("digite o valor do lado");

            echo "A area do Retangulo é: ", Retangulo($lado,$base); 
            break;
        case 3: 
            $lado = readline("Digite o valor do lado");
            $base = readline("digite o valor da base");

            echo "A area do Triangulo é: ", Triangulo($lado,$base); 
            break;
        case 4: 
            $raio = readline("Digite o valor do raio");
        
            echo "A area do Circulo é: ", Circulo($raio);
            break;
        case 5: 
            $basemaior = readline("Digite o valor da base maior");
            $basemenor = readline("digite o valor da base menor");
            $altura = readline("digite o valor da altura");

            echo "A area do Trapesio é: ", Trapesio($basemaior,$basemenor,$altura); 
            break;
        case 6:
            echo "saindo";
            default:
            echo "Opção não encontrada \n";
            break;
        }
case 3:
    echo "Menu\n 1- caucular imc\n 2-caucular consumo de agua\n 3-frequencia Cardiaca Maxima\n 4-libras para quilo\n 5-caucular calorias basais\n 6-sair\n";
        $op = readline(">>> ");
    switch ($op){
    case 1: 
        $altura = readline("Digite sua altura");
        $peso = readline("Digite seu peso");
    
        echo "O seu imc é de: ", caucularimc($altura,$peso);
        break;
    case 2: 
        $peso = readline("Digite seu peso");
        
        echo "O seu consumo ideal de agua é de:", valorIdealAgua($peso); 
        break;
    case 3: 
        $idade = readline("Digite sua idade");
        
        echo "A sua frequencia cardiaca maxima é de: ", frequenciaCardiacaMaxima($idade); 
        break;
    case 4: 
        $libras = readline("Digite o valor em libras");
    
        echo "A conversao de libras para kg é: ", converterLibrasParaQuilo($libras);
        break;
    case 5: 
        $peso = readline("Digite seu peso");
        $altura = readline("Digite sua altura");
        $idade = readline("digite sua idade");

        echo "As suas calorias diarias são: ", calcularCaloriasBasais($peso,$altura,$idade); 
        break;
    case 6:
        echo "saindo";
        default:
        echo "Opção não encontrada \n";
        break;
    }
case 4:
    echo "saindo";
    break;
}
}
?>