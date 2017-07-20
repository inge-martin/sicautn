<?php 

class mrecuperacontrasena extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	public function verificar($param){
		$id_usu  = $param['id_usuario'];
		$cActual = $param['cActual'];
		$sql = "SELECT * FROM usuarios where contrasena = '$cActual' and id_usuario = '$id_usu'";
		$query = $this->db->query($sql);
		if($query->num_rows() == 0){
			//la contraseña no coincide
			return 0;
		}else{
			//la contraseña coincide
			return 1;
		}
	}

	public function actualizar($param){
		$campos = array(
			'id_usuario' 		=> $param['id_usuario'],
			'contrasena' 		=> $param['contrasena']
		);
		$id_usu 	= $param['id_usuario'];
		$contrasena = $param['contrasena'];
		$sql =  "UPDATE usuarios SET contrasena = '$contrasena' WHERE id_usuario = '$id_usu' ";

		//Ejecutamos la consulta
		$query = $this->db->query($sql);
	}

	public function validar($param){
		$email  = $param['email'];
		$usuario = $param['usuario'];
		$sql = " SELECT usuarios.id_usuario, usuarios.usuario FROM usuarios, personal WHERE usuarios.usuario = '$usuario' AND personal.email = '$email' AND personal.id_persona = usuarios.id_persona ";
		$query = $this->db->query($sql);
		if($query->num_rows() == 0){
			//No hay usuario
			return 0;
		}else{
			$r = $query->row();
			$resultados = array(
				'id_usuario' 	=> $r->id_usuario,			
				'usuario' 	=> $r->usuario
			);			

			return $resultados;
		}		
		}
	}	

}


?>