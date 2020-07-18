<?php
// points - cada ponto é o equivalente a 00.01 (boa ação, comportamento adequeado, atenção, etc...)
// stars - cada star é equivalente a 01.00 points
// hearts - cada heart é equivalente a 10.00 stars
// moneys - cada money é equivalente a 100.00 hearts
// Recompensa em Dinheiro equivale a (cada Moneys é == € 10.00 dez euros )

$points = 0001;
$stars = 0100;
$hearts = 1000;
$moneys = 2500;
//(Na tabela moneys equivale aos confiance_points)
// Confiance points devem ser modificados conforme o nível de confiança de cada um.
// Verificar como criar um algorítmo para actualizar os pontos de confiança de acordo
// com o desempenho de cada um. "é um regulador como o valor da cotação de cada um"

// select todos de determinado usuario

// fazer a comparação
$value_points = 125015; // Valor de teste

$star_points_actual = $value_points / $stars;
$hearts_points_actual = $value_points / $hearts;
$moneys_points_actual = $value_points / $moneys;

echo $value_points;
echo '<br>';
echo round($star_points_actual, 1, PHP_ROUND_HALF_DOWN);
echo '<br>';
echo round($hearts_points_actual, 1, PHP_ROUND_HALF_DOWN);
echo '<br>';
echo '€ '.round($moneys_points_actual, 0, PHP_ROUND_HALF_DOWN);
echo '<br>';

// Las opciones de round son
// PHP_ROUND_HALF_UP
// PHP_ROUND_HALF_DOWN
// PHP_ROUND_HALF_EVEN
// PHP_ROUND_HALF_ODD
?>
