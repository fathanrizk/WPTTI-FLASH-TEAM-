<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	//fungsi daftar akun
	public function register()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nim' => $this->input->post('nim'),
			'email' => $this->input->post('email'),
			'kontak' => $this->input->post('kontak')

		);

		return $this->db->insert('user', $data);
	}

	//fungsi daftar tes
	public function daftartes()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'no_registrasi' => $this->input->post('noreg'),
			'nim' => $this->input->post('nim'),
			'prodi' => $this->input->post('prodi')
		);

		return $this->db->insert('registrasi', $data);

	}

	//cek username exists
	public function check_username_exists($username){
		$query = $this->db->get_where('user', array('username' => $username));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}

	public function check_email_exists($email){
		$query = $this->db->get_where('user', array('email' => $email));
		if(empty($query->row_array())){
			return true;
		}else{
			return false;
		}
	}


}
 ?>