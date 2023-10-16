<?php

/*
Ejercicio arrays - Interes compuesto
meses: x(10)
inversion inicial: x(100,000)
rendimiento: 2%

mes inversion interes saldo
1    100,000   2000  102,000

*/

$meses = $_POST['meses'];
$invInicial = $_POST['invInicial'];
$rendi = $_POST['rendi'] / 100;
$saldo = $invInicial;
$invTotal = array();

for ($mes = 1; $mes <= $meses; $mes++){
    $interes = $saldo * $rendi;
    $saldo += $interes;
    $invTotal[] = array('mes' => $mes,'inversion' => number_format($invInicial, 2),
    'interes' => number_format($interes, 2),'saldo' => number_format($saldo, 2)
    );
}
echo "<table border = '3'>";
echo "<tr><th>Mes</th><th>Inversion</th><th>Interes</th><th>Saldo</th></tr>";
for($i = 0;$i < count($invTotal);$i++){
    echo "<tr><th>".$invTotal[$i]['mes']."</th><th>"
    .$invTotal[$i]['inversion']."</th><th>"
    .$invTotal[$i]['interes']."</th><th>"
    .$invTotal[$i]['saldo']."</th></tr>";
}
echo "</table";

?>
