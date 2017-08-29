<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		//load model and add alias
		parent::__construct();

			$this->load->model('M_pengguna', 'm_pengguna');

	}


	public function index() {

		$this->load->view('login/v_login');

	}

	public function check_login() {

	$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE),
			);

		$hasil = $this->m_pengguna->check_pengguna($data);

		if ( $hasil->num_rows() == 1 ) {

			foreach ($hasil->result() as $sess) {

				$data['id_pengguna'] 	= $sess->id_pengguna;
				$data['username'] 		= $sess->username;
				$data['nama_lengkap'] = $sess->nama_lengkap;
				$data['jabatan']			= $sess->jabatan;
				$data['gambar']				= $sess->gambar;

				$this->session->set_userdata($data);

			}
			$data 	= $this->session->userdata('jabatan');
			$alert	= "<script>alert('Login Sebagai $data')</script>";

			$this->session->set_flashdata("pesan", $alert);
			redirect('web');
		}

	}

	public function logout() {

		$this->session->sess_destroy();
			redirect('login');

	}

}
