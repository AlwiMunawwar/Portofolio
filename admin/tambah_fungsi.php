<?php 
 include "../koneksi.php";
 if (isset($_POST['tambah'])) {
 		$insertSql = mysqli_query($conf, "INSERT into mhs (nm_mhs, npm, jk, id_kelas, email) values('$_POST[nm_mhs]','$_POST[npm]','$_POST[jk]','$_POST[id_kelas]','$_POST[email]')");
 		if ($insertSql) {
 			echo "<script type='text/javascript'>alert('Data berhasil disimpan...!'); location.href=\"home.php\";</script>";
 		}
 	}	
 ?>