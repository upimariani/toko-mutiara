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
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/vDashboard', $data);
		$this->load->view('Admin//Layout/footer');
	}
}

/* End of file cDashboard.php */
