<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model and add alias
		//check session logged_in


	}

	public function index()
	{
    $this->load->view('v_testing');
	}

}
