<?php
	$servername ="localhost";
	$username ="root";;
	$password ="";
	$databasename ="utsAPI1";

	$slow = mysqli_connect($servername,$username,$pasword,$database);
	if(!$slow){
		die("tidak ada koneksi");
	}