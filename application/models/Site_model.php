<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();	
		$this->load->database();
	}
}