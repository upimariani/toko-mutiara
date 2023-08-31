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
}

/* End of file mDummy.php */
