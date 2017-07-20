<?php 

class Penalizaciones extends CI_Controller {

  function index(){

    $this -> load -> view('LayoutAdministrador/header');
    $this -> load -> view('LayoutAdministrador/menu');
    $this -> load -> view('Views_administrador/penalizaciones/viewpenalizaciones');
    $this -> load -> view('LayoutAdministrador/footer');
  }
}
?>