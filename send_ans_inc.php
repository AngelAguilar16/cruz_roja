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

	$p21 = $_POST['p21'];
	$p22 = $_POST['p22'];
	$p23 = $_POST['p23'];
	$p24 = $_POST['p24'];
	$p25 = $_POST['p25'];
	$p26 = $_POST['p26'];
	$p27 = $_POST['p27'];
	$p28 = $_POST['p28'];
	$p29 = $_POST['p29'];
	$p30 = $_POST['p30'];

	$code = $_SESSION['code'];
	
	$sql = "INSERT INTO Respuesta (preguntaID, respuesta, encuestado) VALUES
	('21' , '$p21','$code'),
	('22' , '$p22','$code'),
	('23' , '$p23','$code'),
	('24' , '$p24','$code'),
	('25' , '$p25','$code'),
	('26' , '$p26','$code'),
	('27' , '$p27','$code'),
	('28' , '$p28','$code'),
	('29' , '$p29','$code'),
	('30' , '$p30','$code')";

	if (mysqli_query($conn, $sql)) {
		echo "Datos enviados";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	header('location: enc.html');
	mysqli_close($conn);
?>