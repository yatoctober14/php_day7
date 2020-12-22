<?php 

	session_start();
    session_destroy();
	require_once('initialize.php');
	redirect_to('admin/admin.php');
?>