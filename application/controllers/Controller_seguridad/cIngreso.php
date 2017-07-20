<?php 

class CIngreso extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('modelosSeguridad/mingreso');
	}

	public function index(){
		$data['mensaje'] = '';
		$this->load->view('LayoutSeguridad/header');
		$this->load->view('LayoutSeguridad/menu');
		$this->load->view('Views_seguridad/ingreso/vIngreso',$data);
		$this->load->view('LayoutSeguridad/footer');
	}

	public function validarMatricula(){
		$paramMatricula['matricula'] = $this->input->post('txtMatricula');

		$result = $this->mingreso->validarMatricula($paramMatricula);

		if($result == 0){
			$data['mensaje'] = "Tu matricula no esta registrada en el sistema";
			$this->load->view('LayoutSeguridad/header');
			$this->load->view('LayoutSeguridad/menu');
			$this->load->view('Views_seguridad/ingreso/vIngreso',$data);
			$this->load->view('LayoutSeguridad/footer');				
		}else{
			//manda los datos al panel de validacion
			$data['id_usuario']		= $result['id_usuario'];			
			$data['foto'] 			= $result['foto'];
			$data['nombre'] 		= $result['nombre'];
			$data['ap_paterno'] 	= $result['ap_paterno'];
			$data['ap_materno'] 	= $result['ap_materno'];
			$data['foto_vehiculo'] 	= $result['foto_vehiculo'];
			$data['placas']			= $result['placas'];
			$data['modelo'] 		= $result['modelo'];
			$data['color'] 			= $result['color'];

			$paramPenal['id_usuario'] = $result['id_usuario'];
			$penal = $this->mingreso->muestraPenalizaciones($paramPenal);

			if($penal != 0){
				$data['id_detalle'] 	= $penal['id_detalle'];
				$data['nombre'] 		= $penal['nombre'];
				$data['motivo'] 		= $penal['motivo'];
				$data['sancion'] 		= $penal['sancion'];
				$data['descripcion'] 	= $penal['descripcion'];
				$data['fecha_inicio'] 	= $penal['fecha_inicio'];
				$data['fecha_fin'] 		= $penal['fecha_fin'];
				$data['status'] 		= $penal['status'];
			}else{
				$data['id_detalle'] 	= 0;
				// $data['nombre'] 		= 0;
				// $data['motivo'] 		= 0;
				// $data['sancion'] 		= 0;
				// $data['descripcion'] 	= 0;
				// $data['fecha_inicio'] 	= 0;
				// $data['fecha_fin'] 		= 0;
				// $data['status'] 		= 0;
			}


			$this->load->view('LayoutSeguridad/header');
			$this->load->view('LayoutSeguridad/menu');
			$this->load->view('Views_seguridad/ingreso/viewpanel',$data);
			$this->load->view('LayoutSeguridad/footer');			
		}
	}

	public function errorPanel(){
			$data['mensaje'] = "Llama a un administrativo para asignarle una penalización y deten al usuario de ¡INMEDIATO!";
			$this->load->view('LayoutSeguridad/header');
			$this->load->view('LayoutSeguridad/menu');
			$this->load->view('Views_seguridad/ingreso/vIngreso',$data);
			$this->load->view('LayoutSeguridad/footer');
	}

	public function evaluaCamino(){
		$paramCamino['id_usuario']	= $this->input->post('txtIdUsuario');
		$resultado = $this->mingreso->evaluaCamino($paramCamino);

		if($resultado == 0){
			//registra entrada
			//antes evalua la disponibilidad

			$disponibilidad = $this->mingreso->evaluaDisponibilidad();
			//0: No tiene lugares ; 1: Si tiene lugares
			if($disponibilidad == 0){
				$msj  = 'Lo sentimos pero no contamos con lugares disponibles en el estacionamiento';
				$msj .= '<br/><br/>Por favor regresa mas tarde.';
				$data['mensaje']= $msj;

				$this->load->view('LayoutSeguridad/header');
				$this->load->view('LayoutSeguridad/menu');
				$this->load->view('Views_seguridad/ingreso/vIngreso',$data);
				$this->load->view('LayoutSeguridad/footer');				
			}else{
				$result 							= $this->mingreso->asignarCajon();
				$paramEntrada['id_usuario']			= $this->input->post('txtIdUsuario');
				$paramEntrada['id_estacionamiento']	= $result['id_estacionamiento'];
				$this->mingreso->registrarEntrada($paramEntrada);

				$msj  = 'Por favor estacionaté en: <br/>';
				$msj .= 'Sección: "' . $result['nave'] . '"   <br>';
				$msj .= 'Lugar: "' . $result['lugar']. '"';
				$data['mensaje']= $msj;

				$this->load->view('LayoutSeguridad/header');
				$this->load->view('LayoutSeguridad/menu');
				$this->load->view('Views_seguridad/ingreso/vIngreso',$data);
				$this->load->view('LayoutSeguridad/footer');				
			}
		}elseif ($resultado == 1){
			//registra salida
			$paramSalida['id_usuario']	= $this->input->post('txtIdUsuario');
			$result 					= $this->mingreso->registrarSalida($paramSalida);

			$msj  = "Gracias por asistir a la Universidad Tecnológica de Nezahualcóyotl <br/>";
			$msj .= "Esperamos que hallas disfrutado tu estancia. ¡Hasta luego! <br/>";
			$data['mensaje']= $msj;

			$this->load->view('LayoutSeguridad/header');
			$this->load->view('LayoutSeguridad/menu');
			$this->load->view('Views_seguridad/ingreso/vIngreso',$data);
			$this->load->view('LayoutSeguridad/footer');			
		}
	}

}
?>