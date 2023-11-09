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
		$pdf->Cell(200, 10, 'TOKO MUTIARA 99', 0, 1, 'C');
		$pdf->Cell(200, 10, 'LAPORAN ANALISIS SEGMENTASI BARANG', 0, 1, 'C');
		$pdf->Cell(200, 10, 'PADA DATA PENJUALAN', 0, 0, 'C');
		$pdf->SetLineWidth(1);
		$pdf->Line(20, 45, 190, 45);
		$pdf->SetLineWidth(0);
		$pdf->Line(20, 46, 190, 46);

		$pdf->SetLineWidth(0);

		$pdf->Cell(10, 20, '', 0, 1);
		$pdf->Cell(200, 8, 'PERIODE PENJUALAN TAHUN ' . $tahun, 0, 1, 'C');
		$pdf->SetFont('Times', '', 12);
		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->MultiCell(180, 5, 'Pada data penjualan pada periode tahun ' . $tahun . ', telah dilakukan perkategori barang di toko mutiara 99 pada penjualan dengan perincian hasil sebagai berikut:', 0);
		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->MultiCell(180, 5, 'a. Laporan jumlah pengkategorian data penjualan terhadap barang tidak laku dan laku. Barang Tidak Laku diharapkan disetujui dilakukan potongan harga (Disesuaikan dengan kondisi barang) agar barang tidak menumpuk dan dibeli pelanggan.', 0);

		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->MultiCell(180, 5, 'b. Barang Tidak Laku', 0);

		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 5, '', 0, 1);
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
		}
		$pdf->SetFont('Times', '', 12);
		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->MultiCell(180, 5, 'c. Barang Laku', 0);

		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 5, '', 0, 1);
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
			if ($value->status == '2') {

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
		}
		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 12);
		$pdf->MultiCell(180, 5, 'Berdasarkan data yang telah diolah, diharapkan dapat menjadi pertimbangan untuk kelangsungan proses penjualan kedepan dan pengadaan barang kedepannya', 0);

		$pdf->Output();
	}
}

/* End of file cLaporanSegmentasi.php */
