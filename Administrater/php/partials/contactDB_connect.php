<?php
// jab bhi koi contact form bharega or submit karega to ye file partials se run hokr database or table bna degi agar nhi bne hue hai to 
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_request";
// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
?>