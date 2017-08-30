<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

	public function __construct() {

		parent::__construct();

			$this->load->database();
	}

	public function read_lokunit() {
		$query = $this->db->get('tb_lokasi_unit');
		return $query->result();
	}

	public function insert_lokunit($data)
	{
		$this->db->insert('tb_lokasi_unit', $data);
	}

	public function edit_lokunit($id)
	{
		$this->db->where('kode_lokasi', $id);
		$query = $this->db->get('tb_lokasi_unit');

		return $query->row();
	}

	public function update_lokunit($data, $id)
	{
		$this->db->where('kode_lokasi', $id);
		$this->db->update('tb_lokasi_unit', $data);
	}

	public function delete_lokunit($id)
	{
		$this->db->where('kode_lokasi', $id);
		$this->db->delete('tb_lokasi_unit');
	}


}
