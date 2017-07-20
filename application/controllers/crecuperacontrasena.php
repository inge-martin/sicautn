<?php 

	class crecuperacontrasena extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('mrecuperacontrasena');
		}

		public function index(){
			$data['mensaje'] = '';
			$this->load->view('LayoutUsuario/header');
			$this->load->view('LayoutUsuario/menu');
			$this->load->view('Views_usuario/usuarios/viewusuarios',$data);
			$this->load->view('LayoutUsuario/footer');
		}

		public function actualizar(){
			$param['id_usuario'] 	= $this->input->post('id_usuario');
	 		$param['contrasena'] 	= md5($this->input->post('contrasena'));
			$param['cActual'] 		= md5($this->input->post('cActual'));

	 		$result = $this->mcambiacontrasena->verificar($param);
	 		
	 		if($result == 0){
				$data['mensaje'] = 'Tu contraseña actual no coincide.';
				$this->load->view('LayoutUsuario/header');
				$this->load->view('LayoutUsuario/menu');
				$this->load->view('Views_usuario/usuarios/viewusuarios',$data);
				$this->load->view('LayoutUsuario/footer');	 			
	 		}else{	 			
		 		$this->mcambiacontrasena->actualizar($param);
				$data['mensaje'] = 'Tu contraseña ha sido cambiada con exito.';
				$this->load->view('LayoutUsuario/header');
				$this->load->view('LayoutUsuario/menu');
				$this->load->view('Views_usuario/usuarios/viewusuarios',$data);
				$this->load->view('LayoutUsuario/footer');
	 		}
		}

		public function validar(){
			$param['email'] 	= $this->input->post('txtEmail');
	 		$param['usuario'] 	= $this->input->post('txtUsuario');
	 		$result = $this->mrecuperacontrasena->validar($param);

	 		if($result == 0){
	 			echo "No tenemos ningun usuario registrado con ese correo o usuario, vuelve a intentarlo";
	 		}else{
				// $data['id_usuario']	= $result['id_usuario'];
				// $data['usuario']	= $result['usuario'];
	 		// 	$this->load->view('LayoutInicio/header');
				// $this->load->view('LayoutInicio/menu');
				// $this->load->view('vRecuperarContrasena',$data);
				// $this->load->view('LayoutInicio/footer');
	 		}
		}

	}
?>