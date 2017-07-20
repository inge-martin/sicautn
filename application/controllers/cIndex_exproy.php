<?php 

class Cindex_exproy extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('LayoutInicio/header');
		$this->load->view('LayoutInicio/menu');
		$this->load->view('LayoutInicio/contenido');
		$this->load->view('LayoutInicio/footer');
	}
}

?>