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
$sql = "CREATE DATABASE IF NOT EXISTS about";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if(!$result){
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}


$sql = "CREATE TABLE if not exists`about`.`about_info` (`desc1` VARCHAR(500) NOT NULL , `desc2` VARCHAR(500) NOT NULL , `address` VARCHAR(50) NOT NULL , `mobile` BIGINT(10) NOT NULL , `gmail` VARCHAR(25) NOT NULL , PRIMARY KEY (`gmail`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);
//connecting database
mysqli_select_db($conn,"about");

        $sql = "select * from about_info";
        $result=mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $num = mysqli_num_rows($result);

        // agar about mai koi data store nhi hai to ye wala data store krva denge
        if($num == 0){
            $sql = "INSERT INTO `about_info` (`desc1`, `desc2`, `address`, `mobile`, `gmail`) VALUES ('Roaem Public school is one of the best-equipped schools in India with facilities that support excellence in all areas. It is professionally managed educational institute dedicated to excellence. Here we are using innovative research based child centric teaching pedagogies and latest learning technologies. Innovation in education helps the students to explore, to generate interest and be inspired.', 'The infrastructure has been suitably planned to accommodate learning and an all-round development of the child. The School provides the best possible education to its students. The main objective is to ensure that the youthful energies of all students are channelized towards a holistic development. It aims to develop qualities like integrity, honesty, trust, tolerance and compassion and strives to promote a spirit of enquiry, to foster a scientific temper within the bonds of humanism. ', 'Jaipur, Rajasthan, India', '9887654987', 'roaempublicschool@gmail.com')";
            mysqli_query($conn, $sql);
        }


?>