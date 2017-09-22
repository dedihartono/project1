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

			$this->load->model(array('m_pelanggan', 'm_water_meter', 'm_lokasi_unit'));
			$this->load->library('googlemaps');
	}

	public function pelanggan()
	{

		$data = array(
			'breadcrumb_1' 	=> 'Kelola Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'panel_title' 	=> 'Lihat Data Pelanggan',
			'pelanggan' 		=> $this->m_pelanggan->lihat_data_pelanggan(),
			'konten'				=> 'pelanggan/v_pelanggan',
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
			'konten' 				=> 'pelanggan/v_tambah_pelanggan',
		);

		$this->load->view('template_admin', $data);
	}

	public function tambah_pelanggan_proses()
	{

		//TAMBAH PELANGGAN
		$pelanggan = array(
			"nama_pelanggan" 	=> $this->input->post('nama_pelanggan'),
		);
		$id_pelanggan = $this->m_pelanggan->tambah_data_pelanggan($pelanggan);

		//TAMBAH PELANGGAN DETAIL
		$detail_pelanggan = array(
			"alamat" 						=> $this->input->post('alamat'),
			"telepon" 					=> $this->input->post('telepon'),
			"pekerjaan" 				=> $this->input->post('pekerjaan'),
			"luas_bangunan" 		=> $this->input->post('luas_bangunan'),
			"luas_tanah" 				=> $this->input->post('luas_tanah'),
			"jumlah_penghuni" 	=> $this->input->post('jumlah_penghuni'),
			"id_jenis_bangunan" => $this->input->post('id_jenis_bangunan'),
			"id_status_rumah" 	=> $this->input->post('id_status_rumah'),
			"id_peruntukan" 		=> $this->input->post('id_peruntukan'),
			"id_pelanggan"			=> $id_pelanggan,
		);
			$this->m_pelanggan->tambah_detail_pelanggan($detail_pelanggan);

		//TAMBAH WATER METER
		$water_meter = array(
			"id_pelanggan"		=> $id_pelanggan,
		);
			$this->m_water_meter->tambah_water_meter($water_meter);

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
			'panel_title' 	=> 'Edit Data Pelanggan',
			'jenis_bangunan'=> $this->m_pelanggan->get_jenis_bangunan(),
			'status_rumah'	=> $this->m_pelanggan->get_status_rumah(),
			'peruntukan'		=> $this->m_pelanggan->get_peruntukan(),
		);

		$id = $this->uri->segment(3);
		$data['pelanggan'] 	= $this->m_pelanggan->lihat_data_by($id);
		$data['konten'] 	= 'pelanggan/v_edit_pelanggan';
		$this->load->view('template_admin', $data);
	}

	public function edit_pelanggan_proses($id)
	{
		$id = $this->uri->segment(3);
		$data = array(
			"nama_pelanggan" 	=> $this->input->post('nama_pelanggan'),
		);
		$this->m_pelanggan->edit_data_pelanggan($data, $id);

		$id_pel_detail  = $this->input->post('id_pel_detail');
		$pelanggan_detail = array(
			"alamat" 						=> $this->input->post('alamat'),
			"telepon" 					=> $this->input->post('telepon'),
			"pekerjaan" 				=> $this->input->post('pekerjaan'),
			"luas_bangunan" 		=> $this->input->post('luas_bangunan'),
			"luas_tanah" 				=> $this->input->post('luas_tanah'),
			"jumlah_penghuni" 	=> $this->input->post('jumlah_penghuni'),
			"id_jenis_bangunan" => $this->input->post('id_jenis_bangunan'),
			"id_status_rumah" 	=> $this->input->post('id_status_rumah'),
			"id_peruntukan" 		=> $this->input->post('id_peruntukan'),
		);
		$this->m_pelanggan->edit_data_pelanggan_detail($pelanggan_detail, $id_pel_detail);

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

	public function pelanggan_detail($id)
	{
		$data = array(
			'breadcrumb_1' 	=> 'Detail Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'breadcrumb_3' 	=> anchor('kelola_pelanggan/pelanggan_detail/'.$id, 'Detail Pelanggan'),
			'panel_title' 	=> 'Lihat Data Detail Pelanggan',
		);

		$id = $this->uri->segment(3);

		$data['pelanggan'] 	= $this->m_pelanggan->lihat_data_detail($id);
		$data['konten'] 	= 'pelanggan/v_pelanggan_detail';
		$this->load->view('template_admin', $data);
	}

	public function water_meter($id)
	{
		$data = array(
			'breadcrumb_1' 	=> 'Kelola Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'breadcrumb_3' 	=> anchor('kelola_pelanggan/water_meter/'.$id, 'Water Meter Pelanggan'),
			'panel_title' 	=> 'Data Water Meter Pelanggan',
			'lokasi_unit' 	=> $this->m_lokasi_unit->lihat_data_lokunit(),
			'status' 				=> $this->m_water_meter->get_status(),
			'kondisi'				=> $this->m_water_meter->get_kondisi(),
		);

		$id = $this->uri->segment(3);
		$data['pelanggan'] 	= $this->m_water_meter->water_meter_by($id);
		$data['konten'] 	= 'pelanggan/v_water_meter';
		$this->load->view('template_admin', $data);
	}

	public function edit_wm_proses($id)
	{
		$data = array(
			'kode_asset'	=> $this->input->post('kode_asset'),
			'kode_lokasi'	=> $this->input->post('kode_lokasi'),
			'merk'				=> $this->input->post('merk'),
			'type'				=> $this->input->post('type'),
			'ukuran'			=> $this->input->post('ukuran'),
			'no_smb'			=> $this->input->post('no_smb'),
			'no_body'			=> $this->input->post('no_body'),
			'id_status'		=> $this->input->post('id_status'),
			'id_kondisi'	=> $this->input->post('id_kondisi'),
		);
		$id = $this->uri->segment(3);
		$this->m_water_meter->edit_data_wm($data, $id);
		$alert	= "<script>alert('Data berhasil disimpan')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_pelanggan/pelanggan_detail/'.$id);
	}

	public function tambah_koordinat($id)
	{
		$data = array(
			'breadcrumb_1' 	=> 'Kelola Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'breadcrumb_3' 	=> anchor('kelola_pelanggan/tambah_koordinat/'.$id, 'Tambah - Ubah Koordinat'),
			'panel_title' 	=> 'Tambah - Ubah Koordinat',
			'panel_title_2' => 'Map',
		);

		$id = $this->uri->segment(3);

		$config['center'] 	= '-6.4814031, 107.7957904';
		$config['zoom']			= 'auto';
		$config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';

		$this->googlemaps->initialize($config);


		$data['map'] 				= $this->googlemaps->create_map();
		$data['pelanggan'] 	= $this->m_water_meter->water_meter_by($id);
		$data['konten'] 		= 'pelanggan/v_tambah_koordinat';
		$this->load->view('template_admin', $data);
	}

	public function edit_koordinat($id)
	{
		$data = array(
			'breadcrumb_1' 	=> 'Kelola Pelanggan',
			'breadcrumb_2' 	=> anchor('kelola_pelanggan/pelanggan', 'Pelanggan'),
			'breadcrumb_3' 	=> anchor('kelola_pelanggan/tambah_koordinat/'.$id, 'Tambah - Ubah Koordinat'),
			'panel_title' 	=> 'Tambah - Ubah Koordinat',
			'panel_title_2' => 'Map',
		);

		$id = $this->uri->segment(3);

		$config['center'] 	= '-6.4814031, 107.7957904';
		$config['zoom']			= '13';
		$config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';

		$this->googlemaps->initialize($config);


		$pelanggan = $this->m_water_meter->get_wm_koordinat($id);

		foreach ($pelanggan as $row)
		{
			$lat		= $row->lat;
			$lng		= $row->long;
			$name		= $row->nama_pelanggan;

			$marker = array();
			$marker['draggable'] = true;
			$marker['ondragend'] = 'updateDatabase(event.latLng.lat(), event.latLng.lng());';
			$marker['position'] = "$lat , $lng";
			$marker['infowindow_content'] = "$name";
			$marker['animation'] = 'BOUNCE';
			$marker['icon'] = base_url('assets/img/icons/restaurant_mexican.png');
			$this->googlemaps->add_marker($marker);
		}

		$data['map'] 				= $this->googlemaps->create_map();
		$data['pelanggan'] 	= $this->m_water_meter->water_meter_by($id);
		$data['konten'] 		= 'pelanggan/v_edit_koordinat';
		$this->load->view('template_admin', $data);
	}

	public function edit_koordinat_proses($id)
	{
		$data = array(
			'lat'		=> $this->input->post('lat'),
			'long'	=> $this->input->post('long'),
		);

		$id = $this->uri->segment(3);


		$this->m_water_meter->edit_data_wm($data, $id);
		$alert	= "<script>alert('Data berhasil disimpan')</script>";
		$this->session->set_flashdata("pesan", $alert);
		redirect('kelola_pelanggan/pelanggan_detail/'.$id);
	}


	public function sig_pelanggan()
	{
		$data = array(
			'breadcrumb_1' => 'Pemetaan',
			'breadcrumb_2' => anchor('kelola_pelanggan/sig_pelanggan', 'SIG Pelanggan'),
		);

		$config['center'] = '-6.4814031, 107.7957904';
		$config['zoom'] 	= '12';
		$this->googlemaps->initialize($config);

		$pelanggan = $this->m_water_meter->get_data_wm();

		foreach ($pelanggan as $row)
		{
			$lat		= $row->lat;
			$lng		= $row->long;
			$name		= $row->id_pelanggan;

			$marker = array();
			$marker['position'] = "$lat , $lng";
			$marker['infowindow_content'] = "$name";
			$marker['animation'] = 'BOUNCE';
			$marker['icon'] = base_url('assets/img/icons/restaurant_mexican.png');
			$this->googlemaps->add_marker($marker);
		}

		$data['map'] = $this->googlemaps->create_map();


		$data['konten']='pelanggan/v_sig_pelanggan';
		$this->load->view('template_admin', $data);

		//$marker = array();
		//$marker['position'] = '37.409, -122.1319';
		//$marker['draggable'] = TRUE;
		//$marker['animation'] = 'DROP';
		//$this->googlemaps->add_marker($marker);

		//$marker = array();
		//$marker['position'] = '37.449, -122.1419';
		//$marker['onclick'] = 'alert("You just clicked me!!")';
		//$this->googlemaps->add_marker($marker);
	}

	public function laporan_pelanggan()
	{
		$data['konten']='pelanggan/v_laporan_pelanggan';
		$this->load->view('template_admin', $data);
	}

	public function test($id)
	{
		$data = $this->m_water_meter->get_wm_koordinat($id);
		var_dump($data);
	}
}
