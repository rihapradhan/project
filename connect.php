<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phoneNumber = $_POST['phoneNumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','vaccine');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(firstName,lastName,phoneNumber,email,password,gender)values(?,?,?,?,?,?)"); 
		$stmt->bind_param("ssssss",$firstName,$lastName,$phoneNumber,$email,$password,$gender);
		$stmt->execute();
		echo"DOne";
		$stmt->close();
		$conn->close();
	}
?>