<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminberanda extends CI_Controller {
	public function __construct()
	{
		parent ::__construct ();
		$this->load->model('user_model');
	}

	public function index(){
		$data = array('data_user' => $this->user_model->tampildata());
		$this->load->view('adminberanda',$data);
	}

	public function edit($id){
		$where = array('id_user' => $id);
		$data = array('data_user' => $this->user_model->editdata($where));
		$this->load->view('adminedit',$data);
	}

	public function fungsiedit(){
		$no_regis = $this->input->post['no_registrasi'];
		$score = $this->input->post['score'];

		$data = array('no_registrasi' => $no_regis, 'score' => $score);
		$where = array('id_user' => $id);

		$this->user_model->update($where, $data);
	}

	public function hapus($id){

		$where=array('id_user'=>$id);
		$this->user_model->hapus($where,'registrasi');
		redirect('index.php/adminberanda');
	}
	/*public function logout(){
		$this->session->set_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect('index.php/beranda');
	}*/
}
?>
