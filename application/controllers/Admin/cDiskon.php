<?php

defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDiskon');
		$this->load->model('mProduk');
	}
	public function index()
	{
		$data = array(
			'diskon' => $this->mDiskon->select()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Diskon/vDiskon', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('produk', 'Produk', 'required');
		$this->form_validation->set_rules('nama', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('diskon', 'Besar Diskon', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'diskon' => $this->mDiskon->select(),
				'produk' => $this->mProduk->select()
			);
			$this->load->view('Admin/Layout/head');
			$this->load->view('Admin/Diskon/vCreateDiskon', $data);
			$this->load->view('Admin/Layout/footer');
		} else {
			$data = array(
				'id_produk' => $this->input->post('produk'),
				'nama_diskon' => $this->input->post('nama'),
				'tgl_diskon' => date('Y-m-d'),
				'diskon' => $this->input->post('diskon'),
			);
			$this->mDiskon->insert($data);
			$this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!');
			redirect('Admin/cDiskon');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('produk', 'Produk', 'required');
		$this->form_validation->set_rules('nama', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('diskon', 'Besar Diskon', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'diskon' => $this->mDiskon->get_data($id),
				'produk' => $this->mProduk->select()
			);
			$this->load->view('Admin/Layout/head');
			$this->load->view('Admin/Diskon/vUpdateDiskon', $data);
			$this->load->view('Admin/Layout/footer');
		} else {
			$data = array(
				'id_produk' => $this->input->post('produk'),
				'nama_diskon' => $this->input->post('nama'),
				'tgl_diskon' => date('Y-m-d'),
				'diskon' => $this->input->post('diskon'),
			);
			$this->mDiskon->update($id, $data);
			$this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!');
			redirect('Admin/cDiskon');
		}
	}
	public function delete($id)
	{
		$this->mDiskon->delete($id);
		$this->session->set_flashdata('success', 'Data Diskon Berhasil Dihapus!');
		redirect('Admin/cDiskon');
	}
}

/* End of file cDiskon.php */
