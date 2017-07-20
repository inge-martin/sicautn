
<?php
class CDireccion
{

	private $id_direccion;
	private $calle;
	private $numero;
	private $manzana;
	private $lote;
	private $cp;
	private $id_estado;
	private $id_municipio;	
	private $id_localidad;

	public function __GET($k){ 
		return $this->$k; 
	}
	public function __SET($k, $v){ 
		return $this->$k = $v; 
	}
}