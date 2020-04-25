<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userscore extends CI_Controller {
	public function index()
	{
		$this->load->view('userheader');
		$this->load->view('userscore');
		$this->load->view('footer');
	}

	public function print(){
		//$data['toefl'] = $this->user_model->data_user('registrasi')->result();
		$this->load->view('print_data');
		}
}
?>
