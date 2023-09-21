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
}

/* End of file mDashboard.php */
