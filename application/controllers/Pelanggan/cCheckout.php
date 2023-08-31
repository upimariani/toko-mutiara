<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
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
		$this->load->view('Pelanggan/Layout/head');
		$this->load->view('Pelanggan/vCheckout', $data);
		$this->load->view('Pelanggan/Layout/footer');
	}
	public function order()
	{
		$data = array(
			'id_pelanggan' => $this->session->userdata('id'),
			'id_ongkir' => $this->input->post('kecamatan'),
			'tgl_transaksi' => date('Y-m-d'),
			'tot_bayar' => $this->input->post('total'),
			'stat_order' => '0',
			'bukti_bayar' => '0'
		);
		$this->db->insert('transaksi', $data);

		$id_transaksi = $this->db->query("SELECT MAX(id_transaksi) as id FROM `transaksi`")->row();
		foreach ($this->cart->contents() as $key => $value) {
			$detail = array(
				'id_transaksi' => $id_transaksi->id,
				'id_produk' => $value['id'],
				'qty' => $value['qty']
			);
			$this->db->insert('detail_transaksi', $detail);
		}
		$this->cart->destroy();
		redirect('Pelanggan/cHome');
	}
}

/* End of file cCheckout.php */
