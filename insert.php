<?php

	//Database Information here
	$servername= "localhost";
	$username= "root";
	$password= "";
	$dbname = "september";
	
	//Create DB connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	
	//Create variables for each piece of information to be added to DB table
	$title = $_POST["title"];
	$genre = $_POST["genre"];
	$rating = $_POST["rating"];
	
	//Create SQL String
	$sql = "INSERT INTO movie (title,genre,rating) VALUES ('$title','$genre','$rating')";
	
	//Send query, and ensure no errors
	if($conn->query($sql) === TRUE){
		echo "New record created successfully";
	}else {
		"Error: " . $sql . "<br>" . $conn->error;
	}
	
	//Close DB connection
	$conn->close();
?>