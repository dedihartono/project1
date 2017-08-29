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


	}


	public function index() {

		$this->load->view('login/v_login');

	}

}
