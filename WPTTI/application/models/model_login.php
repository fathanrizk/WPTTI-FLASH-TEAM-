<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
	public function ambillogin($username,$password)
	{
		$this->db->where('username', $username);
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
			$this->session->set_flashdata('info','Maaf Username dan password Anda Salah!
				Mohon Login Ulang.');
			redirect('index.php/login');
		
		}
	}

	public function security(){
		$username = $this->session->userdata('username');
		if(empty($username)){
			$this->session->sess_destroy();
			redirect('index.php/login');
		}
	}


}
 ?>