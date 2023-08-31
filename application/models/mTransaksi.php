<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
	public function transaksi()
	{
		$data['pesanan_masuk'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE stat_order='0'")->result();
		$data['konfirmasi'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE stat_order='1'")->result();
		$data['diproses'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE stat_order='2'")->result();
		$data['dikirim'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE stat_order='3'")->result();
		$data['selesai'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan WHERE stat_order='4'")->result();
		return $data;
	}
	public function detail_pesanan($id)
	{
		$data['pesanan'] = $this->db->query("SELECT * FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi=transaksi.id_transaksi JOIN produk ON detail_transaksi.id_produk=produk.id_produk LEFT JOIN diskon ON diskon.id_produk=produk.id_produk WHERE transaksi.id_transaksi='" . $id . "';")->result();
		$data['transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan JOIN ongkir ON ongkir.id_ongkir = transaksi.id_ongkir WHERE transaksi.id_transaksi='" . $id . "';")->row();
		return $data;
	}
	public function update_status($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}
}

/* End of file mTransaksi.php */
