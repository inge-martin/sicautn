<?php

class CEstacionamiento extends CI_Controller
{
  
    function __construct()
    {
        parent::__construct();
        $this->load->model('mEstacionamiento');
    }

    public function index(){
        $data['query']  = $this->mEstacionamiento->getLugares();
        $this -> load -> view('LayoutUsuario/header');
        $this -> load -> view('LayoutUsuario/menu');
        $this -> load -> view('Views_Estacionamiento/vEstacionamiento',$data);
        $this -> load -> view('LayoutUsuario/footer');
    }

    public function getLugares(){
        $resultado = $this->mEstacionamiento->getLugares();
        return $resultado;
    }
}
?>