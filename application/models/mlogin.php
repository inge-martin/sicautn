<?php

class mlogin extends CI_Model{

	public function ingresar($user,$pass){
		$this->db->select('usu.id_usuario, usu.usuario, 
							per.id_persona, per.nombre, per.ap_paterno, per.foto,
							per.ap_materno, per.matricula, per.id_tipo_usuarios');
		$this->db->from('usuarios usu');
		$this->db->join('personal per','per.id_persona = usu.id_persona');
		$this->db->where('usu.usuario', $user);
		$this->db->where('usu.contrasena',$pass);

		$resultado = $this->db->get();
		//si es 1 ha traido la información
		if($resultado->num_rows() == 1){
			//variable a nivel de campo toma el registro
			$r = $resultado->row();

			$s_usuario = array(
				's_idUsuario' 	=> $r->id_usuario,
				's_idpersona'	=> $r->id_persona,
				's_foto'		=> $r->foto,
				's_tipo_usuario'=> $r->id_tipo_usuarios,
				's_usuario'		=> $r->nombre . " " . $r->ap_paterno
			);
			//guardas las variables en una sesión
			$this->session->set_userdata($s_usuario);
			return 1;
		}else{
			return 0;
		}
		//return $resultado->result();
	}
}
?>