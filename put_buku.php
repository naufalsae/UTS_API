<?php

	include "slow.php";

	$id =$_GET['id'];
	$nama_buku = $_POST['nama'];

	$sql = "UPDATE 'buku' SET 'nama_buku' = '".$nama_buku."'
	WHERE 'buku','id_buku' = ".$id.";";

	$query = mysqli_query($slow, $sql);
	if($query){
		$msg = "Update data buku berhasil";
	}else{
		$msg = "Update data buku gagal";
	}

	$response = array(
	'status' =>'OK'
	'msg'=>$msg);

	echo json_encode($response);

?>