<?php 
	
	include('hitungFaktorial.php');

	$hasilFaktorial = hitungFaktorial($faktorial);
	$tanggal = date("Y-m-d H:i:s");

	function insertCSV($faktorial, $hasilFaktorial, $tanggal){
		$arr_faktorial = array(
			[$faktorial, $hasilFaktorial, "Faktorial", $tanggal]
		);

		$fp = fopen('datafaktorial.csv', 'a');

		foreach ($arr_faktorial as $fields) {
			fputcsv($fp, $fields);
		}
		fclose($fp);
		header("location:tampilanFaktorial.html?message=sukses");
	}

	insertCSV($faktorial, $hasilFaktorial, $tanggal);
?>