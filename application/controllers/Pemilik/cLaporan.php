<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLaporan');
	}

	public function index()
	{
		$this->load->view('Pemilik/Layout/head');
		$this->load->view('Pemilik/vLaporan');
		$this->load->view('Pemilik/Layout/footer');
	}
	public function lap_harian_transaksi()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		// $data = array(
		// 	'tanggal' => $tanggal,
		// 	'bulan' => $bulan,
		// 	'tahun' => $tahun,
		// 	'laporan' => $this->mLaporan->lap_harian_transaksi($tanggal, $bulan, $tahun)
		// );
		// $this->load->view('Pemilik/Layout/head');
		// $this->load->view('Pemilik/Laporan/LaporanTransaksi/harian', $data);
		// $this->load->view('Pemilik/Layout/footer');

		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN HASIL TRANSAKSI HARIAN', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Id Transaksi', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(60, 7, 'Produk', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Subtotal per Produk', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$data = $this->mLaporan->lap_harian_transaksi($tanggal, $bulan, $tahun);
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->id_transaksi, 1, 0);
			$pdf->Cell(30, 6, $value->tgl_transaksi, 1, 0);
			$pdf->Cell(60, 6, $value->nama_produk, 1, 0);
			$pdf->Cell(40, 6, 'Rp.' . number_format($value->harga * $value->qty), 1, 1);
		}
		$pdf->Output();
	}
	public function lap_bulanan_transaksi()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		// $data = array(
		// 	'bulan' => $bulan,
		// 	'tahun' => $tahun,
		// 	'laporan' => $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun)
		// );
		// $this->load->view('Pemilik/Layout/head');
		// $this->load->view('Pemilik/Laporan/LaporanTransaksi/bulanan', $data);
		// $this->load->view('Pemilik/Layout/footer');
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN HASIL TRANSAKSI BULANAN', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Id Transaksi', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(60, 7, 'Produk', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Subtotal per Produk', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$data =  $this->mLaporan->lap_bulanan_transaksi($bulan, $tahun);
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->id_transaksi, 1, 0);
			$pdf->Cell(30, 6, $value->tgl_transaksi, 1, 0);
			$pdf->Cell(60, 6, $value->nama_produk, 1, 0);
			$pdf->Cell(40, 6, 'Rp.' . number_format($value->harga * $value->qty), 1, 1);
		}
		$pdf->Output();
	}
	public function lap_tahunan_transaksi()
	{
		$tahun = $this->input->post('tahun');

		// $data = array(
		// 	'tahun' => $tahun,
		// 	'laporan' => $this->mLaporan->lap_tahunan_transaksi($tahun)
		// );
		// $this->load->view('Pemilik/Layout/head');
		// $this->load->view('Pemilik/Laporan/LaporanTransaksi/tahunan', $data);
		// $this->load->view('Pemilik/Layout/footer');

		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN HASIL TRANSAKSI TAHUNAN', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Id Transaksi', 1, 0, 'C');
		$pdf->Cell(30, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(60, 7, 'Produk', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Subtotal per Produk', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$data = $this->mLaporan->lap_tahunan_transaksi($tahun);
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->id_transaksi, 1, 0);
			$pdf->Cell(30, 6, $value->tgl_transaksi, 1, 0);
			$pdf->Cell(60, 6, $value->nama_produk, 1, 0);
			$pdf->Cell(40, 6, 'Rp.' . number_format($value->harga * $value->qty), 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cLaporan.php */
