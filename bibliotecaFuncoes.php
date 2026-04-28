<?php

namespace geometria{

    function Quadrado ($lado){
    return $lado*$lado;
    }
function Retangulo ($base,$altura){
    return $base*$altura;
}
function Triangulo ($base,$altura){
    return $base*$altura/2;
}
function Circulo ($raio){
    return 3.14*$raio**2;
}
function Trapesio ($basemaior,$basemenor,$altura){
    return $basemaior*$basemenor*$altura/2;
}


}

namespace saude{

function caucularimc($altura,$peso){
    return $peso/$altura**2;
}
function valorIdealAgua($peso){
    return $peso*35;
}
function frequenciaCardiacaMaxima($idade){
    return 207- $idade*0.7;
}
function converterLibrasParaQuilo($libras){
    return $libras*0.4543592;
}
function calcularCaloriasBasais($peso,$altura,$idade, ){
    return 655 + $peso*9.6 + $altura*1.7 + $idade*4.7;
}
}

?>