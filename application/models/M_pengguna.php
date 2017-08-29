<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {

	public function __construct() {

		parent::__construct();

			$this->load->database();
	}

	public function check_pengguna($data) {

		$query = $this->db->get_where('tb_pengguna', $data);

			return $query;

	}

}
