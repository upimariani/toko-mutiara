<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTrigerAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDummy');
	}

	public function index()
	{
		echo 'Bismillah Triger Perhitungan Tahun Sebelumnya';
		$tahun = '2020';
		$data = $this->mDummy->data($tahun);

		$data_limit1 = $this->mDummy->triger_limit1($tahun);
		foreach ($data_limit1 as $key => $value) {
			// $n[] = $value->nama_produk;
			$q1[] = $value->qty_keluar;
			$n1[] = $value->netsale;
			$p1[] = $value->profit;

			echo $value->id_produk . '|' . $value->qty_keluar . '|' . $value->netsale . '|' . $value->profit;
			echo '<br>';
		}
		echo '<hr>';
		$no = 1;
		$tot_kedekatan1 = 0;
		foreach ($data as $key => $value) {

			$c1 = round(sqrt(pow($q1[1] - $value->qty_keluar, 2) + pow($n1[1] - $value->netsale, 2) + pow($p1[1] - $value->profit, 2)), 3);
			$c2 = round(sqrt(pow($q1[0] - $value->qty_keluar, 2) + pow($n1[0] - $value->netsale, 2) + pow($p1[0] - $value->profit, 2)), 3);
			$min = min($c1, $c2);
			$tot_kedekatan1 += $min;
			if ($min == $c1) {
				$cluster1[] = '1';
			} else {
				$cluster1[] = '2';
			}
			echo 'No.' . $no++ . '| ' . $c1 . ' | ' . $c2 . ' Min : ' . $min;
			echo '<br>';
		}
		// echo $tot_kedekatan1;



		//iterasi 2
		echo '<hr>';
		$data_limit2 = $this->mDummy->triger_limit2($tahun);
		foreach ($data_limit2 as $key => $value) {
			// $n[] = $value->nama_produk;
			$q2[] = $value->qty_keluar;
			$n2[] = $value->netsale;
			$p2[] = $value->profit;

			echo $value->id_produk . '|' . $value->qty_keluar . '|' . $value->netsale . '|' . $value->profit;
			echo '<br>';
		}
		echo '<hr>';
		$no = 1;
		$tot_kedekatan2 = 0;
		foreach ($data as $key => $value) {
			$c1 = round(sqrt(pow($q2[0] - $value->qty_keluar, 2) + pow($n2[0] - $value->netsale, 2) + pow($p2[0] - $value->profit, 2)), 3);
			$c2 = round(sqrt(pow($q2[1] - $value->qty_keluar, 2) + pow($n2[1] - $value->netsale, 2) + pow($p2[1] - $value->profit, 2)), 3);
			$min = min($c1, $c2);
			$tot_kedekatan2 += $min;
			if ($min == $c2) {
				$cluster2[] = '1';
			} else {
				$cluster2[] = '2';
			}
			echo 'No.' . $no++ . '| ' . $c1 . ' | ' . $c2 . ' Min : ' . $min;
			echo '<br>';
		}
		// echo $tot_kedekatan2;
		// echo '<br>';


		//rumus simpangan (S)
		$s = $tot_kedekatan2 - $tot_kedekatan1;
		echo 's:' . $s;
		echo '<br>';

		if ($s > 0) {
			for ($i = 0; $i < sizeof($cluster1); $i++) {
				echo $cluster1[$i];
			}
		} else {
			for ($i = 0; $i < sizeof($cluster2); $i++) {
				echo $cluster2[$i];
			}
		}
	}
}

/* End of file cTrigerAnalisis.php */
