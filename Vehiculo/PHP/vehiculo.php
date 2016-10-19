<?PHP
date_default_timezone_set('America/Argentina/Buenos_Aires');
require_once('accesoadatos.php');
		
class vehiculo{

	private $patente;
	private $fecha;


	function __construct(){

	}

	public function setIngreso($parametro){

		$this->fecha = $parametro;

	} 

	public function getIngreso(){

		return $this->fecha;

	}

	public function setPatente($parametro){

		$this->patente = $parametro;

	} 

	public function getPatente(){

		return $this->patente;

	}

	static function ingresarVehiculo($pat){

		$v1 = new vehiculo;
		$v1->setPatente($pat);
		$ingreso = date('d-M-Y H:i:s');
		$v1->setIngreso($ingreso);

		
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta('INSERT INTO vehiculo (patente, ingreso) VALUES (:patente,:fecha)');
		$consulta->bindValue(':patente', $v1->getPatente(), PDO::PARAM_INT);
		$consulta->bindValue(':fecha',   $v1->getIngreso(), PDO::PARAM_INT);
		$consulta->execute();

		return "guardado";
	}


}


?>