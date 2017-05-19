<?php
	define('include', TRUE);
	include_once 'session.php';
	include_once 'db_connect.php';
	include_once 'check.php';

	if(isset($_SESSION['logged_in'])) {
		session_destroy();
		Header("Location: /index.php?logout");
	}
	else {
		Header("Location: /index.php?invalidlogout");
	}
?>