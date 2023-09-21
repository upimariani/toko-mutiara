<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporanSegmentasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSegmentasi');
	}

	public function index()
	{
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/vLaporanSegmentasi');
		$this->load->view('Pemilik/Layout/footer');
	}
	public function cetak()
	{
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);
		$tahun = $this->input->post('tahun');
		$pdf->Cell(200, 40, 'LAPORAN HASIL SEGMENTASI PRODUK TAHUN ' . $tahun, 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Nama Produk', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Quantity Keluar', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Netsale', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Profit', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Hasil', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$tahun = $this->input->post('tahun');
		$data = $this->mSegmentasi->select($tahun);
		foreach ($data as $key => $value) {
			if ($value->status == '1') {
				$status = 'Tidak Laku';
			} else {
				$status = 'Laku';
			}
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->nama_produk, 1, 0);
			$pdf->Cell(30, 6, $value->qty_keluar, 1, 0);
			$pdf->Cell(30, 6, $value->netsale, 1, 0);
			$pdf->Cell(40, 6, 'Rp.' . number_format($value->profit), 1, 0);
			$pdf->Cell(30, 6, $status, 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cLaporanSegmentasi.php */
