<?php

class cLogin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mlogin');
		//session_start();
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('LayoutInicio/header');
		$this->load->view('LayoutInicio/menu');
		$this->load->view('vLogin',$data);
		$this->load->view('LayoutInicio/footer');
	}

	public function ingresar(){
		$user = $this->input->post('txtUsuario');
		$pass = md5($this->input->post('txtContrasena'));

		$result = $this->mlogin->ingresar($user,$pass);

		if($result ==1){
			if($this->session->userdata('s_tipo_usuario') == 1){

				redirect(base_url(). 'Controller_administrador/inicio');

		    }elseif($this->session->userdata('s_tipo_usuario') == 2 or 
		    		$this->session->userdata('s_tipo_usuario') == 3){

				redirect(base_url(). 'Controller_usuario/inicio');

		    }elseif($this->session->userdata('s_tipo_usuario') == 4){

				redirect(base_url(). 'Controller_seguridad/inicio');

		    }	
		}else{
			$data['mensaje']= 'Usuario o contraseña erroneos';
			$this->load->view('LayoutInicio/header');
			$this->load->view('LayoutInicio/menu');
			$this->load->view('vLogin',$data);
			$this->load->view('LayoutInicio/footer');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('s_usuario');
	   	$this->session->sess_destroy();
	   	redirect(base_url()."cIndex_exproy");
	}

}
?>