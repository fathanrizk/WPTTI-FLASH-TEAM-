<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userkontak extends CI_Controller {
	public function index()
	{
		$this->load->view('userheader');
		$this->load->view('userkontak');
		$this->load->view('footer');
	}
}
?>
