
<?php
class CPersonal{

	private $id_persona;
	private $matricula;
	private $turno;
	private $nombre;
	private $ap_paterno;
	private $ap_materno;
	private $fecha_nacimiento;
	private $sexo;	
	private $curp;
    private $telefonoCasa;
	private $telefonoCelular;
	private $email;
	private $licencia;
	private $foto;
	private $id_tipo_usuarios;
	private $id_carreras;
	private $id_penalizaciones;	
	private $id_vehiculo;
	private $id_direccion;

	public function __GET($k){ 
		return $this->$k; 
	}
	public function __SET($k, $v){ 
		return $this->$k = $v; 
	}
}