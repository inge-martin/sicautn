<?php 

class Vehiculo extends CI_Controller {

  function index(){

    $this -> load -> view('LayoutSeguridad/header');
    $this -> load -> view('LayoutSeguridad/menu');
    $this -> load -> view('Views_seguridad/vehiculo/viewvehiculo');
    $this -> load -> view('LayoutSeguridad/footer');
  }
}
?>