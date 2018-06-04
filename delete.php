<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "kasir";
	
	$kode = $_POST['kd'];
	
	$hapus = mysql_query("delete from barang where kd_brg = '".$kode."'");

?>

<script type="text/javascript">
	alert("Terhapus");
	document.location.href = "index.php";
</script>