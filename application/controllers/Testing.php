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
    $this->load->library('googlemaps');

    $config['center'] = '-6.567, 107.77';
    $config['zoom'] = 'auto';
    $this->googlemaps->initialize($config);

    $marker = array();
    $marker['position'] = '-6.567, 107.77';
    $this->googlemaps->add_marker($marker);
    $data['map'] = $this->googlemaps->create_map();
		$data['konten']='v_testing';
    $this->load->view('template_admin', $data);
	}

}
