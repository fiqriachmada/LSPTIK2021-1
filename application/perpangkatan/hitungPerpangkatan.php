<?php

	$angka_pangkat = $_POST['angkapangkat'];
	$pangkat = $_POST['pangkat'];

	function hitungPerpangkatan($angka_pangkat, $pangkat){
		$hasil = $angka_pangkat;
		for($i = 0; $i < ($pangkat-1); $i++)
		{
			$hasil = $hasil * $angka_pangkat;
		}
		return $hasil;
	}

?>