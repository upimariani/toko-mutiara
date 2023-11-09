<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mHome');
	}

	public function index()
	{
		$data = array(
			'produk' => $this->mHome->produk()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/vHome', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function cart()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => $this->input->post('qty'),
			'picture' => $this->input->post('picture')
		);
		$this->cart->insert($data);
		redirect('pelanggan/chome');
	}
}

/* End of file cHome.php */
