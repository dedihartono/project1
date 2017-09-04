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

}
