<?php
	class Inicio extends CI_Controller{
		public function index(){
			$this -> load -> view('LayoutSeguridad/header');
			$this -> load -> view('LayoutSeguridad/menu');
			$this -> load -> view('LayoutSeguridad/index');
			$this -> load -> view('LayoutSeguridad/footer');
		}
	}

 ?>