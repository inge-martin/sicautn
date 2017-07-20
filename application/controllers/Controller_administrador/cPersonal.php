
<?php
class CPersonal{

	private $matricula;
	private $turno;
	private $nombreCarrera;
	private $nombrePersonal;
	private $ap_paterno;
	private $ap_materno;
	private $fecha_nacimiento;
	private $sexo;
	private $curp;
	private $telefonoCasa;
	private $telefonoCelular;
	private $email;
	private $usuario;
	private $calle;
	private $numero;
	private $manzana;
	private $lote;
	private $cp;
	private $nombreEstado;
	private $nombreMunicipio;
	private $nombreLocalidades;

	public function __GET($k){ 
		return $this->$k; 
	}
	
	public function __SET($k, $v){ 
		return $this->$k = $v; 
	}
}