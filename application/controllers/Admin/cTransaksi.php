<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
	}

	public function pesanan_masuk()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Transaksi/vPesananMasuk', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function menunggu_konfirmasi()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Transaksi/vMenungguKonfirmasi', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function diproses()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Transaksi/vPesananDiproses', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function dikirim()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Transaksi/vPesananDikirim', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function selesai()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi()
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Transaksi/vPesananSelesai', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function detail_pesanan($id)
	{
		$data = array(
			'detail' => $this->mTransaksi->detail_pesanan($id)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Transaksi/vDetailTransaksi', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function konfirmasi($id)
	{
		$data = array(
			'stat_order' => '2'
		);
		$this->mTransaksi->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Segera Diproses!');
		redirect('Admin/cTransaksi/diproses');
	}
	public function kirim($id)
	{
		$data = array(
			'stat_order' => '3'
		);
		$this->mTransaksi->update_status($id, $data);
		$this->session->set_flashdata('success', 'Pesanan Segera Dikirim!');
		redirect('Admin/cTransaksi/dikirim');
	}
}

/* End of file cTransaksi.php */
