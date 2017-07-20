<?php
	class Inicio extends CI_Controller{
		public function index(){
			$this -> load -> view('LayoutAdministrador/header');
			$this -> load -> view('LayoutAdministrador/menu');
			$this -> load -> view('LayoutAdministrador/index');
			$this -> load -> view('LayoutAdministrador/footer');
		}
	}

 ?>