<?php
class CAcceso{

	private $id_acceso;
	private $entrada;
	private $salida;
	private $fecha;	
	private $id_usuario;

	public function __GET($k){ 
		return $this->$k; 
	}
	
	public function __SET($k, $v){
		return $this->$k = $v; 
	}
}
?>