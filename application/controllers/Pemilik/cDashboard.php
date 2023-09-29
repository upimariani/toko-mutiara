<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
		$this->load->model('mSegmentasi');
	}

	public function index()
	{
		$data = array(
			'total' => $this->mDashboard->dashboard_admin(),
			'segmentasi' => $this->mSegmentasi->variabel()
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/vDashboard', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
	public function detail_segmentasi($status)
	{
		$data = array(
			'detail_segmentasi' => $this->mDashboard->detail_segmentasi($status)
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/vDetailSegmentasi', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
}

/* End of file cDashboard.php */
