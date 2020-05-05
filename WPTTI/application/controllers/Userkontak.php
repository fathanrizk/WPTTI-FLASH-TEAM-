<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userkontak extends CI_Controller {
	public function index()
	{
		if($this->session->level) {
			$this->load->view('userheader');
			$this->load->view('userkontak');
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('wrong_password','Please Login!');
			redirect('Login');
		}
	}
}
?>
