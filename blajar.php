<?php 
	$makanan = "kacang"

	if ($makanan) {
		echo "aku mau makan $makanan";
	}
	else {
		echo "aku mau makan buras";
	}
	foreach ($makanan as $key => $value) {
		echo $key;
	}

	$ikan = array( "sapu-sapu","paus","hiu");
		echo $ikan[1];

 ?>