<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPesananSaya extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPesananSaya');
	}
	public function index()
	{
		$data = array(
			'status' => $this->mPesananSaya->transaksi()
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/vPesananSaya', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function detail_pesanan($id)
	{
		$data = array(
			'detail' => $this->mPesananSaya->detail_transaksi($id)
		);
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/vDetailPesanan', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function pembayaran($id)
	{
		$config['upload_path']          = './asset/bukti-pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'detail' => $this->mPesananSaya->detail_transaksi($id),
				'error' => $this->upload->display_errors()
			);
			$this->load->view('Pelanggan/Layout/head');
			$this->load->view('Pelanggan/vDetailPesanan', $data);
			$this->load->view('Pelanggan/Layout/footer');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'stat_order' => '1',
				'bukti_bayar' => $upload_data['file_name']
			);
			$this->mPesananSaya->status_order($id, $data);
			$this->session->set_flashdata('success', 'Pembayaran Berhasil Dikirim!');
			redirect('pelanggan/cPesananSaya/detail_pesanan/' . $id);
		}
	}
	public function diterima($id)
	{
		$data = array(
			'stat_order' => '4'
		);
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
		redirect('pelanggan/cPesananSaya/detail_pesanan/' . $id);
	}
}

/* End of file cPesananSaya.php */
