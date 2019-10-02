<?php 


	$angka=$_POST['angka'];

	$array_angka= array_map('intval',str_split($angka));
	$panjang = count($array_angka);
	echo "angka yang dimasukan adalah : ". $angka ."<br>";
	echo "jumlah elemen =" . $panjang ."<br>";

	$myfile = fopen("output.txt", "w")
		or die("unable to open file ");

	for ($j=0; $j <10 ; $j++) { 
		$jumlah = 0;
		$data[$j]=0;

		for ($i=0; $i <$panjang ; $i++) { 
		 $eksekusi = $array_angka[$i];
		 if ($eksekusi==$j) {
		 	$jumlah++;
		 }
		 $data[$j]=$jumlah;

		}
		if ($data[$j]!=0) {

			$myoutput= "jumlah angka " . $j ."adala " . $data[$j] . "\n";
			fwrite($myfile, $myoutput);
			echo "jumlah angka " . $j ."adala " . $data[$j] . "<br>";
		}
	}
	fclose($myfile)
 ?>