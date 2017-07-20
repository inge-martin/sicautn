<?php 

	class ccambiacontrasena extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('modelosAdministrador/mcambiacontrasena');
		}

		public function index(){
			$data['mensaje'] = '';
			$this->load->view('LayoutAdministrador/header');
			$this->load->view('LayoutAdministrador/menu');
			$this->load->view('Views_administrador/usuarios/viewusuarios',$data);
			$this->load->view('LayoutAdministrador/footer');
		}

		public function actualizar(){
			$param['id_usuario'] 	= $this->input->post('id_usuario');
	 		$param['contrasena'] 	= md5($this->input->post('contrasena'));
			$param['cActual'] 		= md5($this->input->post('cActual'));

	 		$result = $this->mcambiacontrasena->verificar($param);
	 		
	 		if($result == 0){
				$data['mensaje'] = 'Tu contraseña actual no coincide.';
				$this->load->view('LayoutAdministrador/header');
				$this->load->view('LayoutAdministrador/menu');
				$this->load->view('Views_administrador/usuarios/viewusuarios',$data);
				$this->load->view('LayoutAdministrador/footer');	 			
	 		}else{	 			
		 		$this->mcambiacontrasena->actualizar($param);
				$data['mensaje'] = 'Tu contraseña ha sido cambiada con exito.';
				$this->load->view('LayoutAdministrador/header');
				$this->load->view('LayoutAdministrador/menu');
				$this->load->view('Views_administrador/usuarios/viewusuarios',$data);
				$this->load->view('LayoutAdministrador/footer');
	 		}
		}

	}
?>