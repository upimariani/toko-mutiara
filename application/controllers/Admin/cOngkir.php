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
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Ongkir/vOngkir', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama Kecamatan', 'required|is_unique[ongkir.nama_kecamatan]');
		$this->form_validation->set_rules('ongkir', 'Biaya Ongkos Kirim', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layout/head');
			$this->load->view('Admin/Ongkir/vCreateOngkir');
			$this->load->view('Admin/Layout/footer');
		} else {
			$data = array(
				'nama_kecamatan' => $this->input->post('nama'),
				'ongkir' => $this->input->post('ongkir')
			);
			$this->mOngkir->insert($data);
			$this->session->set_flashdata('success', 'Data Kecamatan Berhasil Ditambahkan!');
			redirect('Admin/cOngkir', 'refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Kecamatan', 'required');
		$this->form_validation->set_rules('ongkir', 'Biaya Ongkos Kirim', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'kecamatan' => $this->mOngkir->edit_kecamatan($id)
			);
			$this->load->view('Admin/Layout/head');
			$this->load->view('Admin/Ongkir/vUpdateOngkir', $data);
			$this->load->view('Admin/Layout/footer');
		} else {
			$data = array(
				'nama_kecamatan' => $this->input->post('nama'),
				'ongkir' => $this->input->post('ongkir')
			);
			$this->mOngkir->update($id, $data);
			$this->session->set_flashdata('success', 'Data Kecamatan Berhasil Diperbaharui!');
			redirect('Admin/cOngkir', 'refresh');
		}
	}
	public function delete($id)
	{
		$this->mOngkir->delete($id);
		$this->session->set_flashdata('success', 'Data Kecamatan  Berhasil Dihapus!');
		redirect('Admin/cOngkir', 'refresh');
	}
}

/* End of file cOngkir.php */
