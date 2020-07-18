<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
//Recebemos os dados para ver o usuario por post com seu email
// $mail = $_POST['mail'];
// $id = base64_encode($mail);


$id = 'bmljb2xlLnIuYi5zbmVnZUBnbWFpbC5jb20='; //USado para teste Victor
// $id = 'bmljb2xlLnIuYi5zbmVnZUBnbWFpbC5jb20='; //USado para teste Nicole

//Convertemos isso em variaveis usaveis
$user = $id;
$userCarpeta = $user;
$ruta = "../user/".$userCarpeta.'/'.$user.'.json';

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

//Aqui colocamos um FORM para enviar a gravacao em add_user mesmo
//Exhibe los usuarios en un bucle - Hacer los HTML aqui

echo '<form action="add_user.php" method="post">';

echo '

	<div class="form-group">
		<input type="hidden" name="role" class="form-control" id="role" value="'.$contenido_gravado->data->role.'">
	</div>

	<div class="form-group">
		<label for="exampleFormControlInput1">Nome</label>
		<input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="'.$contenido_gravado->data->name.'" value="'.$contenido_gravado->data->name.'" readonly>
	</div>

	<div class="form-group">
		<label for="exampleFormControlInput1">Email address</label>
		<input type="email" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="'.$contenido_gravado->data->mail.'" value="'.$contenido_gravado->data->mail.'" readonly>
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="hidden" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="'.$contenido_gravado->data->pwd.'" value="'.$contenido_gravado->data->pwd.'" readonly>
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">Default Confiance Points : Like 0.005</label>
		<input type="text" name="confiance_points" class="form-control" id="exampleInputPassword1" placeholder="'.$contenido_gravado->data->confiance_points.'" value="'.$contenido_gravado->data->confiance_points.'" >
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">Actual Points</label>
		<input type="number" step="10" name="points" class="form-control" id="points" placeholder="'.$contenido_gravado->data->points.'" value="'.$contenido_gravado->data->points.'">
	</div>

	<button type="submit" class="btn btn-primary btn-sm">Confirm Points</button>


		';

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



echo '</form>';

//Fin del bucle


?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
