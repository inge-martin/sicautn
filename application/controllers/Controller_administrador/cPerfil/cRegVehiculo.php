<?php

	class CRegVehiculo extends CI_Controller{

	 	function __construct(){
	 		parent::__construct();
	 		$this->load->model('modelosUsuario/mregvehiculo');
	 	}

	 	public function index(){
	 		$data['error'] = " ";
			$this->load->view('LayoutUsuario/header');
			$this->load->view('LayoutUsuario/menu');
	 		$this->load->view('Views_usuario/regVehiculo/viewRegVehiculo',$data);
			$this->load->view('LayoutUsuario/footer');	
	 	}	

	 	public function guardar(){

	 		$paramVehiculo['placas']		= $this->input->post('txtPlacas');
	 		$paramVehiculo['modelo']		= $this->input->post('txtModelo');
	 		$paramVehiculo['foto_vehiculo']	= $this->input->post('txtFoto');
	 		$paramVehiculo['color'] 		= $this->input->post('txtColor');
	 		$paramVehiculo['descripcion'] 	= $this->input->post('txtDescripcion');
	 		$paramVehiculo['ano'] 			= $this->input->post('txtAno');
	 		$paramVehiculo['id_persona'] 	= $this->input->post('txtId');

	 		$config['upload_path'] = './uploads/imagenes/vehiculos';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = '10000';
	        $config['max_width'] = '10000';
	        $config['max_height'] = '10000';

	        $this->load->library('upload',$config);

	        //si al subir imagen manda error 
	        if (!$this->upload->do_upload("txtFoto")) {
	            $data['error'] = $this->upload->display_errors();
				$this->load->view('LayoutUsuario/header');
				$this->load->view('LayoutUsuario/menu');
		 		$this->load->view('Views_usuario/regVehiculo/viewRegVehiculo',$data);
				$this->load->view('LayoutUsuario/footer');

	        } else {

	            $file_info = $this->upload->data();
	            $this->crearMiniatura($file_info['file_name']);

	            $paramVehiculo['foto_vehiculo'] = $file_info['file_name'];  	 			
	 			$this->mregvehiculo->guardarVehiculo($paramVehiculo);

				// $this->load->view('LayoutUsuario/header');
				// $this->load->view('LayoutUsuario/menu');
		 		// $this->load->view('Views_usuario/perfil/viewperfil');
				// $this->load->view('LayoutUsuario/footer');
				redirect(base_url(). 'Controller_usuario/perfil');	 			
	        }//else

	 	}//metodo guardar

	    function crearMiniatura($filename){
	        $config['image_library'] = 'gd2';
	        $config['source_image'] = 'uploads/imagenes/vehiculos/'.$filename;
	        $config['create_thumb'] = TRUE;
	        $config['maintain_ratio'] = TRUE;
	        $config['new_image']='uploads/imagenes/thumbs/';
	        $config['thumb_marker']='';//captura_thumb.png
	        $config['width'] = 150;
	        $config['height'] = 150;
	        $this->load->library('image_lib', $config); 
	        $this->image_lib->resize();
	    }		

	 }//fn clase
?>