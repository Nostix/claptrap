<?php
if(!defined('include')) {
	Header("Location: /index.php?nda");
	die();
}
$dbhost = 'localhost';
$dbuser = 'php';
$dbpass = 'php';
$dbname = 'php';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $connect )
{
  die('Could not connect: ' . mysql_error());
}
$connect
?>