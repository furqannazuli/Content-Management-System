<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_konten_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	// Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('slide_konten');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	// Detail
	public function detail($id) {
		$this->db->select('*');
		$this->db->from('slide_konten');
		$this->db->where('id',$id);
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->row();
	}
	
	// Tambah
	public function tambah($data) {
		$data = [ 
			"id"			=> $this->input->post('id', true),
			"judul"			=> $this->input->post('judul', true),
			"pengertian"	=> $this->input->post('pengertian', true),
			"manfaat"		=> $this->input->post('manfaat', true),
			"output"		=> $this->input->post('output', true),
			"gambar"		=> $data['gambar'][0]['file_name'],
			"video"			=> $data['video'][0]['file_name'],
			"header_title"	=> $this->input->post('header_title',true)
		];
		$this->db->insert('slide_konten',$data);
	}
	
	// Edit 
	public function edit ($data) {
		$this->db->where('id',$data['id']);
		$this->db->update('slide_konten',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id',$data['id']);
		$this->db->delete('slide_konten',$data);
	}
}