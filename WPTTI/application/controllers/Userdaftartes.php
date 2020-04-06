<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdaftartes extends CI_Controller {
	public function index()
	{
		$this->form_validation->set_rules('nama' , 'required');
		$this->form_validation->set_rules('ttl' ,  'required');
		$this->form_validation->set_rules('noreg');
		$this->form_validation->set_rules('nim' , 'required');
		$this->form_validation->set_rules('prodi', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('userdaftartes');
		}else{
	
			$this->user_model->daftartes();

			$this->session->set_flashdata('user_registered','You are now registered');

			$this->load->view('userberanda');
		}
	}
}
?>
