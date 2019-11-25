<?php
	session_start();
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Cruz";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
    $reg = $_POST['vivienda'];
	$ocu = $_POST['ocupacion'];
	$code = 0;
	do{
		$code = rand(0,9999999999);
		$sql = "SELECT code FROM Encuestado WHERE code='$code'";
		$r = mysqli_query($conn, $sql);
	}while(!isset($r));
	$_SESSION['code'] = $code;
	$ins = "INSERT INTO encuestado (code,region,trabajo) VALUES ('$code','$reg','$ocu')";

	if (mysqli_query($conn, $ins)) {
		echo "Datos enviados";
	} else {
		echo "Error: " . $ins . "<br>" . mysqli_error($conn);
	}
	
	header('location: enc.html');
	mysqli_close($conn);
?>