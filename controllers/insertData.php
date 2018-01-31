<?php 

	require_once('../models/connect.php');

	$titulo  = mysqli_real_escape_string($conn, $_REQUEST['titulo']);
	$diretor = mysqli_real_escape_string($conn, $_REQUEST['diretor']);
	$sinopse = mysqli_real_escape_string($conn, $_REQUEST['sinopse']);


	$sql = "INSERT INTO tb_movies (title, director, sinopse) VALUES ('$titulo', '$diretor', '$sinopse')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();