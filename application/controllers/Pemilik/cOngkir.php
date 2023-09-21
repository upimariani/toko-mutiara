<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cOngkir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mOngkir');
	}
	public function index()
	{
		$data = array(
			'kecamatan' => $this->mOngkir->kecamatan()
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/vOngkir', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
}

/* End of file cOngkir.php */
