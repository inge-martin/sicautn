<?php 

class Acceso extends CI_Controller {

  function index(){

    $this -> load -> view('LayoutSeguridad/header');
    $this -> load -> view('LayoutSeguridad/menu');
    $this -> load -> view('Views_seguridad/acceso/viewacceso');
    $this -> load -> view('LayoutSeguridad/footer');
  }
}
?>