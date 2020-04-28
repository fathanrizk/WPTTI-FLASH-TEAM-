<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userscore extends CI_Controller {
	public function index()
	{
		$data = array('data_user' => $this->user_model->tampildata());
		$this->load->view('userheader');
		$this->load->view('userscore',$data);
		$this->load->view('footer');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data = array('data_user' => $this->user_model->get_keyword($keyword));
		$this->load->view('userheader');
		$this->load->view('userscore',$data);
		$this->load->view('footer');
	}
	
	public function print(){
		//$data['toefl'] = $this->user_model->data_user('registrasi')->result();
		$this->load->view('print_data');
		}
}
?>
