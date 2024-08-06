<?php 

class model_kategori extends CI_Model{
	public function data_kamera(){
		return $this->db->get_where("tb_barang", array('kategori' =>'kamera'));
	}
}