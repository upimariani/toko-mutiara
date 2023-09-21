<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDummy extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('data_dummy');
		return $this->db->get()->result();
	}
	public function limit1()
	{
		$this->db->select('*');
		$this->db->from('data_dummy');
		$this->db->order_by('id_dummy', 'desc');
		$this->db->limit(2);
		return $this->db->get()->result();
	}
	public function limit2()
	{
		$this->db->select('*');
		$this->db->from('data_dummy');
		$this->db->order_by('id_dummy', 'acs');
		$this->db->limit(2);
		return $this->db->get()->result();
	}

	//analisis triger
	public function data($tahun)
	{
		return $this->db->query("SELECT * FROM `analisis` WHERE thn_periode='" . $tahun . "'")->result();
	}
	public function triger_limit1($tahun)
	{
		$this->db->select('*');
		$this->db->from('analisis');
		$this->db->where('thn_periode', $tahun);
		$this->db->order_by('id_analisis', 'desc');
		$this->db->limit(2);
		return $this->db->get()->result();
	}
	public function triger_limit2($tahun)
	{
		$this->db->select('*');
		$this->db->from('analisis');
		$this->db->where('thn_periode', $tahun);
		$this->db->order_by('id_analisis', 'asc');
		$this->db->limit(2);
		return $this->db->get()->result();
	}
}

/* End of file mDummy.php */
