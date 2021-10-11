<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_warehouse extends CI_Controller
{

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_warehouse_model');
	}

	// Index
	public function index()
	{
		$data_warehouse = $this->data_warehouse_model->listing();

		$data = array(
			'title'				=> 'Data Warehouse',
			'data_warehouse'	=> $data_warehouse,
			'isi'				=> 'admin/data_warehouse/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Tambah
	public function tambah()
	{
		$data_warehouse = $this->data_warehouse_model->listing();

		$this->form_validation->set_rules('id', 'Id');
		$this->form_validation->set_rules('konten', 'Konten', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');

		if ($this->form_validation->run() == false) {
			$data = array(
				'title'				=> 'Tambah Data',
				'data_warehouse'	=> $data_warehouse,
				'isi'				=> 'admin/data_warehouse/tambah'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {
			$this->data_warehouse_model->tambah();
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/data_warehouse'));
		}
	}

	// Edit
	public function edit($id)
	{
		$data_warehouse		= $this->data_warehouse_model->detail($id);
		// End masuk database
		$data = array(
			'title'				=> 'Edit Data',
			'data_warehouse'	=> $data_warehouse,
			'isi'				=> 'admin/data_warehouse/edit'
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
		$this->data_warehouse_model->edit($data);
		$this->session->set_flashdata('sukses', 'Produk telah diedit');
		redirect(base_url('admin/data_warehouse'));
	}

	// Delete
	public function delete($id)
	{
		$this->simple_login->cek_login();
		$data = array('id'	=> $id);
		$this->data_warehouse_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah didelete');
		redirect(base_url('admin/data_warehouse'));
	}
}
