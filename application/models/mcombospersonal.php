<?php 

class mcombospersonal extends CI_Model{
	
	function __construct(){

		parent::__construct();
	}

	public function getTipoUsuario(){
		$this->db->select('id_tipo_usuarios, descripcion_usuario');
		$this->db->from('tipo_usuarios');
		$this->db->where_In('id_tipo_usuarios',[2,3]);
		$s = $this->db->get();
		return $s->result();
	}
	public function getTipoUsuarioAdmin(){
		$this->db->select('id_tipo_usuarios, descripcion_usuario');
		$this->db->from('tipo_usuarios');
		$this->db->where_In('id_tipo_usuarios',[1,4]);
		$s = $this->db->get();
		return $s->result();
	}	

	public function getCarreras(){
		$s = $this->db->get('carreras');
		return $s->result();
	}

	public function getPenalizaciones(){
		$s = $this->db->get('penalizaciones');
		return $s->result();
	}			

	public function getEstados(){
		$s = $this->db->get('estados');
		return $s->result();
	}

	public function getMunicipios($s){
		$s = $this->db->get_where('municipios', array('id_estado' => $s));
		return $s->result();
	}

	public function getLocalidades($s){
		$s = $this->db->get_where('localidades', array('id_municipio' => $s));
		return $s->result();
	}

}
?>