<?php
	include "slow.php";
	$sql = "SELECT * FROM buku";
	$query = mysqli_query($slow,$sql);
	while($data = mysqli_fetch_array($query)){

		$sistem[] = array(
			"id_buku" =>$data["id_buku"],
			"nama_buku"=>$data["nama_buku"],
			"nama_pengarang"=>$data["pengarang"],
			"harga_buku" =>$data["harga"]
			);

	}

	$response = array(
		'status'=>'OK',
		'data'=>$item
	);

	echo json_encode($response);
?>