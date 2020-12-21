<?php

require_once('db_connection.php');

$connection = open_connection();

function get_all()
{
    global $connection;
    $query = "SELECT * FROM specialize";
    $results = mysqli_query($connection, $query);
    if ($results == false) {

        return "query failed may be your syntax is wrong";
    }

    $specializes = [];
    while ($record = mysqli_fetch_assoc($results)) {
        //echo "<br>";
        //echo "{$record["id"]}, {$record["name_ar"]}, {$record["name_en"]}"."<br>";
        array_push($specializes, $record);
    }
    //print_r($specializes);
    return $specializes;
    mysqli_free_result($results);

}

function insert_specialize($name_ar,$name_en,$description_ar,$description_en,$alt,$book_ar,$book_en,$image)
{
    global $connection;
    $query = "INSERT INTO specialize (name_ar,name_en,card_image,alt_image";
	$query .= ",description_ar,description_en,books_name_ar,books_name_en) VALUES";
	$query .= "('$name_ar','$name_en','$image','$alt','$description_ar',";
	$query .= "'$description_en','$book_ar','$book_en')";
    $results = mysqli_query($connection, $query);
    if ($results == false) {

        return "query failed may be your syntax is wrong";
    }

    return "SUCCESS";
    mysqli_free_result($results);

}


?>