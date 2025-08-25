<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
//Create a Database
$sql = "CREATE DATABASE IF NOT EXISTS admins";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

$sql = "CREATE TABLE if not exists`admins`.`password` (`sno` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(12) NOT NULL , `password` VARCHAR(15) NOT NULL , `data` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`), UNIQUE (`username`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

mysqli_select_db($conn,"admins");

$sql = "INSERT INTO `password` (`sno`, `username`, `password`, `data`) VALUES ('1', 'r', 'r1', current_timestamp());";
mysqli_query($conn, $sql);
?>