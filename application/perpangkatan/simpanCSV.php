<?php 
	
	include('hitungPerpangkatan.php');

	$hasilPerpangkatan = hitungPerpangkatan($angka_pangkat, $pangkat);
	$tanggal = date("Y-m-d H:i:s");

	function insertCSV($angka_pangkat, $pangkat, $hasilPerpangkatan, $tanggal){
		$arr_pangkat = array(
			[$angka_pangkat, $pangkat, $hasilPerpangkatan, "Perpangkatan", $tanggal]
		);

		$fp = fopen('dataperpangkatan.csv', 'a');

		foreach ($arr_pangkat as $fields) {
			fputcsv($fp, $fields);
		}
		fclose($fp);
		header("location:tampilanPerpangkatan.html?message=sukses");
	}

	insertCSV($angka_pangkat, $pangkat, $hasilPerpangkatan, $tanggal);
?>