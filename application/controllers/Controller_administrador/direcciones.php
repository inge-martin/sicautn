<?php 

class Direcciones extends CI_Controller {

  function index(){

    $this -> load -> view('LayoutAdministrador/header');
    $this -> load -> view('LayoutAdministrador/menu');
    $this -> load -> view('Views_administrador/perfil/viewdireccion');
    $this -> load -> view('LayoutAdministrador/footer');
  }
}
?>