<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_pelanggan extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		//load model and add alias
		//check session logged_in
			$this->load->model('m_pengguna');
			$this->m_pengguna->check_session();

			$this->load->model('m_pelanggan');
	}

	public function pelanggan()
	{

		$data = array(
			'breadcrumb_1' 	=> 'Kelola Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'panel_title' 	=> 'Lihat Data Pelanggan',
			'pelanggan' 		=> $this->m_pelanggan->lihat_data_pelanggan(),
			'konten' 				=> 'pelanggan/v_pelanggan',
		);

		$this->load->view('template_admin', $data);
	}

	public function tambah_pelanggan()
	{
		$data = array(
			'breadcrumb_1' 	=> 'Kelola Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'breadcrumb_3' 	=> anchor('kelola_pelanggan/tambah_pelanggan', 'Tambah Pelanggan'),
			'panel_title' 	=> 'Tambah Data Pelanggan',
			'jenis_bangunan'=> $this->m_pelanggan->get_jenis_bangunan(),
			'status_rumah'	=> $this->m_pelanggan->get_status_rumah(),
			'peruntukan'		=> $this->m_pelanggan->get_peruntukan(),
			'lokasi_unit'		=> $this->m_pelanggan->get_lokasi_unit(),
			'konten' 				=> 'pelanggan/v_tambah_pelanggan',
		);

		$this->load->view('template_admin', $data);
	}

	public function tambah_pelanggan_proses()
	{
		$detail_pelanggan = array(
			"telepon" 					=> $this->input->post('telepon'),
			"pekerjaan" 				=> $this->input->post('pekerjaan'),
			"luas_bangunan" 		=> $this->input->post('luas_bangunan'),
			"luas_tanah" 				=> $this->input->post('luas_tanah'),
			"jumlah_penghuni" 	=> $this->input->post('jumlah_penghuni'),
			"id_jenis_bangunan" => $this->input->post('id_jenis_bangunan'),
			"id_status_rumah" 	=> $this->input->post('id_status_rumah'),
			"id_peruntukan" 		=> $this->input->post('id_peruntukan'),
		);

		$water_meter = array(
			"kode_lokasi" 	=> $this->input->post('kode_lokasi'),
		);

		$id_pel_detail 	= $this->m_pelanggan->tambah_detail_pelanggan($detail_pelanggan);
		$id_water_meter = $this->m_pelanggan->tambah_water_meter($water_meter);
		$pelanggan = array(
			"nama_pelanggan" 	=> $this->input->post('nama_pelanggan'),
			"alamat" 					=> $this->input->post('alamat'),
			"id_pel_detail" 	=> $id_pel_detail,
			"id_water_meter" 	=> $id_water_meter,
		);

		$this->m_pelanggan->tambah_data_pelanggan($pelanggan);

		$alert	= "<script>alert('Data berhasil disimpan')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_pelanggan/pelanggan');
	}

	public function edit_pelanggan($id)
	{
		$data = array(
			'breadcrumb_1' 	=> 'Kelola Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'breadcrumb_3' 	=> anchor('kelola_pelanggan/edit_pelanggan/'.$id, 'Edit Pelanggan'),
			'panel_title' 	=> 'Lihat Data Pelanggan',
		);

		$id = $this->uri->segment(3);
		//var_dump($id);
		$data['pelanggan'] 	= $this->m_pelanggan->lihat_data_by($id);
		$data['konten'] 	= 'pelanggan/v_edit_pelanggan';
		$this->load->view('template_admin', $data);
	}

	public function edit_pelanggan_proses($id)
	{
		$id = $this->uri->segment(3);
		$data = array(
			"lokasi_unit" => $this->input->post('lokasi_unit'),
		);
		$this->m_pelanggan->edit_data_pelanggan($data, $id);
		$alert	= "<script>alert('Data berhasil diubah')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_pelanggan/pelanggan');
	}

	public function hapus_pelanggan($id)
	{
		$id = $this->uri->segment(3);
		$this->m_pelanggan->hapus_data_pelanggan($id);
		$alert	= "<script>alert('Data berhasil dihapus')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_pelanggan/pelanggan');
	}

	public function pelanggan_detil($id)
	{
		$data = array(
			'breadcrumb_1' 	=> 'Detail Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'breadcrumb_3' 	=> anchor('kelola_pelanggan/pelanggan_detail/'.$id, 'Detail Pelanggan'),
			'panel_title' 	=> 'Lihat Data Detail Pelanggan',
		);

		$id = $this->uri->segment('3');

		$data['pelanggan'] 	= $this->m_pelanggan->lihat_data_detail($id);
		$data['konten'] 	= 'pelanggan/v_pelanggan_detail';
		$this->load->view('template_admin', $data);
	}


		public function sig_pelanggan()
		{
			$this->load->library('googlemaps');

			$config['center'] = '-6.567, 107.77';
			$config['zoom'] = '15';
			$config['onclick'] = 'createMarker_map({ map: map, position:event.latLng });';
			$this->googlemaps->initialize($config);

			$marker = array();
			$marker['position'] = '-6.567, 107.77';
			$this->googlemaps->add_marker($marker);
			$data['map'] = $this->googlemaps->create_map();

			$data['konten']='pelanggan/v_sig_pelanggan';
			$this->load->view('template_admin', $data);
		}

		public function laporan_pelanggan()
		{
			$data['konten']='pelanggan/v_laporan_pelanggan';
			$this->load->view('template_admin', $data);
		}


}
