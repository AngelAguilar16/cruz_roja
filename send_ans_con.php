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

	$p1 = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p4 = $_POST['p4'];
	$p5 = $_POST['p5'];
	$p6 = $_POST['p6'];
	$p7 = $_POST['p7'];
	$p8 = $_POST['p8'];
	$p9 = $_POST['p9'];
	$p10 = $_POST['p10'];

	$code = $_SESSION['code'];
	
	$sql = "INSERT INTO Respuesta (preguntaID, respuesta, encuestado) VALUES
	('1' , '$p1','$code'),
	('2' , '$p2','$code'),
	('3' , '$p3','$code'),
	('4' , '$p4','$code'),
	('5' , '$p5','$code'),
	('6' , '$p6','$code'),
	('7' , '$p7','$code'),
	('8' , '$p8','$code'),
	('9' , '$p9','$code'),
	('10' , '$p10','$code')";

	if (mysqli_query($conn, $sql)) {
		echo "Datos enviados";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	header('location: enc.html');
	mysqli_close($conn);
?>