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

	$p11 = $_POST['p11'];
	$p12 = $_POST['p12'];
	$p13 = $_POST['p13'];
	$p14 = $_POST['p14'];
	$p15 = $_POST['p15'];
	$p16 = $_POST['p16'];
	$p17 = $_POST['p17'];
	$p18 = $_POST['p18'];
	$p19 = $_POST['p19'];
	$p20 = $_POST['p20'];

	$code = $_SESSION['code'];
	
	$sql = "INSERT INTO Respuesta (preguntaID, respuesta, encuestado) VALUES
	('11' , '$p11','$code'),
	('12' , '$p12','$code'),
	('13' , '$p13','$code'),
	('14' , '$p14','$code'),
	('15' , '$p15','$code'),
	('16' , '$p16','$code'),
	('17' , '$p17','$code'),
	('18' , '$p18','$code'),
	('19' , '$p19','$code'),
	('20' , '$p20','$code')";

	if (mysqli_query($conn, $sql)) {
		echo "Datos enviados";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	header('location: enc.html');
	mysqli_close($conn);
?>