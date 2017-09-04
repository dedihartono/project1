<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi_unit extends CI_Model {

	public function __construct() {

		parent::__construct();

			$this->load->database();
	}

	public function lihat_data_lokunit() {
		$query = $this->db->get('tb_lokasi_unit');
		return $query->result();
	}

	public function tambah_data_lokunit($data)
	{
		$this->db->insert('tb_lokasi_unit', $data);
	}

	public function lihat_data_by($id)
	{
		$this->db->where('kode_lokasi', $id);
		$query = $this->db->get('tb_lokasi_unit');

		return $query->row();
	}

	public function edit_data_lokunit($data, $id)
	{
		$this->db->where('kode_lokasi', $id);
		$this->db->update('tb_lokasi_unit', $data);
	}

	public function hapus_data_lokunit($id)
	{
		$this->db->where('kode_lokasi', $id);
		$this->db->delete('tb_lokasi_unit');
	}


}
