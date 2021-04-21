<?php
	include "slow.php";

	$id_buku = isset($_POST["id"]) ? $_POST["id"] : "";
	$nama_buku = isset($_POST["nama"]) ? $_POST["nama"] : "";
	$harga = isset($_POST["harga"]) ? $_POST["harga"] : "";
	$pengarang = isset($_POST["pengarang"]) ? $_POST["pengarang"] : "";

	$sql = "INSERT INTO 'buku' ('id_buku','nama_buku','pengarang','harga') VALUES ('".$id_buku."','".$nama_buku."', '".$pengarang."','".$harga."');";

	$query = mysqli_query($slow,$sql);
	if($query){
		$msg = "Simpan data buku berhasil";
	}else{
		$msg = "Simpan data buku berhasil";
	}


	$response * array(
		'status' =>'ok',
		'smg'=>$smg

	);

	echo json_encode($response);

?>

