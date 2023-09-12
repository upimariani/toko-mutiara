<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
	}

	public function index()
	{
		$data = array(
			'total' => $this->mDashboard->dashboard_admin()
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/vDashboard', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
}

/* End of file cDashboard.php */
