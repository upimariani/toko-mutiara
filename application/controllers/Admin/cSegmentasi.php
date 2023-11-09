<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSegmentasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSegmentasi');
		$this->load->library(array('excel', 'session'));
	}

	public function import_excel()
	{
		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach ($object->getWorksheetIterator() as $worksheet) {
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for ($row = 2; $row <= $highestRow; $row++) {

					$id_produk = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$thn_periode = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$qty_keluar = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$netsale = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$profit = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$hasil = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$status = $worksheet->getCellByColumnAndRow(7, $row)->getValue();

					$temp_data[] = array(
						'id_produk' => $id_produk,
						'thn_periode' => $thn_periode,
						'qty_keluar' => $qty_keluar,
						'netsale' => $netsale,
						'profit' => $profit,
						'hasil' => $hasil,
						'status' => $status,
					);
				}
			}
			$this->load->model('mSegmentasi');
			$insert = $this->mSegmentasi->insertxcell($temp_data);
			if ($insert) {
				$this->session->set_flashdata('success', 'Data Berhasil di Import ke Database');
				redirect('Admin/cSegmentasi/pertama');
				// redirect($_SERVER['HTTP_REFERER']);
			} else {
				$this->session->set_flashdata('success', 'Terjadi Kesalahan');
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			echo "Tidak ada file yang masuk";
		}
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
	public function data_pertama()
	{
		$tahun = '2020';
		$data = array(
			'segmentasi' => $this->mSegmentasi->select($tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vPertama', $data);
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
	//------------------------------------------------------------------------------
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
	public function data_kedua()
	{
		$tahun = '2021';
		$data = array(
			'segmentasi' => $this->mSegmentasi->select($tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vKedua', $data);
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

	//------------------------------------------------------------------------------
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
	public function data_ketiga()
	{
		$tahun = '2022';
		$data = array(
			'segmentasi' => $this->mSegmentasi->select($tahun)
		);
		$this->load->view('Admin/Layout/head');
		$this->load->view('Admin/Segmentasi/vKetiga', $data);
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
