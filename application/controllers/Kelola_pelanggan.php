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
		$data['konten'] = 'kelola_pelanggan/v_tambah_lokasiunit';
		$this->load->view('template_admin', $data);
	}

	public function tambah_pelanggan_proses()
	{
		$data = array(
			"kode_lokasi" => $this->input->post('kode_lokasi'),
			"lokasi_unit" => $this->input->post('lokasi_unit'),
		);
		$this->m_pelanggan->tambah_data_pelanggan($data);
		$alert	= "<script>alert('Data berhasil disimpan')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_lokasi_unit/lokasi_unit');
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
		redirect('kelola_lokasi_unit/lokasi_unit');
	}

	public function hapus_pelanggan($id)
	{
		$id = $this->uri->segment(3);
		$this->m_pelanggan->hapus_data_pelanggan($id);
		$alert	= "<script>alert('Data berhasil dihapus')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_lokasi_unit/lokasi_unit');
	}

}
