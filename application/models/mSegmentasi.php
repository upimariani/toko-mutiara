<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mSegmentasi extends CI_Model
{
	public function select($tahun)
	{
		$this->db->select('*');
		$this->db->from('analisis');
		$this->db->join('produk', 'analisis.id_produk = produk.id_produk', 'left');
		$this->db->where('thn_periode', $tahun);
		return $this->db->get()->result();
	}

	public function variabel()
	{
		return $this->db->query("SELECT nama_produk, stat_produk, produk.id_produk, SUM(qty) as qty, SUM(qty)*harga as netsales, SUM(qty)*harga_supplier as costprice  FROM `detail_transaksi` JOIN produk ON produk.id_produk = detail_transaksi.id_produk GROUP BY produk.id_produk")->result();
	}
	public function limit_asc()
	{
		return $this->db->query("SELECT produk.id_produk, SUM(qty) as qty, SUM(qty)*harga as netsales, SUM(qty)*harga_supplier as costprice  FROM `detail_transaksi` JOIN produk ON produk.id_produk = detail_transaksi.id_produk GROUP BY produk.id_produk ORDER BY produk.id_produk asc")->result();
	}
	public function limit_desc()
	{
		return $this->db->query("SELECT produk.id_produk,SUM(qty) as qty, SUM(qty)*harga as netsales, SUM(qty)*harga_supplier as costprice  FROM `detail_transaksi` JOIN produk ON produk.id_produk = detail_transaksi.id_produk GROUP BY produk.id_produk ORDER BY produk.id_produk desc")->result();
	}
	public function detail_variabel($status, $tahun)
	{
		return $this->db->query("SELECT * FROM `analisis` JOIN produk ON produk.id_produk=analisis.id_produk WHERE thn_periode='" . $tahun . "' AND status='" . $status . "'")->result();
	}

	// INSERT EXCEL
	public function insertxcell($data)
	{
		$insert = $this->db->insert_batch('analisis', $data);
		if ($insert) {
			return true;
		}
	}
}

/* End of file mSegmentasi.php */
