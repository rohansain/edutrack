<?php
// jab bhi koi contact form bharega or submit karega to ye file partials se run hokr database or table bna degi agar nhi bne hue hai to 
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// creating about database
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


//Create a Database ABOUT
$sql = "CREATE DATABASE IF NOT EXISTS about";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db about was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

$sql = "CREATE TABLE if not exists`about`.`about_info` (`desc1` VARCHAR(500) NOT NULL , `desc2` VARCHAR(500) NOT NULL , `address` VARCHAR(50) NOT NULL , `mobile` BIGINT(10) NOT NULL , `gmail` VARCHAR(25) NOT NULL , PRIMARY KEY (`gmail`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);



// CREATE DATABASE CONTACT
$sql = "CREATE DATABASE IF NOT EXISTS contact_request";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db contact_request was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

$sql = "CREATE TABLE if not exists `contact_request`.`request_info` (`fname` VARCHAR(12) NOT NULL , `lname` VARCHAR(10) NOT NULL , `isstudent` VARCHAR(4) NOT NULL , `gmail` VARCHAR(15) NOT NULL , `mobile` BIGINT NOT NULL , `query` VARCHAR(12) NOT NULL , `query_info` VARCHAR(60) NOT NULL , `time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;";
mysqli_query($conn, $sql);




//CREATE DATABASE NOTICE
$sql = "CREATE DATABASE IF NOT EXISTS notice";
$result=mysqli_query($conn, $sql);

if($result){
    echo "<BR>The db notice was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS `notice`.`notice_info` (`subject` VARCHAR(20) NOT NULL , `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `description` VARCHAR(1000) NOT NULL , `name` VARCHAR(15) NOT NULL , `designation` VARCHAR(10) NOT NULL, PRIMARY KEY (`date`) ) ENGINE = InnoDB;";
mysqli_query($conn, $sql);



//CREATE DATABASE ADDMISSION
//Create a Database
$sql = "CREATE DATABASE IF NOT EXISTS addmission";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db addmission was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//CREATING TABLE FOR CLASS 1 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request1` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 2STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request2` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 3 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request3` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 4 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request4` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 5 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request5` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 6 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request6` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 7 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request7` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 8 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request8` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 9 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request9` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 10 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `addmission`.`addmision_request10` (  `sname` VARCHAR(25) NOT NULL ,`sclass` INT NOT NULL, `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL) ENGINE = InnoDB;";
mysqli_query($conn, $sql);


// CREATE DATABASE ADMIN
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

        $sql = "select * from `admins`.`password` where `username`='admin'";
        $result=mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $num = mysqli_num_rows($result);

        // agar admin mai koi data store nhi hai to ye wala data store krva denge
        if($num == 0){
            $sql = "INSERT INTO `admins`.`password` (`sno`, `username`, `password`, `data`) VALUES ('', 'admin', 'admin', current_timestamp());";
            mysqli_query($conn, $sql);
        }



//Create a Database
$sql = "CREATE DATABASE IF NOT EXISTS roaem_database";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}




//CREATING TABLE FOR CLASS 1 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class1` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 2STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class2` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 3 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class3` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 4 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class4` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 5 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class5` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 6 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class6` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 7 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class7` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 8 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class8` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 9 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class9` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLE FOR CLASS 10 STUDENT
$sql = "CREATE TABLE IF NOT EXISTS `roaem_database`.`student_info_class10` ( `enrollment` VARCHAR(7) NOT NULL , `rollno` INT(5) NOT NULL , `sname` VARCHAR(25) NOT NULL , `smname` VARCHAR(25) NOT NULL , `sfname` VARCHAR(25) NOT NULL , `m_occupation` VARCHAR(15) NOT NULL , `f_occupation` VARCHAR(15) NOT NULL , `mobile` BIGINT(10) NOT NULL , `email` VARCHAR(25) NOT NULL , `address` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `district` VARCHAR(15) NOT NULL , `state` VARCHAR(20) NOT NULL, PRIMARY KEY (`rollno`), UNIQUE (`enrollment`)) ENGINE = InnoDB;";
mysqli_query($conn, $sql);

        // CREATING RESULT DATABASES
//Create a Database for class 1
$sql = "CREATE DATABASE IF NOT EXISTS result_class1";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 2
$sql = "CREATE DATABASE IF NOT EXISTS result_class2";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 3
$sql = "CREATE DATABASE IF NOT EXISTS result_class3";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 4
$sql = "CREATE DATABASE IF NOT EXISTS result_class4";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 5
$sql = "CREATE DATABASE IF NOT EXISTS result_class5";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 6
$sql = "CREATE DATABASE IF NOT EXISTS result_class6";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 7
$sql = "CREATE DATABASE IF NOT EXISTS result_class7";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 8
$sql = "CREATE DATABASE IF NOT EXISTS result_class8";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 9
$sql = "CREATE DATABASE IF NOT EXISTS result_class9";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//Create a Database for class 10
$sql = "CREATE DATABASE IF NOT EXISTS result_class10";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "<BR>The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}

//creating tables for different databases
//WE MAKE FORIEGN KEY SO THAT ONLY THOSE STUDENTS RESULT WILL ENTER WHO HAVE BEEN ENROLLED

//CREATING TABLES IN result_class1
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class1`.`class1_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class1`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class1`.`class1_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class1`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class1`.`class1_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class1`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class1`.`class1_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class1`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class1`.`class1_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class1`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);


//CREATING TABLES IN result_class2
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class2`.`class2_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class2`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class2`.`class2_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class2`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class2`.`class2_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class2`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class2`.`class2_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class2`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class2`.`class2_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class2`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//CREATING TABLES IN result_class3
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class3`.`class3_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class3`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class3`.`class3_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class3`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class3`.`class3_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class3`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class3`.`class3_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class3`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class3`.`class3_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class3`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);


//CREATING TABLES IN result_class4
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class4`.`class4_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class4`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class4`.`class4_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class4`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class4`.`class4_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class4`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class4`.`class4_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class4`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class4`.`class4_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class4`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);


//CREATING TABLES IN result_class5
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class5`.`class5_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class5`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class5`.`class5_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class5`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class5`.`class5_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `EVS` INT(2) NOT NULL , `GK` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class5`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class5`.`class5_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class5`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class5`.`class5_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `EVS` INT(3) NOT NULL , `GK` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class5`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);


//CREATING TABLES IN result_class6
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class6`.`class6_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class6`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class6`.`class6_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class6`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class6`.`class6_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class6`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class6`.`class6_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class6`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class6`.`class6_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL  , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class6`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);


//CREATING TABLES IN result_class7
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class7`.`class7_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class7`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class7`.`class7_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class7`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class7`.`class7_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class7`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class7`.`class7_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class7`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class7`.`class7_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL  , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class7`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);


//CREATING TABLES IN result_class8
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class8`.`class8_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class8`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class8`.`class8_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class8`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class8`.`class8_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class8`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class8`.`class8_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class8`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class8`.`class8_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL  , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class8`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);


//CREATING TABLES IN result_class9
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class9`.`class9_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class9`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class9`.`class9_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class9`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class9`.`class9_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class9`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class9`.`class9_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class9`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class9`.`class9_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL  , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class9`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);


//CREATING TABLES IN result_class10
//create table for first test
$sql = "CREATE TABLE IF NOT EXISTS `result_class10`.`class10_1` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class10`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for second test
$sql = "CREATE TABLE IF NOT EXISTS `result_class10`.`class10_2` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class10`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for third test
$sql = "CREATE TABLE IF NOT EXISTS `result_class10`.`class10_3` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(2) NOT NULL , `HINDI` INT(2) NOT NULL , `MATH` INT(2) NOT NULL , `SCIENCE` INT(2) NOT NULL , `SST` INT(2) NOT NULL , `FRENCH` INT(2) NOT NULL , `TOTAL` INT(2) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class10`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for half yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class10`.`class10_4` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class10`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);

//create table for final yearly exam
$sql = "CREATE TABLE IF NOT EXISTS `result_class10`.`class10_5` (`rollnumber` INT(5) NOT NULL , `ENGLISH` INT(3) NOT NULL , `HINDI` INT(3) NOT NULL , `MATH` INT(3) NOT NULL , `SCIENCE` INT(3) NOT NULL , `SST` INT(3) NOT NULL , `FRENCH` INT(3) NOT NULL , `TOTAL` INT(4) NOT NULL  , FOREIGN KEY (`rollnumber`) REFERENCES `roaem_database`.`student_info_class10`(`rollno`) ON DELETE RESTRICT ON UPDATE RESTRICT )ENGINE = InnoDB;";
mysqli_query($conn, $sql);




?>