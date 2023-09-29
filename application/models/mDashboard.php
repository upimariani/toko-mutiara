<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
	public function dashboard_admin()
	{
		$data['total_penjualan'] = $this->db->query("SELECT SUM(tot_bayar) as total FROM `transaksi`")->row();
		$data['produk_laku'] = $this->db->query("SELECT COUNT(id_produk) as jml FROM `produk` WHERE stat_produk='1'")->row();
		$data['produk_tidaklaku'] = $this->db->query("SELECT COUNT(id_produk) as jml FROM `produk` WHERE stat_produk='0'")->row();
		return $data;
	}
	public function segmentasi()
	{
		return $this->db->query("SELECT * FROM `produk`")->result();
	}
	public function detail_segmentasi($status)
	{
		return $this->db->query("SELECT nama_produk, stat_produk, produk.id_produk, SUM(qty) as qty, SUM(qty)*harga as netsales, SUM(qty)*harga_supplier as costprice  FROM `detail_transaksi` JOIN produk ON produk.id_produk = detail_transaksi.id_produk WHERE stat_produk = '" . $status . "' GROUP BY produk.id_produk ")->result();
	}
}

/* End of file mDashboard.php */
