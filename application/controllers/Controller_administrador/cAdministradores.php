<?php

	class Cadministradores extends CI_Controller{

	 	function __construct(){
	 		parent::__construct();
	 		$this->load->model('mpersonal');
	 		$this->load->model('musuario');
	 		$this->load->model('mdireccion');
	 	}

	 	public function index(){
	 		$data['error'] = " ";
			$this->load->view('LayoutAdministrador/header');
			$this->load->view('LayoutAdministrador/menu');
	 		$this->load->view('Views_administrador/vAdministradores',$data);
			$this->load->view('LayoutAdministrador/footer');	
	 	}

		public function scanearString($string){
		 
		    $string = trim($string);
		 
		    $string = str_replace(
		        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
		        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
		        $string
		    );
		 
		    $string = str_replace(
		        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
		        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
		        $string
		    );
		 
		    $string = str_replace(
		        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
		        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
		        $string
		    );
		 
		    $string = str_replace(
		        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
		        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
		        $string
		    );
		 
		    $string = str_replace(
		        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
		        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
		        $string
		    );
		 
		    $string = str_replace(
		        array('ñ', 'Ñ', 'ç', 'Ç'),
		        array('n', 'N', 'c', 'C',),
		        $string
		    );
		 
		    //Esta parte se encarga de eliminar cualquier caracter extraño
		    $string = str_replace(
		        array("'\'", "¨", "º", "-", "~",
		             "'#'", "@", "|", "!", '"',
		             "'·'", "'$'", "'%'", "'&'", "'/'",
		             "'('", "')'", "'?'", "'", "¡",
		             "¿", "[", "^", "<code>", "]",
		             "+", "}", "{", "¨", "´",
		             ">", "< ", ";", ",", ":",
		             "."),
		        '',
		        $string
		    );
		 
		 
		    return $string;
		}	 	

	 	public function guardar(){
	 		//Personal
	 		$paramPer['nombre'] 			= $this->scanearString($this->input->post('txtNombre'));
	 		$paramPer['ap_paterno'] 		= $this->scanearString($this->input->post('txtApPaterno'));
	 		$paramPer['ap_materno'] 		= $this->scanearString($this->input->post('txtApMaterno'));
	 		$paramPer['fecha_nacimiento']	= $this->input->post('txtFechaNaci');
	 		$paramPer['sexo'] 				= $this->input->post('txtSexo');
	 		$paramPer['curp'] 				= $this->scanearString($this->input->post('txtCurp'));
	 		$paramPer['telefonoCasa']		= $this->input->post('txtTelCasa');
	 		$paramPer['telefonoCelular'] 	= $this->input->post('txtTelCel');
	 		$paramPer['id_carreras'] 		= $this->input->post('txtCarrera');
	 		$paramPer['id_tipo_usuarios'] 	= $this->input->post('txtTipoUsuario');
	 		$paramPer['turno'] 				= $this->input->post('txtTurno');
	 		$paramPer['id_direccion'] 		= null;
	 		$paramPer['email'] 				= $this->input->post('txtEmail');
	 		$paramPer['licencia'] 			= $this->input->post('txtLicencia');
	 		
	 		$paramPer['matricula'] 			= $this->input->post('txtMatricula');
	 		$paramPer['foto'] 				= $this->input->post('txtFoto');

	 		//Dirección
	 		$paramDir['calle']				= $this->scanearString($this->input->post('txtCalle'));
	 		$paramDir['numero']				= $this->scanearString($this->input->post('txtNumero'));
	 		$paramDir['manzana']			= $this->scanearString($this->input->post('txtManzana'));
	 		$paramDir['lote']				= $this->scanearString($this->input->post('txtLote'));
	 		$paramDir['cp']					= $this->input->post('txtCp');
	 		$paramDir['id_estado']			= $this->input->post('txtEstado');
	 		$paramDir['id_municipio']		= $this->input->post('txtMunicipio');
	 		$paramDir['id_localidad']		= $this->input->post('txtLocalidad');
	 		
	 		//Usuarios
	 		$paramUsu['usuario'] 			= $this->input->post('txtUsuario');
	 		$paramUsu['contrasena'] 		= md5($this->input->post('txtContrasena'));

	 		$lastIdDir = $this->mdireccion->guardarDireccion($paramDir);

	 		if($lastIdDir > 0){

		 		$config['upload_path'] = './uploads/imagenes/';
		        $config['allowed_types'] = 'gif|jpg|png';
		        $config['max_size'] = '5000';
		        $config['max_width'] = '5000';
		        $config['max_height'] = '5000';

		        $this->load->library('upload',$config);

		        //si al subir imagen manda error 
		        if (!$this->upload->do_upload("txtFoto")) {
		            $data['error'] = $this->upload->display_errors();
					$this->load->view('LayoutAdministrador/header');
					$this->load->view('LayoutAdministrador/menu');
			 		$this->load->view('vPersonal',$data);
					$this->load->view('LayoutAdministrador/footer');

		        } else {


		            $file_info = $this->upload->data();
		            
		            $this->crearMiniatura($file_info['file_name']);

		            $paramPer['foto'] = $file_info['file_name'];  
		 			$paramPer['id_direccion'] = $lastIdDir;		 			
		 			$lastIdPer = $this->mpersonal->guardarPersona($paramPer);

		            //parametros para la vista de exito
		            $data['matricula'] 		= $paramPer['matricula'];
		            $data['foto'] 			= $paramPer['foto'];
		            $data['nombre'] 		= $paramPer['nombre'];
					$data['ap_paterno'] 	= $paramPer['ap_paterno'];
					$data['ap_materno'] 	= $paramPer['ap_materno'];
					$data['email'] 			= $paramPer['email'];
					$data['usuario'] 		= $paramUsu['usuario'];
	
		        }//else

	 			if($lastIdPer > 0){
	 				$paramUsu['id_persona'] = $lastIdPer;
	 				$this->musuario->guardarUsuario($paramUsu);
					$this->load->view('LayoutAdministrador/header');
					$this->load->view('LayoutAdministrador/menu');
			 		$this->load->view('Views_administrador/vExito',$data);
					$this->load->view('LayoutAdministrador/footer');	 				
	 			}//if($lastIdPer > 0){
	 		}//if($lastIdDir > 0){
	 	}//metodo guardar

	    function crearMiniatura($filename){
	        $config['image_library'] = 'gd2';
	        $config['source_image'] = 'uploads/imagenes/'.$filename;
	        $config['create_thumb'] = TRUE;
	        $config['maintain_ratio'] = TRUE;
	        $config['new_image']='uploads/imagenes/thumbs/';
	        $config['thumb_marker']='';//captura_thumb.png
	        $config['width'] = 150;
	        $config['height'] = 150;
	        $this->load->library('image_lib', $config); 
	        $this->image_lib->resize();
	    }		


		public function actualizar(){
			$param['matricula'] 		= $this->input->post('txtmatricula');
	 		$param['nombre'] 			= $this->input->post('txtnombre');
	 		$param['ap_paterno'] 		= $this->input->post('txtApPaterno');
	 		$param['ap_materno'] 		= $this->input->post('txtApMaterno');

	 		$this->mPersonal->actualizar($param);

	 		redirect('cPersonal/index');
		}//fin actualizar

		public function delete(){
			$id_persona = $this->input->post('txtIdUsuario');

			$this->musuario->deleteUsuarios($id_persona);
			$this->mPersonal->deletePersonal($id_persona);
		}

	

	 }//fn clase
?>