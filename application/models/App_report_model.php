<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_report_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('app_report');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	// Get All Day
	public function getDay() {
		$this->db->select('hari');
		$this->db->from('app_report');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	// Detail
	public function detail($id) {
		$this->db->select('*');
		$this->db->from('app_report');
		$this->db->where('id',$id);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}
	
	// Tambah
	public function tambah () {
		$data = [ 
			"id"			=> $this->input->post('id', true),
			"hari"			=> $this->input->post('hari', true),
			"aplikasi"		=> $this->input->post('aplikasi', true),
			"keterangan"	=> $this->input->post('keterangan', true)
		];
		$this->db->insert('app_report',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id',$data['id']);
		$this->db->update('app_report',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id',$data['id']);
		$this->db->delete('app_report',$data);
	}
}