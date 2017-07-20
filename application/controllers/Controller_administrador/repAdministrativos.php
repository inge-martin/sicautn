<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class repAdministrativos extends CI_Controller {

	public function index()
	{
		$this->load->view('Views_administrador/administrativos/viewadministrativos');		
	}

	public function descargar(){

		$data = [];

		$timezone = "America/Mexico_City";
		date_default_timezone_set($timezone);

		$hora = date("H:i:s");
		$fecha = date("d-m-Y");

		//$hoy = date("dmyhis");

        // $html = $this->load->view('personal/vExito',$date,true);
        $html = $this->load->view('Views_administrador/administrativos/viewadministrativos',$date,true);
 		
 		//$html="asdf";
        //this the the PDF filename that user will get to download
        $pdfFilePath = "SICAUTN-".$fecha."_".$hora.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}
}
