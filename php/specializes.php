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


?>