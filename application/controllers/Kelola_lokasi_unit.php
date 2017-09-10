<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_lokasi_unit extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		//load model and add alias
		//check session logged_in
			$this->load->model('m_pengguna');
			$this->m_pengguna->check_session();

			$this->load->model('m_lokasi_unit');

	}

	public function lokasi_unit()
	{
		$data = array(
			'breadcrumb_1' 	=> 'Kelola Lokasi Unit',
			'breadcrumb_2' 	=> anchor('kelola_lokasi_unit/lokasi_unit', 'Lokasi Unit'),
			'panel_title' 	=> 'Lihat Data Lokasi Unit',
		);
		$data['lokunit'] = $this->m_lokasi_unit->lihat_data_lokunit();
		$data['konten'] = 'lokasi_unit/v_lokasi_unit';
		$this->load->view('template_admin', $data);
	}
	
	public function tambah_lokunit()
	{
		$data = array(
			'breadcrumb_1' 	=> 'Kelola Lokasi Unit',
			'breadcrumb_2' 	=> anchor('kelola_lokasi_unit/lokasi_unit', 'Lokasi Unit'),
			'breadcrumb_3' 	=> anchor('kelola_lokasi_unit/tambah_lokunit', 'Tambah Lokasi Unit'),
			'panel_title' 	=> 'Tambah Data Lokasi Unit',
		);
		$data['konten'] = 'lokasi_unit/v_tambah_lokasiunit';
		$this->load->view('template_admin', $data);
	}

	public function tambah_lokunit_proses()
	{
		$data = array(
			"kode_lokasi" => $this->input->post('kode_lokasi'),
			"lokasi_unit" => $this->input->post('lokasi_unit'),
		);
		$this->m_lokasi_unit->tambah_data_lokunit($data);
		$alert	= "<script>alert('Data berhasil disimpan')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_lokasi_unit/lokasi_unit');
	}

	public function edit_lokunit($id)
	{
		$data = array(
			'breadcrumb_1' 	=> 'Kelola Lokasi Unit',
			'breadcrumb_2' 	=> anchor('kelola_lokasi_unit/lokasi_unit', 'Lokasi Unit'),
			'breadcrumb_3' 	=> anchor('kelola_lokasi_unit/edit_lokunit/'.$id, 'Edit Lokasi Unit'),
			'panel_title' 	=> 'Tambah Data Lokasi Unit',
		);
		$id = $this->uri->segment(3);
		$data['lokunit'] 	= $this->m_lokasi_unit->lihat_data_by($id);
		$data['konten'] 	= 'lokasi_unit/v_edit_lokasiunit';
		$this->load->view('template_admin', $data);
	}

	public function edit_lokunit_proses($id)
	{
		$id = $this->uri->segment(3);
		$data = array(
			"lokasi_unit" => $this->input->post('lokasi_unit'),
		);
		$this->m_lokasi_unit->edit_data_lokunit($data, $id);
		$alert	= "<script>alert('Data berhasil diubah')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_lokasi_unit/lokasi_unit');
	}

	public function hapus_lokunit($id)
	{
		$id = $this->uri->segment(3);
		$this->m_lokasi_unit->hapus_data_lokunit($id);
		$alert	= "<script>alert('Data berhasil dihapus')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_lokasi_unit/lokasi_unit');
	}

}
