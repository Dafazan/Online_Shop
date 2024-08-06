<?php 

class kategori extends CI_Controller{
	public function kamera()
	{
		$data['kamera'] = $this->model_kategori->data_kamera()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kamera', $data);
		$this->load->view('templates/footer');
	}
}