<?php
    define('include', TRUE);
    include_once 'session.php';
    include_once 'db_connect.php';
		$check_query = "SHOW TABLES LIKE 'users'";
		$check = mysqli_query( $connect,$check_query);
		if(mysqli_num_rows($check)> 0) {
			if(mysqli_fetch_row(mysqli_query( $connect,"SELECT kdnr FROM users WHERE kdnr = '1'"))[0]>=1) {
				Header("Location: /index.php");
				die();
			}
		}
		
    $query = "CREATE TABLE IF NOT EXISTS users (
        id Integer,
        kdnr Integer,
        pw CHAR(60),
        name VARCHAR(100),#
        lastname VARCHAR(100),
        email VARCHAR(100),
        adress VARCHAR(100),
        adressnumber VARCHAR(100),
        city VARCHAR(100),
        zipcode Integer,
        ticket VARCHAR(100),
        amount Integer,
        shipping VARCHAR(100),
        admin Integer
        )";
        mysqli_query( $connect, $query);

        $admin_password = 'admin';
        $admin_encrypt = password_hash($admin_password, PASSWORD_BCRYPT);

        $admin_query = $connect->prepare("INSERT INTO users (id, kdnr, pw, admin)
        VALUES ('1', '1', '{$admin_encrypt}', '1')");
        $admin_query->execute();

        $_SESSION['setupdone'] = 'true';
        Header("Location: /index.php");
?>