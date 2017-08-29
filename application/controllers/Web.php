<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function index()
	{
		$data['konten'] = 'dashboard/v_dashboard';
		$this->load->view('template_admin', $data);
	}

}
