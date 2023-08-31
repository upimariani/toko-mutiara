<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPesananSaya extends CI_Model
{
	public function transaksi()
	{
		$data['deliv'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan=" . $this->session->userdata('id'))->result();
		return $data;
	}
	public function detail_transaksi($id)
	{
		$data['detail_transaksi'] = $this->db->query("SELECT * FROM transaksi JOIN detail_transaksi ON transaksi.id_transaksi = detail_transaksi.id_transaksi JOIN produk ON detail_transaksi.id_produk = produk.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk WHERE transaksi.id_transaksi='" . $id . "'")->result();
		$data['transaksi'] = $this->db->query("SELECT * FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan JOIN ongkir ON transaksi.id_ongkir = ongkir.id_ongkir WHERE transaksi.id_transaksi='" . $id . "'")->row();
		return $data;
	}
	public function status_order($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}
}

/* End of file mdetail_transaksiSaya.php */
