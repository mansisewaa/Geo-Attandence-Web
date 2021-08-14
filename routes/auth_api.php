<?php
	$conn = mysqli_connect("localhost","root","");
	$database = mssql_select_db($conn, "mydatabase");
	
	$EncodedData = file_get_contents('php://input');
	$DecodedData = json_decode($EncodedData, true);
	$user = $DecodedData["username"];
	$pass = $DecodedData["password"];
	
	$querry = "SELECT * FROM employee WHERE username = $user AND password = $pass";
	
	$count = mysqli_query($conn, $query);
	
	if(mysqli_num_rows($count) == 0) {
		$auth = 0 //user not found
	} else {
		$auth = 1 //login successfull
	}
	$response[] = array("loginsuccess" => $auth)
	echo json_encode($Response);
?>