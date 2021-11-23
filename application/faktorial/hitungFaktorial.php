<?php

	$faktorial = $_POST['angka'];

	function hitungFaktorial($faktorial){
		if($faktorial == 1){
			return 1;
		}else{
			return($faktorial*hitungFaktorial($faktorial-1));
		}
	}

?>