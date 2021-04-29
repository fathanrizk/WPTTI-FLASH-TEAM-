<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	public function ambillogin($username,$password)
	{
		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'nik' => $user['nik'],
					'username' => $user['username'],
					'level' => $user['level']
				];
				$this->session->set_userdata($data);
				if ($user['level'] == 2) {
					redirect('adminberanda');
				}else {
					redirect('userberanda');
				}

			}else {
				$this->session->set_flashdata('wrong_password', 'Wrong password!');
				redirect('login');
			}
		}else {
			$this->session->set_flashdata('user_unknown', 'This username is not registered!');
			redirect('login');
		}
		/*$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$sess = array ('username' =>$row->username, 'password' => $row->password);

				//if($data['level']=="1"){
				//redirect('index.php/adminberanda');
			//}else{
			//	redirect('index.php/userberanda');
			//}
			}
			$this->session->get_userdata($sess);

		}
		else{
			$this->session->set_flashdata('info','Sorry, Your Username and Password are incorrect !
			 Please Try Again.');
			redirect('login');
		}
		*/
	}

	public function security(){
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('kontak');
		$this->session->unset_userdata('level');

		$this->session->set_flashdata('sukses', 'You are Loged out!');
		redirect('login');
		}
	}
 ?>
