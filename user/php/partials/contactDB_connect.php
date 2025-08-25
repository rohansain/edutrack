<?php
// jab bhi koi contact form bharega or submit karega to ye file partials se run hokr database or table bna degi agar nhi bne hue hai to 
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
//Create a Database
$sql = "CREATE DATABASE IF NOT EXISTS contact_request";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if(!$result){
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}



$sql = "CREATE TABLE if not exists `contact_request`.`request_info` (`fname` VARCHAR(12) NOT NULL , `lname` VARCHAR(10) NOT NULL , `isstudent` VARCHAR(4) NOT NULL , `gmail` VARCHAR(15) NOT NULL , `mobile` BIGINT NOT NULL , `query` VARCHAR(12) NOT NULL , `query_info` VARCHAR(60) NOT NULL , `time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;";
mysqli_query($conn, $sql);
//connecting database
mysqli_select_db($conn,"contact_request");
?>