

<?php
//Recebemos os dados para ver o usuario por post com seu email
// $mail = $_POST['mail'];
// $id = base64_encode($mail);


$id = 'bmljb2xlLnIuYi5zbmVnZUBnbWFpbC5jb20='; //USado para teste Victor
// $id = 'bmljb2xlLnIuYi5zbmVnZUBnbWFpbC5jb20='; //USado para teste Nicole


//Convertemos isso em variaveis usaveis
$user = $id;
$userCarpeta = $user;
$ruta = "user/".$userCarpeta.'/'.$user.'.json';

//Si el archivo ehxiste en la ruta, entonces lo buscamos
if (file_exists($ruta)) {
				$contenido_gravado = stream_context_create(array(
					'http' => array(
							'timeout' => 1
							)
					)
				);
				$contenido_gravado = file_get_contents("$ruta", 1, $contenido_gravado);
				$contenido_gravado = json_decode($contenido_gravado);
				//Printamos cada uno de los elementos
}

include_once('calculador.php');

$value_points = $contenido_gravado->data->points;
$value_moneys = $contenido_gravado->data->confiance_points;

$star_points_actual = $value_points / $stars;
$hearts_points_actual = $value_points / $hearts;
$moneys_points_actual = $value_points * $value_moneys;

//Exhibe los usuarios en un bucle - Hacer los HTML aqui
								 echo '<hr>';
								 echo $contenido_gravado->data->name;
								 echo '<br>';
								 echo '<br>';
								 echo $value_points;
								 echo '<br>';
								 echo round($star_points_actual, 0, PHP_ROUND_HALF_DOWN);
								 echo '<br>';
								 echo round($hearts_points_actual, 0, PHP_ROUND_HALF_DOWN);
								 echo '<br>';
								 echo '€ '.round($moneys_points_actual, 0, PHP_ROUND_HALF_DOWN);
								 echo '<br>';
								 echo '<br>';
								 echo $contenido_gravado->data->confiance_points;
								 echo '<br>';
								 echo '<hr>';
//Fin del bucle

	return $contenido_gravado;

?>
<!-- dmljdG9yLnIuYi5zbmVnZUBnbWFpbC5jb20=.json -->
