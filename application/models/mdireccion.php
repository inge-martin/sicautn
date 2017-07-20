<?php 
/**
* 
*/
class mdireccion extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardarDireccion($paramDir){
		$campos = array(
			'calle' 		=> $paramDir['calle'],
			'numero' 		=> $paramDir['numero'],
			'manzana' 		=> $paramDir['manzana'],
			'lote' 			=> $paramDir['lote'],
			'cp' 			=> $paramDir['cp'],
			'id_estado'		=> $paramDir['id_estado'],
			'id_municipio'	=> $paramDir['id_municipio'],
			'id_localidad'	=> $paramDir['id_localidad']
		);

		$this->db->insert('direccion',$campos);
		return $this->db->insert_id();
	}//fin guardar
}

?>