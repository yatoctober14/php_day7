<?php
	session_start();
	
	$email = $_POST['loginEmail'];
	$pass = $_POST['loginPassword'];
	
	require_once('db_connection.php');

	$connection = open_connection();
	
	$query = "SELECT * FROM users WHERE email ='$email' AND password='$pass' LIMIT 1";
	$results = mysqli_query($connection, $query);
	require_once('initialize.php');
	if(mysqli_num_rows($results) == 1)
	{
		$user = mysqli_fetch_assoc($results);
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $user["name"];
		$_SESSION['id'] = $user["id"];
		redirect_to('admin/admin.php');
	}
	else
	{
		exit("Not valid");
	}
	
	

?>