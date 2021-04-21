<?php

	include "slow.php";

	$id =$_GET['id'];

	$sql = "DELETE FROM buku  WHERE 'id_buku' = ".$id_buku.";";
	

	$query = mysqli_query($slow, $sql);
	if($query){
		$msg = "Delet data buku berhasil";
	}els
		$msg = "Delet data buku gagal";
	}

	$response = array(
	'status' =>'OK'
	'msg'=>$msg);

	echo json_encode($response);

?>