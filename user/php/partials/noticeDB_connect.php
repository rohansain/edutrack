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
$sql = "CREATE DATABASE IF NOT EXISTS notice";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if(!$result){
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}



$sql = "CREATE TABLE IF NOT EXISTS `notice`.`notice_info` (`subject` VARCHAR(20) NOT NULL , `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `description` VARCHAR(1000) NOT NULL , `name` VARCHAR(15) NOT NULL , `designation` VARCHAR(10) NOT NULL, PRIMARY KEY (`date`) ) ENGINE = InnoDB;";
mysqli_query($conn, $sql);
//connecting database
mysqli_select_db($conn,"notice");

        $sql = "select * from notice_info";
        $result=mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $num = mysqli_num_rows($result);

        // agar about mai koi data store nhi hai to ye wala data store krva denge
        if($num == 0){
            $sql = "INSERT INTO `notice_info` (`subject`, `date`, `description`, `name`, `designation`) VALUES ('subject', current_timestamp(), 'description of the notice\r\n   COMING SOON', 'roaem', 'principal');";
            mysqli_query($conn, $sql);
        }


?>