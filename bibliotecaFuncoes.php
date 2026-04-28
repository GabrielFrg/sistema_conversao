<?php

namespace geometria{

    function Quadrado ($lado);{
    return $lado*$lado;
    }
function Retangulo ($base,$altura);{
    return $base*$altura;
}
function Triangulo ($base,$altura);{
    return $base*$altura/2;
}
function Circulo ($raio);{
    return 3.14*$raio**2;
}
function Trapesio ($basemaior,$basemenor,$altura);{
    return $basemaior*$basemenor*$altura/2;
}


}

?>