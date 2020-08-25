<?php

$montosValidos = array(200, 100, 50, 20, 10, 5, 2, 1);//billetes y monedas, sol peruano.
$centimos = array(50, 20, 10);//monedas de céntimos, sol peruano.

$numeroreal = 476.678; //cantidad monetaria a distribuir.<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-------
if ($numeroreal <= 0) {
    echo 'la cantidad debe ser mayor a 0';
    return;
}

$numeroreal = round($numeroreal, 1);
$numero = (int)$numeroreal;
$centimoUser = round(($numeroreal - floor($numeroreal)) * 100);

echo "Su vuelto es S./" . number_format((float)$numeroreal, 2, '.', ' ') . " repartidos en: <br><br>";

# $valorActual es el formato de billete o moneda del Sol peruano, $num es el el monto a distribuir.
function Calcular($valorActual, $num){
    $tipo = "billetes";
    if ($valorActual < 10) {
        $tipo = "monedas";
    }
    echo (floor($num / $valorActual)) . " $tipo de S./$valorActual <br>";
    return $num % $valorActual;
}

function CalcularCentimo($formatoCentimo, $centimo){
    $tipo = "moneda";
    if (floor($formatoCentimo / $centimo) > 1) {
        $tipo = "monedas";
    }
    echo floor($formatoCentimo / $centimo) . " $tipo de $centimo céntimos <br>";
    return $formatoCentimo % $centimo;
}

for ($i = 0; $i < count($montosValidos); $i++) {
    if ($numero >= $montosValidos[$i]) {
        $numero = Calcular($montosValidos[$i], $numero);
    }
}

for ($i = 0; $i < count($centimos); $i++){

    if ($centimoUser >= $centimos[$i])
    {
        $centimoUser = CalcularCentimo($centimoUser, $centimos[$i]);
    }
}
?>