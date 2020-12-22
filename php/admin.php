<?php 
	
	require_once('db_connection.php');

	$connection = open_connection();

	function get_staistics()
	{
		global $connection;
		$query = "SELECT count(id) FROM questions";
		$qustion_number = mysqli_query($connection, $query);
		if ($qustion_number == false) {

			return "query failed may be your syntax is wrong";
		}
		$qustion_number = mysqli_fetch_row($qustion_number)[0];
		//var_dump($qustion_number);
		$query = "SELECT count(id) FROM answers";
		$answers_number = mysqli_query($connection, $query);
		if ($answers_number == false) {

			return "query failed may be your syntax is wrong";
		}
		$answers_number = mysqli_fetch_row($answers_number)[0];
		
		$query = "SELECT count(id) FROM users WHERE type=1";
		$sheikh_number = mysqli_query($connection, $query);
		if ($sheikh_number == false) {

			return "query failed may be your syntax is wrong";
		}
		$sheikh_number = mysqli_fetch_row($sheikh_number)[0];
		
		$query = "SELECT count(id) FROM users WHERE type=2";
		$users_number = mysqli_query($connection, $query);
		if ($users_number == false) {

			return "query failed may be your syntax is wrong";
		}
		$users_number = mysqli_fetch_row($users_number)[0];
		
		$query = "SELECT count(id) FROM specialize ";
		$specialize_number = mysqli_query($connection, $query);
		if ($specialize_number == false) {

			return "query failed may be your syntax is wrong";
		}
		$specialize_number = mysqli_fetch_row($specialize_number)[0];
		
		$statistics = [$qustion_number,$answers_number,$sheikh_number,$users_number,$specialize_number];
		//print_r($specializes);
		mysqli_free_result($results);
		
		
		return $statistics;
		

	}
	get_staistics();


?>