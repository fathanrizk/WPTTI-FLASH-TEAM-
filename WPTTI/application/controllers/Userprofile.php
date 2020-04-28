<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {
	public function index()
	{
		//$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$id = $this->session->userdata('nik');
		$data['join'] = $this->user_model->join($id);

		$this->load->view('userheader');
		$this->load->view('userprofile', $data);
		$this->load->view('footer');
	}
}
?>
