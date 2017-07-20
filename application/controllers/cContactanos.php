<?php 
class CContactanos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mcontactanos');
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('LayoutInicio/header');
		$this->load->view('LayoutInicio/menu');
		$this->load->view('vContactanos');
		$this->load->view('LayoutInicio/footer');
	}

	public function guardar(){
	 		//Dirección
	 		$paramContacto['nombre']			= $this->input->post('first_name');
	 		$paramContacto['apellidos']			= $this->input->post('last_name');
	 		$paramContacto['email']				= $this->input->post('email');
	 		$paramContacto['telefono']			= $this->input->post('telephone');
	 		$paramContacto['comentarios']		= $this->input->post('comments');

	 		$this->mcontactanos->registroContacto($paramContacto);
	 		$data['mensaje'] = "Exito al enviar tu email";
			$this->load->view('LayoutInicio/header');
			$this->load->view('LayoutInicio/menu');
	 		$this->load->view('vContactanos',$data);
			$this->load->view('LayoutInicio/footer');	 				
}
}

?>