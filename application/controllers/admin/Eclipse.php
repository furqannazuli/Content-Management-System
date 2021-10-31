<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eclipse extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('eclipse_model');
	}
	
	// Index
	public function index() {
		$eclipse = $this->eclipse_model->listing();
		
		$data = array(	'title'			=> 'Eclipse Data',
						'eclipse'	=> $eclipse,
						'isi'			=> 'admin/eclipse/list');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Tambah
	public function tambah() {
		$eclipse = $this->eclipse_model->listing();

		$this->form_validation->set_rules('id', 'Id');
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('konten', 'Konten', 'required');

		if ($this->form_validation->run() == false){
			$data = array(	'title'			=> 'Tambah Data',
							'eclipse'	=> $eclipse,
							'isi'			=> 'admin/eclipse/tambah');
			$this->load->view('admin/layout/wrapper', $data);
		} else{
			$this->eclipse_model->tambah();
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/eclipse'));
		}	
	}
	
	// Edit
	public function edit($id)
	{
		$eclipse		= $this->eclipse_model->detail($id);
		// End masuk database
		$data = array(
			'title'				=> 'Edit Data',
			'eclipse'			=> $eclipse,
			'isi'				=> 'admin/eclipse/edit'
		);
		return $this->load->view('admin/layout/wrapper', $data);
	}

	public function update($id)
	{
		$i = $this->input;
		$data = array(
			'id'			=> (int)$id,
			'konten'		=> $i->post('konten'),
			'title'			=> $i->post('title')
		);
		$this->eclipse_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/eclipse'));
	}

	// Delete
	public function delete($id) {
		$this->simple_login->cek_login();
		$data = array('id'	=> $id);
		$this->eclipse_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/eclipse'));		
	}
}