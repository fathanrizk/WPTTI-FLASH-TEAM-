<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {
	public function index()
	{
		//$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		//$this->form_validation->set_rules('nik','nik','required');
				if($this->session->level) {
				$id = $this->session->userdata('nik');
				$data['join'] = $this->user_model->join($id);

				$this->load->view('userheader');
				$this->load->view('userprofile', $data);
				$this->load->view('footer');
				} else {
					$this->session->set_flashdata('wrong_password','Please Login!');
					redirect('Login');
				}
	}

	public function print($id)
	{
		$id = $this->session->userdata('nik');
		$data['join'] = $this->user_model->join($id);
		$this->load->view('usercetak',$data);
	}

public function upload_payment(){
		//$id_registrasi = $this->input->post('id_registrasi');
		$bukti = $this->input->post('bukti');
		$data['bukti'] = $_FILES['bukti'];
        if($data['bukti']=''){}else{
            $config['upload_path'] = "./assets/buktibayar";
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('bukti')){
                echo "Submit Fail.Check FILE TYPE when you upload your PHOTO's !";die();
            }else{
                $data['bukti'] = $this->upload->data('file_name');
                $where = array('bukti' => $bukti);
            }
        }
    	$data = array('bukti' => $data['bukti']);
		

    $this->load->model('user_model');
    //$this->user_model->daftartes($data);
    //$this->user_model->uploadbukti($data, $where, $bukti);
    redirect('userprofile');
	}
}
?>
