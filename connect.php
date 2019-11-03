<?php
	$host = "ec2-174-129-253-175.compute-1.amazonaws.com";
	$user = "rrfwtpwgqleirg";
	$pass = "9b48502a82909ed8418460ccc2ba71f1b8d755c012fe14ed2487a83568651431";
	$port = "5432";
	$dbname = "dc9fs5h6senu82";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
