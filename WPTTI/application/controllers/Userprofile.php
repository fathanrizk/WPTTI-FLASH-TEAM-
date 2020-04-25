<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {
	public function index()
	{
		$this->load->view('userheader');

		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('userprofile', $data);
		
		$this->load->view('footer');
	}
}
?>
