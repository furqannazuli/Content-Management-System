<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor extends CI_Controller
{

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('app_report_model');
		$this->load->model('data_warehouse_model');
		$this->load->model('slide_konten_model');
	}

	// Index
	public function index()
	{
		$site 				= $this->konfigurasi_model->listing();
		$user				= $this->user_model->listing();
		$app_report			= $this->app_report_model->listing();
		$data_warehouse		= $this->data_warehouse_model->listing();
		$slide_konten		= $this->slide_konten_model->listing();

		$data = array(
			'title'				=> 'Dashboard Page - ' . $site['namaweb'],
			'user'				=> $user,
			'app_report'		=> $app_report,
			'data_warehouse'	=> $data_warehouse,
			'slide_konten'		=> $slide_konten,
			'isi'				=> 'admin/dasbor/list'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// General Configuration
	public function konfigurasi()
	{
		$site = $this->konfigurasi_model->listing();

		// Validasi 
		$this->form_validation->set_rules('namaweb', 'Website name website', 'required');
		$this->form_validation->set_rules('email', 'Email', 'valid_email');

		if ($this->form_validation->run() === FALSE) {

			$data = array(
				'title'	=> 'General Configuration',
				'site'	=> $site,
				'isi'	=> 'admin/dasbor/umum'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {
			$i = $this->input;
			$data = array(
				'id_konfigurasi'	=> $i->post('id_konfigurasi'),
				'home_setting'		=> $i->post('home_setting'),
				'namaweb'			=> $i->post('namaweb'),
				'tagline'			=> $i->post('tagline')
			);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Site configuration updated successfully');
			redirect(base_url('admin/dasbor/konfigurasi'));
		}
	}

	// Konfigurasi Icon
	public function icon()
	{
		$site = $this->konfigurasi_model->listing();

		$v = $this->form_validation;
		$v->set_rules('id_konfigurasi', 'ID Konfigurasi', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('icon')) {

				$data = array(
					'title'	=> 'New Icon',
					'site'	=> $site,
					'error'	=> $this->upload->display_errors(),
					'isi'	=> 'admin/dasbor/icon'
				);
				$this->load->view('admin/layout/wrapper', $data);
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				// Hapus gambar lama
				unlink('./assets/upload/image/' . $site['icon']);
				unlink('./assets/upload/image/thumbs/' . $site['icon']);
				// End hapus gambar lama
				$this->image_lib->resize();
				// Masuk ke database
				$i = $this->input;
				$data = array(
					'id_konfigurasi' => $i->post('id_konfigurasi'),
					'icon'			=> $upload_data['uploads']['file_name'],
					'id_user'		=> $this->session->userdata('id')
				);
				$this->konfigurasi_model->edit($data);
				$this->session->set_flashdata('sukses', 'Icon changed');
				redirect(base_url('admin/dasbor/icon'));
			}
		}
		// Default page
		$data = array(
			'title'	=> 'New Icon',
			'site'	=> $site,
			'isi'	=> 'admin/dasbor/icon'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Konfigurasi Background Music
	public function music()
	{
		$site = $this->konfigurasi_model->listing();

		$v = $this->form_validation;
		$v->set_rules('id_konfigurasi', 'ID Konfigurasi', 'required');

		if ($v->run()) {

			$config['upload_path'] 		= './assets/upload/music/';
			$config['allowed_types'] 	= 'mp3';
			$config['upload_path'] = './assets/upload/music/';
			// $config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('music')) {
				$data = array(
					'title'	=> 'New Icon',
					'site'	=> $site,
					'error'	=> $this->upload->display_errors(),
					'isi'	=> 'admin/dasbor/music'
				);
				$this->load->view('admin/layout/wrapper', $data);
			} else {
				$upload_data				= array('uploads' => $this->upload->data());
				// Image Editor
				// $config['image_library']	= 'gd2';
				// $config['source_image'] 	= './assets/upload/image/' . $upload_data['uploads']['file_name'];
				// $config['new_image'] 		= './assets/upload/image/thumbs/';
				// $config['create_thumb'] 	= TRUE;
				// $config['maintain_ratio'] 	= TRUE;
				// $config['width'] 			= 150; // Pixel
				// $config['height'] 			= 150; // Pixel
				// $config['thumb_marker'] 	= '';
				$this->load->library('upload', $config);
				// Hapus gambar lama
				if ($site['music'] != ""){
					unlink('./assets/upload/music/' . $site['music']);
				}
				// unlink('./assets/upload/image/thumbs/' . $site['icon']);
				// End hapus gambar lama
				// $this->image_lib->resize();
				// Masuk ke database
				$i = $this->input;
				$data = array(
					'id_konfigurasi' => $i->post('id_konfigurasi'),
					'music'			=> $upload_data['uploads']['file_name'],
				);
				$this->konfigurasi_model->edit($data);
				$this->session->set_flashdata('sukses', 'Music changed');
				redirect(base_url('admin/dasbor/music'));
			}
		}
		// Default page
		$data = array(
			'title'	=> 'New Music',
			'site'	=> $site,
			'isi'	=> 'admin/dasbor/music'
		);
		$this->load->view('admin/layout/wrapper', $data);
	}

	public function slide_duration()
	{
		$site = $this->konfigurasi_model->listing();
		$this->form_validation->set_rules('slide_duration',"durasi slide","required");
		if ($this->form_validation->run() === FALSE) {

			$data = array(
				'title'	=> 'General Configuration',
				'site'	=> $site,
				'isi'	=> 'admin/dasbor/slide_duration'
			);
			$this->load->view('admin/layout/wrapper', $data);
		} else {
			$i = $this->input;
			$data = array(
				'id_konfigurasi'	=> $i->post('id_konfigurasi'),
				'slide_duration'			=> $i->post('slide_duration')
			);
			$this->konfigurasi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Site configuration updated successfully');
			redirect(base_url('admin/dasbor/slide_duration'));
		}
	}
}
