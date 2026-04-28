<?php

require_once "bibliotecaFuncoes.php";

use function conversao\dolarParaReal;
use function conversao\euroParaReal;
use function conversao\pesoParaReal;
use function conversao\libraParaReal;
use function conversao\ieneParaReal;

echo "Valor do dolar", dolarParaReal(100, 5);
echo "Valor do euro", euroParaReal(100, 5.83);
echo "Valor do peso", pesoParaReal(100, 0.0035);
echo "Valor da libra", libraParaReal(100, 6.72);
echo "Valor do iene", ieneParaReal(100, 0.0031);

?>