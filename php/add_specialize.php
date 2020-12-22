<?php 
	require_once('initialize.php');
	
	$name_ar = $_POST['name_ar'];
	$name_en = $_POST['name_en'];
	$description_ar = $_POST['description_ar'];
	$description_en = $_POST['description_en'];
	$alt = $_POST['image_alt'];
	$book_ar = $_POST['booke_ar'];
	$book_en = $_POST['book_en'];
	
	$image = $_FILES['image'];
	if(!empty($image["name"]))
	{
		$image_path = "images/";
		$image_name= strtotime(1). basename($image["name"]);
		$target_file = "../public/images/".$image_name;
		
		if (!move_uploaded_file($image["tmp_name"], $target_file)) 
		{
			return ( "Sorry, there was an error uploading your file.");
		}
		$image = $image_path.$image_name;		
	}
	else
	{
		$error_image ="image is required";
		redirect_to	('admin/admin-specialize.php');
		return;
	}

	//echo $name_ar,$name_en,$description_ar,$description_en,$alt,$book_ar,$book_en."<br	>";
	//var_dump($image);
	
	require_once('specializes.php');
	$result = insert_specialize($name_ar,$name_en,$description_ar,$description_en,$alt,$book_ar,$book_en,$image);
	if($result == "SUCCESS")
	{
		$success="aaaaa";
		redirect_to	('admin/admin-specialize.php');
	}
	else
	{
		exit($result);
	}
	
	

?>