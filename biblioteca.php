<?php
namespace matematica {
 
    function somar($a, $b)
    {
        return $a + $b;
    }
 
    function subtrair($a, $b)
    {
        return $a - $b;
    }
}
 
namespace texto {
 
    function concatenar($nome, $sobrenome)
    {
 
        return $nome . " " . $sobrenome;
    }
}
 
namespace logica {
    function verificaidade($idade)
    {
        if ($idade >= 18) {
            return "Maior de idade";
        } else {
            return "Menor de idade";
        }
    }
    function verificaexercito($sexo, $idade)
    {
        if ($idade >= 18 && $sexo == "Masculino") {
            return "Você está apto";
        } else {
            return "Voce não está apto";
        }
    }
}
 
 














?>