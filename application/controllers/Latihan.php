<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $this->load->library('googlemaps');

    $config['center'] = '37.4419, -122.1419';
    $config['zoom'] = 'auto';
    $this->googlemaps->initialize($config);

    $marker = array();
    $marker['position'] = '37.429, -122.1419';
    $this->googlemaps->add_marker($marker);
    $data['map'] = $this->googlemaps->create_map();

    $this->load->view('map', $data);

  }

}
