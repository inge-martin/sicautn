<?php 

class Penalizaciones extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('modelosSeguridad/maddpenalizacion');
	}

	function index(){

	    $this -> load -> view('LayoutSeguridad/header');
	    $this -> load -> view('LayoutSeguridad/menu');
	    $this -> load -> view('Views_seguridad/penalizaciones/viewpenalizaciones');
	    $this -> load -> view('LayoutSeguridad/footer');
	}

	public function validarMatricula(){
		$paramMatricula['matricula'] = $this->input->post('txtMatricula');

		$result = $this->maddpenalizacion->validarMatricula($paramMatricula);

		if($result == 0){
			$data['mensaje'] = "Tu matricula no esta registrada en el sistema";
			$this->load->view('LayoutSeguridad/header');
			$this->load->view('LayoutSeguridad/menu');
			$this->load->view('Views_seguridad/penalizaciones/viewpenalizaciones',$data);
			$this->load->view('LayoutSeguridad/footer');				
		}else{
			//manda los datos al panel de validacion
			//echo $id_usuario	= $result['$id_usuario'];			
			$paramPenal['id_persona'] = $result;
			$paramPenal['status'] = $this->input->post('txtStatus');
			$paramPenal['id_penalizaciones'] = $this->input->post('txtPenalizaciones');
			$paramPenal['descripcion'] = $this->input->post('txtDescripcion');
			
			$fechaF = $this->input->post('txtFechaFin'); //  08/09/2016

			//$fecha="2003-10-05"; // El formato que te entrega MySQL es Y-m-d 
			$fecha=date("Y-m-d",strtotime($fechaF)); 
			// echo $fecha; // Sale 05-10-2003  

			$paramPenal['fecha_fin'] = $fecha;
			$this->maddpenalizacion->registrarPenalizacion($paramPenal);

			$data['mensaje'] = "La penalización fue agregada con exito";
			$this->load->view('LayoutSeguridad/header');
			$this->load->view('LayoutSeguridad/menu');
			$this->load->view('Views_seguridad/penalizaciones/viewpenalizaciones',$data);
			$this->load->view('LayoutSeguridad/footer');			
		}
	}  
}
?>