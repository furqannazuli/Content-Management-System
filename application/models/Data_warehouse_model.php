<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_warehouse_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('data_warehouse');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	// Detail
	public function detail($id) {
		$this->db->select('*');
		$this->db->from('data_warehouse');
		$this->db->where('id',$id);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}
	
	// Tambah
	public function tambah () {
		$data = [ 
			"id"			=> $this->input->post('id', true),
			"konten"		=> $this->input->post('konten', true),
			"title"			=> $this->input->post('title', true)
		];
		$this->db->insert('data_warehouse',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id',$data['id']);
		$this->db->update('data_warehouse',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id',$data['id']);
		$this->db->delete('data_warehouse',$data);
	}
}