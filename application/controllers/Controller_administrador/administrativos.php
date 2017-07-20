<?php 

class Administrativos extends CI_Controller {

  function index(){

    $this->load->view('LayoutAdministrador/header');
    $this->load->view('LayoutAdministrador/menu');
    $this->load->view('Views_administrador/administrativos/viewadministrativos');
    $this->load->view('LayoutAdministrador/footer');
  }
}
?>