<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('data_warehouse_model');
		$this->load->model('app_report_model');
		$this->load->model('eclipse_model');
		$this->load->model('slide_konten_model');
	}

	// Index 
	public function index()
	{
		$site	= $this->konfigurasi_model->listing();
		$dataWarehouse = $this->data_warehouse_model->listing();
		$appReportData = $this->app_report_model->listing();
		$appReportDay = $this->app_report_model->getDay();
		$eclipseData = $this->eclipse_model->listing();
		$slide_konten = $this->slide_konten_model->listing();
		$data	= array(
			'site' => $site,
			'title'	=> $site['namaweb'] . ' | ' . $site['tagline'],
			'isi'		=> 'home/list', 'site',
			'data_warehouse' => $dataWarehouse, 
			'app_report' => $appReportData, 
			'app_report_day' => $appReportDay,
			'eclipse' => $eclipseData,
			'slide2_data' => $slide_konten,
		);
		$this->load->view('layout/main', $data);
	}
}
