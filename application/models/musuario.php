<?php

class musuario extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	public function guardarUsuario($paramUsu){
		$campos = array(
			'usuario' 		=> $paramUsu['usuario'],
			'contrasena'	=> $paramUsu['contrasena'],
			'id_persona'	=> $paramUsu['id_persona']
		);

		$this->db->insert('usuarios',$campos);
	}//fin guardar

	public function deleteUsuarios($id_persona){
		$this->db->where('id_persona',$id_persona);
		$this->db->delete('usuarios');


	}//fin delete
}
?>