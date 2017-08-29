<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model and add alias
		//check session logged_in
			$this->load->model('M_pengguna', 'm_pengguna');
			$this->m_pengguna->check_session();

	}

	public function index()
	{
		$data['konten'] = 'dashboard/v_dashboard';
		$this->load->view('template_admin', $data);
	}

}
