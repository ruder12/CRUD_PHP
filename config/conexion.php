<?php 
include_once "Config.php";
/**
 * 
 */
class Conexion 
{
	private $conexion;
	public function __construct(){
		$dns = "mysql:host=".BD_HOST.";dbname=".BD_NAME.";charset=".BD_UTF;
		try{ 
			$this->conexion = new PDO($dns,BD_USER,BD_PASS);
			$this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public function conectar()
	{
		return $this->conexion;

	}
}

 ?>