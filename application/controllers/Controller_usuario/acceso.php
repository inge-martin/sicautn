<?php 

class Acceso extends CI_Controller {

  function index(){

    $this -> load -> view('LayoutUsuario/header');
    $this -> load -> view('LayoutUsuario/menu');
    $this -> load -> view('Views_usuario/acceso/viewacceso');
    $this -> load -> view('LayoutUsuario/footer');
  }
}
?>