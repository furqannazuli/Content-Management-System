<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slide_konten extends CI_Controller
{

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('slide_konten_model');
	}

	// Index
	public function index()
	{
		$slide_konten = $this->slide_konten_model->listing();

		$data = array(
			'title'			=> 'Slide Konten',
			'slide_konten'	=> $slide_konten,
			'isi'			=> 'admin/slide_konten/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Tambah
	public function tambah()
	{
		$slide_konten = $this->slide_konten_model->listing();
		$data = array(
			'title'			=> 'Tambah Data',
			'slide_konten'	=> $slide_konten,
			'isi'			=> 'admin/slide_konten/tambah'
		);
		return $this->load->view('admin/layout/wrapper', $data);
	}

	public function insert()
	{
		$slide_konten = $this->slide_konten_model->listing();
		$v = $this->form_validation;
		$v->set_rules('id', 'Id');
		$v->set_rules('judul', 'Judul', 'required');
		$v->set_rules('pengertian', 'Pengertian', 'required');
		$v->set_rules('manfaat', 'Manfaat', 'required');
		$v->set_rules('output', 'Output', 'required');
		$v->set_rules('gambar', 'Gambar');
		$v->set_rules('video', 'Video');
		if ($v->run()) {
			$config['upload_path'] = './assets/upload/';
			$config['allowed_types'] 	= 'gif|jpg|png|mp4';
			$this->load->library('upload', $config);
			$uploadData = [];
			$gambar = $this->upload->do_upload('gambar');
			$uploadData['gambar'][] = $this->upload->data();
			$video = $this->upload->do_upload('video');
			$uploadData['video'][] = $this->upload->data();
			if (!$gambar && !$video) {
				if ($slide_konten['gambar'] != "" && $slide_konten['video'] != "") {
					unlink('./assets/upload/' . $slide_konten['gambar']);
					unlink('./assets/upload/' . $slide_konten['video']);
				}
			}
			$this->slide_konten_model->tambah($uploadData);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/slide_konten'));
		}
	}

	// Edit
	public function edit($id)
	{
		$slide_konten		= $this->slide_konten_model->detail($id);
		// End masuk database
		$data = array(
			'title'			=> 'Edit Data',
			'slide_konten'	=> $slide_konten,
			'isi'			=> 'admin/slide_konten/edit'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Update
	public function update($id)
	{
		$slide_konten = $this->slide_konten_model->listing();	
		$config['upload_path'] = FCPATH . '/assets/upload/';
		$config['allowed_types'] 	= 'gif|jpg|png|mp4';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$uploadData = [];
		$gambar = $this->upload->do_upload('gambar');
		$uploadData['gambar'][] = $this->upload->data();
		$video = $this->upload->do_upload('video');
		$uploadData['video'][] = $this->upload->data();
		if (!$gambar && !$video) {
			if ($slide_konten['gambar'] != "" && $slide_konten['video'] != "") {
				unlink('./assets/upload/' . $slide_konten['gambar']);
				unlink('./assets/upload/' . $slide_konten['video']);
			}
		}
		// Proses ke database
		$i = $this->input;
		$data = array(
			'id'			=> $id,
			'judul'			=> $i->post('judul'),
			'pengertian'	=> $i->post('pengertian'),
			'manfaat'		=> $i->post('manfaat'),
			'output'		=> $i->post('output'),
			'gambar'		=> $uploadData['gambar'][0]['file_name'],
			'video'			=> $uploadData['video'][0]['file_name'],
			"header_title"	=> $i->post('header_title',true)
		);
		$this->slide_konten_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/slide_konten'));
	}

	// Delete
	public function delete($id)
	{
		$this->simple_login->cek_login();
		$data = array('id'	=> $id);
		$this->slide_konten_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah didelete');
		redirect(base_url('admin/slide_konten'));
	}
}
