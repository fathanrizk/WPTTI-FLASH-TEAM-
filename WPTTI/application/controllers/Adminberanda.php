<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminberanda extends CI_Controller {
	public function __construct()
	{
		parent ::__construct ();
		$this->load->model('user_model');
	}


	public function index()
	{	

		$data = array(
			'data_user' => $this->user_model->tampildata()
		);
		$this->load->view('adminberanda',$data);
	}

	/*public function logout(){
		$this->session->set_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect('index.php/beranda');
	}*/
}
?>
