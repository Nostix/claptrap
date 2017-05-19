<?php
	if(!defined('include')) {
		Header("Location: /index.php?nda");
		die();
	}
	$check_query = "SHOW TABLES LIKE 'users'";
	$check = mysqli_query( $connect,$check_query);
	if(!mysqli_num_rows($check)> 0) {
		Header("Location: /setup.php");
	}
	if(mysqli_fetch_row(mysqli_query( $connect,"SELECT kdnr FROM users WHERE kdnr = '1'"))[0]< 1) {
		Header("Location: /setup.php");
	}
?>