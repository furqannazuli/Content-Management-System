<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_report extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('app_report_model');
	}
	
	// Index
	public function index() {
		$app_report = $this->app_report_model->listing();
		
		$data = array(	'title'			=> 'Application Report',
						'app_report'	=> $app_report,
						'isi'			=> 'admin/app_report/list');
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// Tambah
	public function tambah() {
		$app_report = $this->app_report_model->listing();

		$this->form_validation->set_rules('id', 'Id');
		$this->form_validation->set_rules('hari', 'Hari', 'required');
		$this->form_validation->set_rules('aplikasi', 'Aplikasi', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == false){
			$data = array(	'title'			=> 'Tambah Data',
							'app_report'	=> $app_report,
							'isi'			=> 'admin/app_report/tambah');
			$this->load->view('admin/layout/wrapper', $data);
		} else{
			$this->app_report_model->tambah();
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/app_report'));
		}	
	}
	
	// Edit
	public function edit($id) {
		$app_report		= $this->app_report_model->detail($id);
		// End masuk database
		$data = array(	'title'			=> 'Edit Data',
						'app_report'	=> $app_report,
						'isi'			=> 'admin/app_report/edit'); 
		return $this->load->view('admin/layout/wrapper', $data);
	}

	public function update($id) {
		// Proses ke database
		$i = $this->input;
		$data = array(	'id'			=> $id,							
						'hari'			=> $i->post('hari'),
						'aplikasi'		=> $i->post('aplikasi'),
						'keterangan'	=> $i->post('keterangan')	);
		$this->app_report_model->edit($data);
		$this->session->set_flashdata('sukses','Produk telah diedit');
		return redirect(base_url('admin/app_report'));
	}

	// Delete
	public function delete($id) {
		$this->simple_login->cek_login();
		$data = array('id'	=> $id);
		$this->app_report_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/app_report'));		
	}
}