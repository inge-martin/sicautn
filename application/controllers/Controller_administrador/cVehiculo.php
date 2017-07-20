<?php
class CVehiculo
{

	private $id_vehiculo;
	private $placas;
	private $modelo;
	private $color;	
	private $descripcion;
	private $ano;
	private $foto_vehiculo;

	public function __GET($k){
		return $this->$k; 
	}
	public function __SET($k, $v){
		return $this->$k = $v; 
	}
}
?>