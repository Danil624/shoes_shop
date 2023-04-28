<?php
	$conn = new mysqli("localhost", "qwe", "232001","test");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>