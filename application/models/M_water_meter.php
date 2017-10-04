<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_water_meter extends CI_Model {

	public function __construct() {

		parent::__construct();

			$this->load->database();
	}

	public function tambah_water_meter($data)
	{
		$this->db->insert('tb_water_meter', $data);
	}

	public function water_meter_by($id)
	{
		$this->db->select('pl.`id_pelanggan`, pl.`nama_pelanggan`, wm.`id_water_meter`, wm.`kode_asset`, wm.`merk`, wm.`no_body`, wm.`no_smb`, wm.`type`, wm.`ukuran`, wm.`lat`, wm.`long`,
				lu.`kode_lokasi`, lu.`lokasi_unit`,
				st.`id_status`, st.`status`,
				kd.`id_kondisi`, kd.`kondisi`');

		$this->db->from('tb_pelanggan AS pl');

		$this->db->join('tb_water_meter AS wm', 'pl.`id_pelanggan` = wm.`id_pelanggan`', 'LEFT');
		$this->db->join('tb_lokasi_unit AS lu', 'wm.`kode_lokasi` = lu.`kode_lokasi`', 'LEFT');
		$this->db->join('tb_status AS st', 'wm.`id_status` = st.`id_status`', 'LEFT');
		$this->db->join('tb_kondisi AS kd', 'wm.`id_kondisi` = kd.`id_kondisi`', 'LEFT');

		$this->db->where('wm.`id_water_meter`', $id);
		$query = $this->db->get();

		return $query->row();
	}

	public function get_wm_koordinat($id)
	{
		$this->db->select('pl.`id_pelanggan`, pl.`nama_pelanggan`,
				wm.`id_water_meter`, wm.`kode_asset`, wm.`lat`, wm.`long`,
				lu.`kode_lokasi`, lu.`lokasi_unit`,
				st.`id_status`, st.`status`,
				kd.`id_kondisi`, kd.`kondisi`');

		$this->db->from('tb_pelanggan AS pl');

		$this->db->join('tb_water_meter AS wm', 'pl.`id_pelanggan` = wm.`id_pelanggan`', 'LEFT');
		$this->db->join('tb_lokasi_unit AS lu', 'wm.`kode_lokasi` = lu.`kode_lokasi`', 'LEFT');
		$this->db->join('tb_status AS st', 'wm.`id_status` = st.`id_status`', 'LEFT');
		$this->db->join('tb_kondisi AS kd', 'wm.`id_kondisi` = kd.`id_kondisi`', 'LEFT');

		$this->db->where('wm.`id_water_meter`', $id);
		$query = $this->db->get();

		return $query->result();
	}

	public function edit_data_wm($data, $id)
	{
		$this->db->where('id_water_meter', $id);
		$this->db->update('tb_water_meter', $data);
	}

	//DATA WATER METER
	public function get_status() {
		$query = $this->db->get('tb_status');

		return $query->result();
	}

	public function get_kondisi() {
		$query = $this->db->get('tb_kondisi');

		return $query->result();
	}

	public function get_data_wm()
	{
		$query = $this->db->get('tb_water_meter');

		return $query->result();
	}

	public function get_data_markers()
	{
		$query = $this->db->get('markers');

		return $query->result();
	}

}
