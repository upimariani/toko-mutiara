<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSegmentasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSegmentasi');
	}
	public function pertama()
	{
		$tahun = '2020';
		$data = array(
			'segmentasi' => $this->mSegmentasi->select($tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vSegmentasiPertama', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function detail_pertama($status)
	{
		$tahun = '2020';
		$data = array(
			'detail_segmentasi' => $this->mSegmentasi->detail_variabel($status, $tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vDetailSegmentasiPertama', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function kedua()
	{
		$tahun = '2021';
		$data = array(
			'segmentasi' => $this->mSegmentasi->select($tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vSegmentasiKedua', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function detail_kedua($status)
	{
		$tahun = '2021';
		$data = array(
			'detail_segmentasi' => $this->mSegmentasi->detail_variabel($status, $tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vDetailSegmentasiKedua', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function ketiga()
	{
		$tahun = '2022';
		$data = array(
			'segmentasi' => $this->mSegmentasi->select($tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vSegmentasiKetiga', $data);
		$this->load->view('Admin/Layout/footer');
	}
	public function detail_ketiga($status)
	{
		$tahun = '2022';
		$data = array(
			'detail_segmentasi' => $this->mSegmentasi->detail_variabel($status, $tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vDetailSegmentasiKetiga', $data);
		$this->load->view('Admin/Layout/footer');
	}
}

/* End of file cSegementasi.php */
