<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//load model and add alias
		//check session logged_in
			$this->load->model('m_pengguna');
			$this->m_pengguna->check_session();

	}


	public function index() {
		$data['pengguna'] = $this->m_pengguna->tampil_pengguna();
		$data['konten'] = 'pengguna/v_pengguna';
		$this->load->view('template_admin', $data);

	}

  
}
