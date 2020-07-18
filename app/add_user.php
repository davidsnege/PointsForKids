<?php
/////******************************************************************/////
// Recebemos estos parametros desde el form por POST para usar aqui

				$role = $_POST['role'];
				$name = $_POST['name'];
		    $mail = $_POST['mail'];
				$id = base64_encode($mail);
		    $pwd = $_POST['pwd'];
		    $points = $_POST['points'];
		    $confiance_points = $_POST['confiance_points'];
		    $foto = 'null';
		    $reg_date = date("m.d.Y ");

/////******************************************************************/////
// El user viene del $id para saber de que usuário estamos hablando aqui

			//Parametros para creacion de carpeta y archivo
			$user = $id;
			$userCarpeta = '../user/'.$user;
			$ruta = $userCarpeta.'/'.$user;

			//Si la carpeta no ehxiste creamos
			if (!file_exists($userCarpeta)) {
						mkdir($userCarpeta, 0777, true); //poner la ruta correcta
			}
			// Si la Carpeta ehxiste entonces creamos el archivo
			if (file_exists($userCarpeta)) {
						// Si exhiste archivo
						$filename = $ruta.'.json'; //Este va a ser el nombre del archivo
						if (file_exists($filename)) {
							// echo "El archivo $filename ya ehxistia <br>";
						} else {
							echo "El archivo $filename no ehxiste, entonces creamos <br>";
								$arquivo = fopen($filename,'w'); // Esto crea el archivo
								if ($arquivo == false) die('Não foi possível criar o arquivo. <br>');
						}
			}

/////******************************************************************/////
// Construimos la Array nueva para gravar en el archivo
			$myArr = array(
						'data' => array(
							'id' => $id,
							'role' => $role,
							'name' => $name,
					    'mail' => $mail,
					    'pwd' => $pwd,
					    'points' => $points,
					    'confiance_points' => $confiance_points,
					    'foto' => $foto,
					    'reg_date' => $reg_date
						)
			);

			$texto = json_encode($myArr);

/////******************************************************************/////
// Gravamos tudo de novo
// Abre Arquivo com modo rwx
$filename = $ruta.'.json';
$arquivo = fopen($filename,'rwx');
// Verifico si esta creado
if ($arquivo == false) die('Não foi possível criar o arquivo. <br>');
// Escribimos en el archivo
fwrite($arquivo, $texto);
// Cerramos el archivo despues de escribir
fclose($arquivo);
// Sobrescribimos el archivo siempre que necesitamos
$arquivo = fopen($filename,'r+w+x+');
// Reescrevendo no arquivo
fwrite($arquivo, $texto);
// Cerramos despues de escribir
fclose($arquivo);

/////******************************************************************/////
// Lendo o arquivo
$contenido_gravado = '';
if (file_exists($filename)) {
$contenido_gravado = stream_context_create(array(
		'http' => array(
				'timeout' => 1
				)
		)
);
$contenido_gravado = file_get_contents("$filename", 1, $contenido_gravado);
}
//Printamos para conferir o que havia antes
echo '<pre>';
		print_r($contenido_gravado);
echo '</pre>';



// header('Location: ver_usuarios.php');
// exit;

?>
