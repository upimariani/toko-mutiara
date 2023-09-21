<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDiskon');
	}
	public function index()
	{
		$data = array(
			'diskon' => $this->mDiskon->select()
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/vDiskon', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
}

/* End of file cDiskon.php */
