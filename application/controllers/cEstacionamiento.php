<?php

class CEstacionamiento extends CI_Controller
{
  
    function __construct()
    {
        parent::__construct();
        $this->load->model('mestacionamiento');
    }

    public function index(){
        $data['query']  = $this->mestacionamiento->getLugares();
        $this -> load -> view('LayoutInicio/header');
        $this -> load -> view('LayoutInicio/menu');
        $this -> load -> view('Views_Estacionamiento/vEstacionamiento',$data);
        $this -> load -> view('LayoutInicio/footer');
    }

    public function getLugares(){
        $resultado = $this->mestacionamiento->getLugares();
        return $resultado;
    }
}
?>