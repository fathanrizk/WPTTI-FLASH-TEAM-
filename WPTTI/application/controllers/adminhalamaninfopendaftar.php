<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminberanda extends CI_Controller {
	public function index()
	{

		$this->load->view('adminhalamaninfopendaftar');
	}

	/*public function logout(){
		$this->session->set_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect('index.php/beranda');
	}*/
}
?>