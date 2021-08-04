<?php 
/**
 * 
 */
class Acciones
{
	private $modelo;
	

	public function crearEditarUsuario($id,$nombre,$apellido,$telefono,$direccon){
		$this->modelo = new AccionesModel();
		$idu = intval($id);
		if ($idu==0) {
			$rest = $this->modelo->insertar($nombre,$apellido,$telefono,$direccon);
			if ($rest==1) {
				$rest =array('stad' =>true ,'msj' =>"datos Agregados correctamente" );
			}else{
				$rest =array('stad' =>false ,'msj' =>"datos No Agregados correctamente" );
			}
		}else{
			$rest = $this->modelo->editar($id,$nombre,$apellido,$telefono,$direccon);
			if ($rest==1) {
				$rest = array('stad' =>true ,'msj' =>"datos Actualizados correctamente" );
			}else{
			$rest = array('stad' =>false ,'msj' =>"Error No se Actualizaron los datos" ); 
			}
		}
      return $rest;
      die();
	}
	public function verUsuarios(){
    $this->modelo = new AccionesModel();
    $ret = $this->modelo->verdatos();
    if ($ret==0) {
    	$ret = array('stad' =>false ,'msj' =>"Error No se Cargaron los datos" ); 
    }
    return $ret;
    die();
    }
    public function verUsuario(int $id){
    $this->modelo = new AccionesModel();
    $ret = $this->modelo->verdato($id);
    if ($ret==0) {
    	$ret = array('stad' =>false ,'msj' =>"Error No se Cargaron los datos" ); 
    }
   
    }
	
	
	public function eliminarUsuario(int $id){
	$this->modelo = new AccionesModel();
    $ret = $this->modelo->Eliminar($id);
    if ($ret==0) {
    	$ret = array('stad' =>false ,'msj' =>"Error No se Eliminaron los datos" ); 
    }else{
        $ret = array('stad' =>true ,'msj' =>"Datos Eliminados Correctamente"); 
    } 
     return $ret;
    die();
	}
}

