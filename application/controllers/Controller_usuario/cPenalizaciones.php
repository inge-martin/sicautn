<?php
class CPenalizaciones{

	private $id_penalizaciones;
	private $motivo;
	private $descripcion;
	private $sancion;

	public function __GET($k){ 
		return $this->$k; 
	}
	public function __SET($k, $v){ 
		return $this->$k = $v; 
	}
}
?>