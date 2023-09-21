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
}

/* End of file mSegmentasi.php */
