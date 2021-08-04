 <?php

class AccionesModel extends Conexion
{
	private $conex;
	public function __construct()
	{
		$this->conex = new Conexion();
		$this->conex = $this->conex->conectar();
		
	}
	public function verdatos(){
    $sql = "SELECT * FROM usuarios";
    $result = $this->conex->prepare($sql);
	$result->execute();
	$data = $result->fetchall(PDO::FETCH_ASSOC);
	return $data;
	}
	public function verdato(int $id){
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $result = $this->conex->prepare($sql);
	$result->execute();
	$data = $result->fetch(PDO::FETCH_ASSOC);
	return $data;
	}
	public function insertar($nombre,$apellido,$telefono,$direccion){
     $sql="INSERT INTO usuarios(nombre,apellido,telefono,direccion)VALUES(?,?,?,?)";
     $datos = array($nombre,$apellido,$telefono,$direccion);
     $insert = $this->conex->prepare($sql);
     $res = $insert->execute($datos);
     if ($res) {
     	$res = 1;
     }else{
     	$res = 0;
     }
     return $res;
	}
	public function editar($id,$nombre,$apellido,$telefono,$direccion){
    $sql="UPDATE usuarios SET nombre=?,apellido=?,telefono=?,direccion=? WHERE id = $id;";
     $datos = array($nombre,$apellido,$telefono,$direccion);
     $insert = $this->conex->prepare($sql);
     $res = $insert->execute($datos);
      if ($res) {
     	$res = 1;
     }else{
     	$res = 0;
     }
     return $res;
	}
	public function Eliminar(int $id){
	 $sql="DELETE FROM usuarios WHERE id = $id;";
     $insert = $this->conex->prepare($sql);
     $res = $insert->execute();
      if ($res) {
     	$res = 1;
     }else{
     	$res = 0;
     }
     return $res;
	}
}