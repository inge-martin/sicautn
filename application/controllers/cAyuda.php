<?php 

/**
* 
*/
class Cayuda extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->load->view('LayoutInicio/header');
		$this->load->view('LayoutInicio/menu');
		$this->load->view('vAyuda');
		$this->load->view('LayoutInicio/footer');
	}
}


?>