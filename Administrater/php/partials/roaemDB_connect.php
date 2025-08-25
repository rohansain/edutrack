<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "roaem_database";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    die("can't connect to server");
}
?>