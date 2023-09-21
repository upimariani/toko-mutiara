<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
	}

	public function index()
	{
		$data = array(
			'user' => $this->mUser->select()
		);
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/vUser', $data);
		$this->load->view('Pemilik/Layout/footer');
	}
}

/* End of file cUser.php */
