<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdaftartes extends CI_Controller {
	public function index()
	{

		$this->form_validation->set_rules('nama','nama','required');
    	$this->form_validation->set_rules('ttl','ttl','required');
    	$this->form_validation->set_rules('nim','nim','required');
    	$this->form_validation->set_rules('prodi','prodi','required');

    	if($this->form_validation->run() == FALSE)
    	{
        	$this->load->view('userdaftartes');
    	} else {

        $data['nama'] = $this->input->post['nama'];
        $data['ttl'] = $this->input->post['ttl'];
        $data['nim'] = $this->input->post['nim'];
        $data['prodi'] = $this->input->post['prodi'];
       

        $this->load->model('user_model');
  
        $this->user_model->daftartes($data);

        redirect('index.php/userberanda');
    }   
}
	}
?>
