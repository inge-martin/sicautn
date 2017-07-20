<?php 

class CCombosPersonal extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mcombospersonal');
	}

	public function getTipoUsuario(){
		$resultado = $this->mcombospersonal->getTipoUsuario();
		echo json_encode($resultado);
	}

	public function getTipoUsuarioAdmin(){
		$resultado = $this->mcombospersonal->getTipoUsuarioAdmin();
		echo json_encode($resultado);
	}

	public function getCarreras(){
		$resultado = $this->mcombospersonal->getCarreras();
		echo json_encode($resultado);
	}

	public function getPenalizaciones(){
		$resultado = $this->mcombospersonal->getPenalizaciones();
		echo json_encode($resultado);
	}	

	public function getEstados(){
		$resultado = $this->mcombospersonal->getEstados();
		echo json_encode($resultado);
	}

	public function getMunicipios(){
		$s = $this->input->post('id_estado');
		$resultado = $this->mcombospersonal->getMunicipios($s);
		echo json_encode($resultado);
	}

	public function getLocalidades(){
		$s = $this->input->post('id_municipio');
		$resultado = $this->mcombospersonal->getLocalidades($s);
		echo json_encode($resultado);
	}
}
?>