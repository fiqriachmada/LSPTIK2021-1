<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Faktorial dan Perpangkatan</title>
	<link href="../../vendor/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<!--NavBar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<div class="container-fluid">
			<div class="navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="../../index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../faktorial/tampilanFaktorial.html">Faktorial</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tampilanPerpangkatan.html">Perpangkatan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--Input Faktorial-->
	<div class="container col-md-6 mt-4">
		<h1 align="center">HISTORY PERPANGKATAN</h1>
		<div class="card" align="center">
			<div class="table-responsive">
              <table class="table table-bordered" width="99%" cellspacing="0" class="display">
                <thead>
                  <tr>
                    <th><center>Input Angka</center></th>
                    <th><center>Pangkat</center></th>
                    <th><center>Hasil</center></th>
                    <th><center>Jenis Perhitungan</center></th>
                    <th><center>Tanggal Hitung</center></th>
                  </tr>
                </thead>
                <tbody align="center">
                  <?php 
                    $f = fopen("dataperpangkatan.csv", "r");
                    while(($line = fgetcsv($f)) !== false){
                      echo "<tr>";
                      foreach ($line as $cell) {
                        echo "<td>" . htmlspecialchars($cell) ."</td>";
                      }
                      echo "</tr>";
                    }
                    fclose($f)
                  ?>
                </tbody>
              </table>
            </div>
		</div>
	</div>
</body>
</html>