<?php 

/**
* 
*/
class MContactanos extends CI_Model{
	
	function __construct(){
		# code...
		parent::__construct();	
	}

	public function registroContacto($paramContacto){
		$campos = array(
			'nombre' 		=> $paramContacto['nombre'],
			'apellidos' 	=> $paramContacto['apellidos'],
			'email' 		=> $paramContacto['email'],
			'telefono'		=> $paramContacto['telefono'],
			'comentarios' 	=> $paramContacto['comentarios']
		);

		$this->db->insert('comentarios',$campos);

	}
}

 ?>