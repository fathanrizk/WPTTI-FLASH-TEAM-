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
		$id_user = $this->input->post('id_user');
		$no_register = $this->input->post('no_registrasi');
		$score = $this->input->post('score');

		$data = array('no_registrasi' => $no_register, 'score' => $score);
		$where = array('id_user' => $id_user);

		$this->user_model->update($where, $data, 'registrasi');
		redirect('adminberanda');
	}

		public function hapus($id){

		$where=array('id_user'=>$id);
		$this->user_model->hapus($where,'registrasi');
		redirect('adminberanda');
	}

	public function eksport_excel(){

		$data['user_data']=$this->user_model->tampil_data('registrasi')->result();

		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH.'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$obJPHPExcel = new PHPExcel();

		$obJPHPExcel->getProperties()->setCreator("WPPTI");
		$obJPHPExcel->getProperties()->setLastModifiedBy("WPPTI");
		$obJPHPExcel->getProperties()->setTitle("Data Pendaftar Test TOEFL");
		$obJPHPExcel->getProperties()->setSubject("");
		$obJPHPExcel->getProperties()->setDescription("");

		$obJPHPExcel->setActiveSheetIndex(0);

		$obJPHPExcel->getActiveSheet()->SetCellValue('A1','No');
		$obJPHPExcel->getActiveSheet()->SetCellValue('B1','Name');
		$obJPHPExcel->getActiveSheet()->SetCellValue('C1','Place and Date Birth');
		$obJPHPExcel->getActiveSheet()->SetCellValue('D1','Registration Number');
		$obJPHPExcel->getActiveSheet()->SetCellValue('E1','NIM');
		$obJPHPExcel->getActiveSheet()->SetCellValue('F1','Major Field Study');
		$obJPHPExcel->getActiveSheet()->SetCellValue('G1','Score');

		$baris=2;
		$x=1;

		foreach ($data['user_data'] as $data) {
			$obJPHPExcel->getActiveSheet()->SetCellValue('A'.$baris, $x);
			$obJPHPExcel->getActiveSheet()->SetCellValue('B'.$baris, $data->nama);
			$obJPHPExcel->getActiveSheet()->SetCellValue('c'.$baris, $data->ttl);
			$obJPHPExcel->getActiveSheet()->SetCellValue('D'.$baris, $data->no_registrasi);
			$obJPHPExcel->getActiveSheet()->SetCellValue('E'.$baris, $data->nim);
			$obJPHPExcel->getActiveSheet()->SetCellValue('F'.$baris, $data->prodi);
			$obJPHPExcel->getActiveSheet()->SetCellValue('G'.$baris, $data->score);

			$x++;
			$baris++;

		}

		$filename="Data Registrasi Tes TOEFL".date("d-m-Y-H-i-s").'.xlsx';

		$obJPHPExcel->getActiveSheet()->setTitle("Data Pendaftar Test");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename= "'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer=PHPExcel_IOFactory::createwriter($obJPHPExcel,'Excel2007');
		$writer->save('php://output');

		exit;
	}

	/*public function logout(){
		$this->session->set_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect('index.php/beranda');
	}*/
}
?>
