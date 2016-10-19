<?PHP
	date_default_timezone_set('America/Argentina/Buenos_Aires');

	if(isset($_POST["p"])){

		require_once('vehiculo.php');

		$retorno = vehiculo::ingresarVehiculo($_POST["p"]);

		echo $retorno;

	}

?>