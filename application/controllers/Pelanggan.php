<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		//load model and add alias
		//check session logged_in
			$this->load->model('M_pengguna', 'm_pengguna');
			$this->m_pengguna->check_session();

			$this->load->model('M_pelanggan', 'm_pelanggan');


	}


	public function index()
	{

		$this->load->view('login/v_login');

	}

	public function lokasi_unit()
	{
		$data['lokunit'] = $this->m_pelanggan->read_lokunit();
		$data['konten'] = 'pelanggan/v_lokasi_unit';
		$this->load->view('template_admin', $data);
	}

	public function tambah_lokunit()
	{
		$data['konten'] = 'pelanggan/v_tambah_lokasiunit';
		$this->load->view('template_admin', $data);
	}

	public function tambah_lokunit_proses()
	{
		$data = array(
			"kode_lokasi" => $this->input->post('kode_lokasi'),
			"lokasi_unit" => $this->input->post('lokasi_unit'),
		);
		$this->m_pelanggan->insert_lokunit($data);
		$alert	= "<script>alert('Data berhasil disimpan')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('pelanggan/lokasi_unit');
	}

	public function edit_lokunit($id)
	{
		$id = $this->uri->segment(3);
		$data['lokunit'] 	= $this->m_pelanggan->edit_lokunit($id);
		$data['konten'] 	= 'pelanggan/v_edit_lokasiunit';
		$this->load->view('template_admin', $data);
	}

	public function edit_lokunit_proses($id)
	{
		$id = $this->uri->segment(3);
		$data = array(
			"lokasi_unit" => $this->input->post('lokasi_unit'),
		);
		$this->m_pelanggan->update_lokunit($data, $id);
		$alert	= "<script>alert('Data berhasil diubah')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('pelanggan/lokasi_unit');
	}

	public function hapus_lokunit($id)
	{
		$id = $this->uri->segment(3);
		$this->m_pelanggan->delete_lokunit($id);
		$alert	= "<script>alert('Data berhasil dihapus')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('pelanggan/lokasi_unit');
	}

}
