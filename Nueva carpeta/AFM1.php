<?php
$radio = 3;  // El valor del radio

// Cálculos originales
$longitud = 2 * M_PI * $radio;  // Longitud de la circunferencia
$superficie = M_PI * $radio * $radio;  // Superficie del círculo
$volumen = (4/3) * M_PI * $radio * $radio * $radio;  // Volumen de la esfera

// Redondear a 2 decimales
$longitud = round($longitud, 2);
$superficie = round($superficie, 2);
$volumen = round($volumen, 2);

// Mostrar resultados redondeados
echo "<h1>Longitud de la circunferencia con radio $radio: $longitud</h1>";
echo "<h2>Superficie del círculo con radio $radio: $superficie</h2>";
echo "<h3>Volumen de la esfera con radio $radio: $volumen</h3>";
?>
