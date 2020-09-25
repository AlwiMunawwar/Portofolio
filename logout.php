<?php 
	session_start();
	session_destroy();
	echo "<script type='text/javascript'>alert('Logout Succes..!'); location.href=\"login.php\";</script>";
 ?>