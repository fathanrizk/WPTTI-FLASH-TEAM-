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
        $data['foto'] = $_FILES['foto'];
        if($data['foto']=''){}else{
            $config['upload_path'] = "./assets/foto";
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                echo "Submit Fail.Check FILE TYPE when you upload your PHOTO's !";die();
            }else{
                $data['foto'] = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama' => $this->input->post('nama'),
            'ttl' => $this->input->post('ttl'),
            'nim' => $this->input->post('nim'),
            'prodi' => $this->input->post('prodi'),
            'foto' => $data['foto']
        );


        $this->load->model('user_model');

        $this->user_model->daftartes($data);

        redirect('userberanda');
    }
}
	}
?>
