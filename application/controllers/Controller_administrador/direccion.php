<?php 

class Direccion extends CI_Controller {

  function index(){

    $this -> load -> view('LayoutAdministrador/header');
    $this -> load -> view('LayoutAdministrador/menu');
    $this -> load -> view('Views_administrador/direccion/viewdireccion');
    $this -> load -> view('LayoutAdministrador/footer');
  }
}
?>