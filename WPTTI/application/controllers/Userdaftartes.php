<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdaftartes extends CI_Controller {
	public function index()
	{

		$data = array(
			'nama' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'no_registrasi' => $this->input->post('noreg'),
			'nim' => $this->input->post('nim'),
			'prodi' => $this->input->post('prodi')
		);
		
		$this->user_model->daftartes($data);
	}
}
?>
