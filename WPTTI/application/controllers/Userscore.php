<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userscore extends CI_Controller {
	public function index()
	{
		if($this->session->level) {
			$data = array('data_user' => $this->user_model->tampildata());
			$this->load->view('userheader');
			$this->load->view('userscore',$data);
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('wrong_password','Please Login!');
			redirect('Login');
		}

	}
	public function search(){
		if($this->session->level) {
			$keyword = $this->input->post('keyword');
			$data = array('data_user' => $this->user_model->get_keyword($keyword));
			$this->load->view('userheader');
			$this->load->view('userscore',$data);
			$this->load->view('footer');
		} else {
			$this->session->set_flashdata('wrong_password','Please Login!');
			redirect('Login');
		}
	}

	public function print(){
		//$data['toefl'] = $this->user_model->data_user('registrasi')->result();
		$this->load->view('print_data');
		}
}
?>
