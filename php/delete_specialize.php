<?php

	$id = $_GET['id'];
	//echo $id;
	require_once("specializes.php");
	require_once("initialize.php");
	
	$result = delete_specialize($id);
	if($result == "SUCCESS")
	{
		redirect_to('admin/admin-specialize.php');
	}
	else
	{
		exit($result);
	}


?>