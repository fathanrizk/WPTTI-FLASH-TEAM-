<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {
	public function index()
	{
		//$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if($this->session->level) {
			$id = $this->session->userdata('nik');
			$data['join'] = $this->user_model->join($id);

			$this->load->view('userheader');
			$this->load->view('userprofile', $data);
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('wrong_password','Please Login!');
			redirect('Login');
		}

	}
	public function print($id)
	{
		$id = $this->session->userdata('nik');
		$data['join'] = $this->user_model->join($id);
		$this->load->view('usercetak',$data);
	}
}
?>
