<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "kasir";
	
	$total = $_POST['jlh_total'];
	$id = $_POST['id'];
	
	$simpan = mysql_query("insert into total values('$id''$total')");

?>