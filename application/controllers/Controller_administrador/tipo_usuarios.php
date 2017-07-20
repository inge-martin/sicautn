<?php 

class Tipo_usuarios extends CI_Controller {

  function index(){

    $this -> load -> view('LayoutAdministrador/header');
    $this -> load -> view('LayoutAdministrador/menu');
    $this -> load -> view('Views_administrador/tipo_usuarios/viewtipousuarios');
    $this -> load -> view('LayoutAdministrador/footer');
  }
}
?>