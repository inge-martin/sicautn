<?php 

class Usuarios extends CI_Controller {

  function index(){

    $this -> load -> view('LayoutUsuario/header');
    $this -> load -> view('LayoutUsuario/menu');
    $this -> load -> view('Views_usuario/usuarios/viewusuarios');
    $this -> load -> view('LayoutUsuario/footer');
  }
}
?>