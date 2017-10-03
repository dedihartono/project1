<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model and add alias
		//check session logged_in


	}

	public function index()
	{
		$data['konten'] = 'simple_map';
		$this->load->view('template_admin', $data);
	}

}
