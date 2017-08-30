<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {

	public function __construct() {

		parent::__construct();

			$this->load->database();
	}

	public function get_pengguna($data) {

		$query = $this->db->get_where('tb_pengguna', $data);

			return $query;

	}

	public function tampil_pengguna() {
		$query = $this->db->get('tb_pengguna');

			return $query->result();
	}

	public function check_login() {

		$data = array(
				'username' => $this->input->post('username', TRUE),
				'password' => $this->input->post('password', TRUE),
			);

		$hasil = $this->get_pengguna($data);
		if ( $hasil->num_rows() == 1 ) {

			foreach ($hasil->result() as $sess) {

				$data['id_pengguna'] 	= $sess->id_pengguna;
				$data['username'] 		= $sess->username;
				$data['nama_lengkap'] = $sess->nama_lengkap;
				$data['hak_akses'] 		= $sess->hak_akses;
				$data['gambar']				= $sess->gambar;

				$this->session->set_userdata($data);

			}

			//menyimpan data jabatan
			$jabatan = [ 1 => "Super Admin", "Admin", "Direktur", "Subag Hublang", "Teknik"];

			//get session hak_akses
			$data 	= $this->session->userdata('hak_akses');
			if ($data == "1" ) {

					$data = ['jabatan' => $jabatan[1], 'logged_in' => TRUE];
					$this->session->set_userdata($data);

					$alert	= "<script>alert('Login Sebagai $jabatan[1]')</script>";
					$this->session->set_flashdata("pesan", $alert);
					redirect('web');

			}
			if ($data == "2") {

				$data = ['jabatan' => $jabatan[2], 'logged_in' => TRUE];
				$this->session->set_userdata($data);

				$alert	= "<script>alert('Login Sebagai $jabatan[2]')</script>";
				$this->session->set_flashdata("pesan", $alert);
				redirect('web');

			}
			if ($data == "3") {
				$data = ['jabatan' => $jabatan[3], 'logged_in' => TRUE];
				$this->session->set_userdata($data);

				$alert	= "<script>alert('Login Sebagai $jabatan[3]')</script>";
				$this->session->set_flashdata("pesan", $alert);
				redirect('web');
			}
			if ($data == "4") {
				$data = ['jabatan' => $jabatan[4], 'logged_in' => TRUE];
				$this->session->set_userdata($data);

				$alert	= "<script>alert('Login Sebagai $jabatan[4]')</script>";
				$this->session->set_flashdata("pesan", $alert);
				redirect('web');
			}
			if ($data == "5") {
				$data = ['jabatan' => $jabatan[5], 'logged_in' => TRUE];
				$this->session->set_userdata($data);

				$alert	= "<script>alert('Login Sebagai $jabatan[5]')</script>";
				$this->session->set_flashdata("pesan", $alert);
				redirect('web');
			}

		} else {
			$alert	= "<script>alert('Maaf! Username dan Password anda Salah')</script>";
			$this->session->set_flashdata("pesan", $alert);
			redirect('login');
		}

	}

	public function check_session() {
		$data = $this->session->userdata('logged_in');

		if ($data == FALSE) {
			$alert	= "<script>alert('Anda belum melakukan login')</script>";
			$this->session->set_flashdata("pesan", $alert);
			redirect('login');
		}

	}

}
