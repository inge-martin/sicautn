
<?php
class CUsuarios
{
	private $id_usuario;
	private $usuario;
	private $contrasena;
	private $id_persona;

	public function __GET($k){ 
		return $this->$k; 
	}
	public function __SET($k, $v){ 
		return $this->$k = $v; 
	}
}