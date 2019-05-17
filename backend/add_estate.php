<?php
/*      Name: add estate
*       Author: Mario Gomez
*       Description:
*This file records a new estate to the database system,
*It does primarily 3 actions:
*Generate a unique Id for the estate,
*Record estate to list of estates,
*Makes an estate table for the new estate.
*/


$name = $_GET['estate_name'];
$location = $_GET['estate_location'];
$property_id =  unique_code(10);
$total_units = $_GET['number_of_plots'];
// $var = $_POST[''];
// $var = $_POST[''];

include "connection/uplink.php";

// Adding estate to the list of estates
$sql = "INSERT INTO `all_estates` (`name`, `location`, `property_id`, `total_units`, `available_units`) 
VALUES ('$name', '$location', '$property_id', '$total_units', '$total_units');"; // ORDER BY orderid DESC LIMIT 20"; 
$query = new connector("estate_properties","root","");
$query->setSql($sql);

if ($query->runQueryBoolean()) {
// add a table for the specific estate
    $sql = "CREATE TABLE `estate_properties`.`$property_id` ( `plot_Id` INT NOT NULL AUTO_INCREMENT ,
    `property_Id` INT(7) NOT NULL , `plot_Number` INT(5) NOT NULL ,
    `estate_Id` INT(7) NOT NULL , `plot_Status` BOOLEAN NOT NULL , `plot_Buyer` 
   TEXT NOT NULL , PRIMARY KEY (`plot_Id`)) ENGINE = InnoDB;
   ";
    $query->setSql($sql);
    if ($query->runQueryBoolean()) {
        echo "200";
        
    } else{
        echo 401;
    }
} else {
    echo "401s";
}

function unique_code($limit)
{
  return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}


// TODO
/*
*fix post
*Add db Name
*Correct Db values
*/
