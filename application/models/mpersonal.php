<?php
	class mpersonal extends CI_Model{

		function __construct(){
			parent::__construct();
		}

		public function guardarPersona($param){
			$campos = array(
				'nombre' 			=> $param['nombre'],
				'ap_paterno' 		=> $param['ap_paterno'],
				'ap_materno' 		=> $param['ap_materno'],
				'fecha_nacimiento' 	=> $param['fecha_nacimiento'],
				'sexo' 				=> $param['sexo'],
				'curp' 				=> $param['curp'],
				'telefonoCasa' 		=> $param['telefonoCasa'],
				'telefonoCelular'	=> $param['telefonoCelular'],
				'id_carreras' 		=> $param['id_carreras'],
				'id_tipo_usuarios' 	=> $param['id_tipo_usuarios'],
				'email' 			=> $param['email'],
				'turno' 			=> $param['turno'],
				'id_direccion' 		=> $param['id_direccion'],
				'matricula' 		=> $param['matricula'],
				'licencia' 			=> $param['licencia'],
				'foto' 				=> $param['foto']
			);

			$this->db->insert('personal',$campos);
			return $this->db->insert_id();
		}//fin guardar
	

		public function actualizar($param){
			$campos = array(
				'matricula' 		=> $param['matricula'],
				'nombre' 			=> $param['nombre'],
				'ap_paterno' 		=> $param['ap_paterno'],
				'ap_materno' 		=> $param['ap_materno']
			);
			$this->db->update('personal',$campos);
			$this->db->where('id_personal',$this->session->userdata('s_idpersona'));
			return 1;
		}// fin actualizar

		public function deletePersonal($id_persona){
			$campos = array(
				'id_persona' => $id_persona
			);
			$this->db->delete('personal',$campos);
		}//fin delete
	
	}

?>