<?php
$radio=3;   // el radio
$longitud=2*M_PI*$radio;  // longitud de la circunferencia
$superficie=M_PI*$radio*$radio;  // superficie del circulo
$volumen=4/3*M_PI*$radio*$radio*$radio;  // volumen de la esfera
echo "<h1>Longitud de la circunferencia con radio $radio: $longitud</h1>";
echo "<h2>Superficie del circulo con radio $radio: $superficie</h2>";
echo "<h3>Volumen de la esfera con radio $radio: $volumen</h3>";
?>
