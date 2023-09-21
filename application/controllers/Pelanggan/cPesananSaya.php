<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPesananSaya extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPesananSaya');
		$this->load->model('mSegmentasi');
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
		$data = $this->mSegmentasi->variabel();

		$data_limit1 = $this->mSegmentasi->limit_desc();
		foreach ($data_limit1 as $key => $value) {
			// $n[] = $value->nama_produk;
			$q1[] = $value->qty;
			$n1[] = $value->netsales;
			$p1[] = $value->netsales - $value->costprice;
		}

		$no = 1;
		$tot_kedekatan1 = 0;
		foreach ($data as $key => $value) {
			$profit = $value->netsales - $value->costprice;
			$c1 = round(sqrt(pow($q1[1] - $value->qty, 2) + pow($n1[1] - $value->netsales, 2) + pow($p1[1] - $profit, 2)), 3);
			$c2 = round(sqrt(pow($q1[0] - $value->qty, 2) + pow($n1[0] - $value->netsales, 2) + pow($p1[0] - $profit, 2)), 3);
			$min = min($c1, $c2);
			$tot_kedekatan1 += $min;
			if ($min == $c1) {
				$cluster1[] = '0';
			} else {
				$cluster1[] = '1';
			}
		}
		// echo $tot_kedekatan1;



		//iterasi 2

		$data_limit2 = $this->mSegmentasi->limit_asc();
		foreach ($data_limit2 as $key => $value) {
			// $n[] = $value->nama_produk;
			$q2[] = $value->qty;
			$n2[] = $value->netsales;
			$p2[] = $value->netsales - $value->costprice;
		}
		$no = 1;
		$tot_kedekatan2 = 0;
		foreach ($data as $key => $value) {
			$id_produk[] = $value->id_produk;
			$profit = $value->netsales - $value->costprice;
			$c1 = round(sqrt(pow($q2[0] - $value->qty, 2) + pow($n2[0] - $value->netsales, 2) + pow($p2[0] - $profit, 2)), 3);
			$c2 = round(sqrt(pow($q2[1] - $value->qty, 2) + pow($n2[1] - $value->netsales, 2) + pow($p2[1] - $profit, 2)), 3);
			$min = min($c1, $c2);
			$tot_kedekatan2 += $min;
			if ($min == $c2) {
				$cluster2[] = '0';
			} else {
				$cluster2[] = '1';
			}
		}
		// echo $tot_kedekatan2;
		// echo '<br>';


		//rumus simpangan (S)
		$s = $tot_kedekatan2 - $tot_kedekatan1;


		if ($s > 0) {
			for ($i = 0; $i < sizeof($cluster1); $i++) {
				// echo $id_produk[$i];
				// echo $cluster1[$i];
				// echo '<br>';
				$status = array(
					'stat_produk' => $cluster1[$i]
				);
				$this->db->where('id_produk', $id_produk[$i]);
				$this->db->update('produk', $status);
			}
		} else {
			for ($i = 0; $i < sizeof($cluster2); $i++) {
				// echo '<br>';
				// echo $id_produk[$i];
				// echo $cluster2[$i];
				$status = array(
					'stat_produk' => $cluster2[$i]
				);
				$this->db->where('id_produk', $id_produk[$i]);
				$this->db->update('produk', $status);
			}
		}


		$data = array(
			'stat_order' => '4'
		);
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
		redirect('pelanggan/cPesananSaya/detail_pesanan/' . $id);
	}
}

/* End of file cPesananSaya.php */
