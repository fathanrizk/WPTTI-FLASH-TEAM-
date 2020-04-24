<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {
	public function index()
	{
		$this->load->view('userheader');
		$this->load->view('userprofile');
		$this->load->view('footer');
	}
}
?>
