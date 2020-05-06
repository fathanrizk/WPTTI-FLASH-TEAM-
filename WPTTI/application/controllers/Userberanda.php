<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userberanda extends CI_Controller {
	public function index()
	{
		//Blok akses userberanda via URL atau klik back setelah logout
		if($this->session->level) {
			$this->load->view('userheader');
			$this->load->view('userberanda');
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('wrong_password','Please Login!');
			redirect('Login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect('beranda');
	}
}
?>
