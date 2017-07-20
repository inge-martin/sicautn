<?php
class CTipousUarios
{
	private $id_tipo_usuarios;
	private $descripcion_usuario;

	public function __GET($k){ 
		return $this->$k; 
	}
	public function __SET($k, $v){ 
		return $this->$k = $v; 
	}
}
?>