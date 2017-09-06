<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

	public function __construct() {

		parent::__construct();

			$this->load->database();
	}

	public function lihat_data_pelanggan() {

		$query = $this->db->get('tb_pelanggan');

			return $query->result();

	}

	public function tambah_data_pelanggan($data)
	{
		$this->db->insert('tb_lokasi_unit', $data);
	}

	public function lihat_data_by($id)
	{
		$this->db->where('md5(id_pelanggan)', $id);
		$query = $this->db->get('tb_pelanggan');

		return $query->row();
	}

	public function edit_data_pelanggan($data, $id)
	{
		$this->db->where('id_pelanggan', $id);
		$this->db->update('tb_pelanggan', $data);
	}

	public function hapus_data_pelanggan($id)
	{
		$this->db->where('id_pelanggan', $id);
		$this->db->delete('tb_pelanggan');
	}

}
