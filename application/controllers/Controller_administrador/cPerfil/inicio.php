<?php
	class Inicio extends CI_Controller{
		public function index(){
			$this -> load -> view('LayoutUsuario/header');
			$this -> load -> view('LayoutUsuario/menu');
			$this -> load -> view('LayoutUsuario/index');
			$this -> load -> view('LayoutUsuario/footer');
		}
	}

 ?>