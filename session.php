<?php
if(!defined('include')) {
	Header("Location: /index.php?nda");
	die();
}
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
?>