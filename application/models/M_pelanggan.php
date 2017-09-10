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
		$this->db->insert('tb_pelanggan', $data);
	}

	public function lihat_data_by($id)
	{
		$this->db->where('id_pelanggan', $id);
		$query = $this->db->get('tb_pelanggan');

		return $query->row();
	}

	public function lihat_data_detail($id)
	{

		$query = $this->db->query("SELECT
			pl.`id_pelanggan`, pl.`nama_pelanggan`, pl.`alamat`,
			pd.`id_pel_detail`, pd.`jumlah_Penghuni`, pd.`luas_bangunan`, pd.`luas_bangunan`, pd.`luas_tanah`, pd.`pekerjaan`, pd.`telepon`,
			jb.`jenis_bangunan`, sr.`status_rumah`, pr.`peruntukan`,
			wm.`id_water_meter`,wm.`kode_asset`, wm.`merk`, wm.`no_body`, wm.`no_smb`, wm.`type`, wm.`ukuran`,
			wm.`long`, wm.`lat`,
			ko.`kondisi`,
			st.`status`

			FROM tb_pelanggan AS pl LEFT JOIN tb_pelanggan_detail AS pd

			ON pl.`id_pel_detail` = pd.`id_pel_detail`

			LEFT JOIN tb_jenis_bangunan AS jb

			ON pd.`id_jenis_bangunan` = jb.`id_jenis_bangunan`

			LEFT JOIN tb_status_rumah AS sr

			ON pd.`id_status_rumah` = sr.`id_status_rumah`

			LEFT JOIN tb_peruntukan AS pr ON pd.`id_peruntukan` = pr.`id_peruntukan`

			LEFT JOIN tb_water_meter AS wm ON pl.`id_water_meter` = wm.`id_water_meter`

			LEFT JOIN tb_status AS st ON wm.`id_status` = st.`id_status`

			LEFT JOIN tb_kondisi AS ko ON wm.`id_kondisi` = ko.`id_kondisi`

			WHERE pl.`id_pelanggan`= $id");

						return $query->result();
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

	public function get_jenis_bangunan()
	{
		$query = $this->db->get('tb_jenis_bangunan');

		return $query->result();
	}

	public function get_status_rumah()
	{
		$query = $this->db->get('tb_status_rumah');

		return $query->result();
	}

	public function get_peruntukan()
	{
		$query = $this->db->get('tb_peruntukan');

		return $query->result();
	}

	public function get_lokasi_unit()
	{
		$query = $this->db->get('tb_lokasi_unit');

		return $query->result();
	}

	public function tambah_detail_pelanggan($data)
	{
		$this->db->insert('tb_pelanggan_detail', $data);

			return $this->db->insert_id(); // return last insert id
	}

	public function tambah_water_meter($data)
	{
		$this->db->insert('tb_water_meter', $data);
			return $this->db->insert_id(); // return last insert id
	}

}
