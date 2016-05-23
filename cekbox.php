<?php
	if(isset($_POST['kirim'])){
		include "koneksi/koneksi.php";
		$pilihan = implode(',',$_POST['angka']);
		$kueri = $con->query("UPDATE checkbox SET checkbox='$pilihan'");
		echo "<script>location.href='index.php';</script>";
	} else {
		echo "tidak ada yang terjadi";
		echo "<script>location.href='index.php';</script>";
	}
?>