<?php 

/**
* 
*/
class CManuales extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){

		$this->load->view('LayoutInicio/header');
		$this->load->view('LayoutInicio/menu');
		$this->load->view('vManuales');
		$this->load->view('LayoutInicio/footer');
	}	
}
 ?>