<?php
if(!defined('include')) {
	Header("Location: /index.php?nda");
	die();
}
if(!isset($_SESSION['logged_in']))
	{
		die('You must be logged in to view this page.');
	}
if(isset($_SESSION['current_admin'])) {
	if($_SESSION['current_admin']==1) {
		echo '<div class="alert alert-success" role="alert"><strong>WOW!</strong> You are now logged in as <strong>Admin</strong>.</div>';
		echo '<h4>Here are all registered users:</h4><br>';
		echo "<table class='table'>";
		echo "<tr><th>Bentzer ID</th><th>Kundennummer</th><th>Adresse</th><th>Ticket</th><th>Anzahl</th><th>Bestellstatus</th><th>Admin</th></tr>";

		$all_users = $connect->prepare("SELECT * FROM users");
		$all_users->execute();
		$result = $all_users->get_result();

		while($row = mysqli_fetch_array($result)) {
			$id = $row[0];
			$kdnr = $row[1];
			$pw = $row[2];
			$email = $row[3];
			$adress = $row[4].' '.$row[5].' '.$row[7].' '.$row[6];
			$ticket = $row[8];
			$amount = $row[9];
			$shipping = $row[10];
			if($row[11]=='1') {
				$ad = 'yes';
			}
			else {
				$ad = 'no';
			}
			echo "<tr><td>".$id."</td><td>".$kdnr."</td><td>".$adress."</td><td>".$ticket."</td><td>".$amount."</td><td>".$shipping."</td><td>".$ad."</td></tr>";
		} 

		echo "</table><br>";
		echo mysqli_fetch_array($result);

	}
	else {
		$current_kndr = $_SESSION['kdnr'];
		$order = $connect->prepare("SELECT * FROM users WHERE kdnr ='$current_kndr'");
		$order->execute();
		$result = $order->get_result();
		$row = mysqli_fetch_array($result);

		$kdnr = $row[1];
		$email = $row[3];
		$adress = $row[4].' '.$row[5].' '.$row[7].' '.$row[6];
		$ticket = $row[8];
		$amount = $row[9];
		$shipping = $row[10];

		echo '<div class="alert alert-success" role="alert"><strong>WOW!</strong> You are now logged in.</div><br><br>';
		echo "
		<h4>Ihr Bestellstatus:</h4><br>
		<table class='table'>
			<tr>
				<th>Kundennummer</th>
				<th>Adresse</th>
				<th>Ticket</th>
				<th>Anzahl</th>
				<th>Bestellstatus</th>
			</tr>
			<tr>
				<td>".$kdnr."</td>
				<td>".$adress."</td>
				<td>".$ticket."</td>
				<td>".$amount."</td>
				<td>".$shipping."</td>
			</tr>
		</table>
		<br>
			";
	}
}
else {
	echo '<div class="alert alert-alert" role="alert"><strong>CAUTION!</strong> You are logged in but your id could not be retrieved.</div><br><br>';
}

?>