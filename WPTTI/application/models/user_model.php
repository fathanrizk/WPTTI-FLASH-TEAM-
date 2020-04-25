<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	//fungsi daftar akun
	public function register()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'nim' => $this->input->post('nim'),
			'email' => $this->input->post('email'),
			'kontak' => $this->input->post('kontak')
		);
		return $this->db->insert('user', $data);
	}

	public function data_user(){
		return $this->db->get('registrasi');
	}

	//fungsi daftar tes
	public function daftartes($data)
	{
		return $this->db->insert('registrasi', $data);
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('registrasi');
		$this->db->like('nama',$keyword);
		$this->db->or_like('nim',$keyword);
		$this->db->or_like('ttl',$keyword);
		$this->db->or_like('prodi',$keyword);
		return $this->db->get()->result();
	}

	public function tampildata()
	{
    $query = $this->db->order_by('id_user','ASC')->get('registrasi');
    return $query->result();
	}

	public function tampil_data(){
		return $this->db->get('registrasi');
	}

	//fungsi edit data register
	public function editdata($where){
		$query = $this->db->get_where('registrasi',$where);
		return $query->result();
	}

	//fungsi edit data register 2
	public function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
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

	public function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
 ?>
