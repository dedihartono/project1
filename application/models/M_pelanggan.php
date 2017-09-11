<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

	public function __construct() {

		parent::__construct();

			$this->load->database();
	}

	public function lihat_data_pelanggan() {

		$this->db->select('pl.id_pelanggan, pl.nama_pelanggan, pd.alamat');
		$this->db->from('tb_pelanggan AS pl');
		$this->db->from('tb_pelanggan_detail AS pd');
		$this->db->join('tb_pelanggan_detail', 'pl.id_pelanggan = pd.id_pelanggan', 'LEFT');

		$query = $this->db->get();

			return $query->result();

	}

	public function tambah_data_pelanggan($data)
	{
		$this->db->insert('tb_pelanggan', $data);

			return $this->db->insert_id(); //return lastid
	}

	public function lihat_data_by($id)
	{
		$this->db->where('id_pelanggan', $id);
		$query = $this->db->get('tb_pelanggan');

		return $query->row();
	}

	public function lihat_data_detail($id)
	{
		$this->db->select('pl.`id_pelanggan`, pl.`nama_pelanggan`,
				pd.`telepon`, pd.`alamat`, pd.`pekerjaan`, pd.`alamat`, pd.`jumlah_Penghuni`, pd.`luas_tanah`, pd.`luas_bangunan`,
				pr.`peruntukan`, sr.`status_rumah`, jb.`jenis_bangunan`,
				wm.`kode_asset`, wm.`merk`, wm.`no_body`, wm.`no_smb`, wm.`type`, wm.`ukuran`, wm.`lat`, wm.`long`,
				lu.`lokasi_unit`,
				st.`status`,
				kd.`kondisi`');
				$this->db->from('tb_pelanggan AS pl');
				$this->db->from('tb_pelanggan_detail AS pd');
				$this->db->from('tb_jenis_bangunan AS jb');
				$this->db->from('tb_status_rumah AS sr');
				$this->db->from('tb_peruntukan AS pr');
				$this->db->from('tb_water_meter AS wm');
				$this->db->from('tb_lokasi_unit AS lu');
				$this->db->from('tb_status AS st');
				$this->db->from('tb_kondisi AS kd');

				$this->db->join('tb_pelanggan_detail', 'pl.`id_pelanggan` = pd.`id_pelanggan`', 'LEFT');
				$this->db->join('tb_jenis_bangunan', 'pd.`id_jenis_bangunan` = jb.`id_jenis_bangunan`', 'LEFT');
				$this->db->join('tb_status_rumah', 'pd.`id_status_rumah` = sr.`id_status_rumah`', 'LEFT');
				$this->db->join('tb_peruntukan', 'pd.`id_peruntukan` = pr.`id_peruntukan`', 'LEFT');
				$this->db->join('tb_water_meter', 'pl.`id_pelanggan` = wm.`id_pelanggan`', 'LEFT');
				$this->db->join('tb_lokasi_unit', 'wm.`kode_lokasi` = lu.`kode_lokasi`', 'LEFT');
				$this->db->join('tb_status', 'wm.`id_status` = st.`id_status`', 'LEFT');
				$this->db->join('tb_kondisi', 'wm.`id_kondisi` = kd.`id_kondisi`', 'LEFT');

				$this->db->where('pl.`id_pelanggan`', $id);

		$query = $this->db->get();
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
	}

	public function tambah_water_meter($data)
	{
		$this->db->insert('tb_water_meter', $data);
	}

}
