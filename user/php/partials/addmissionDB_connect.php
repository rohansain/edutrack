<!-- This page will create database and tables structure for those student information who are requesting for addmission -->
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
//Create a Database
$sql = "CREATE DATABASE IF NOT EXISTS addmission";
$result=mysqli_query($conn, $sql);

// Check for the database creation success
if(!$result){
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


//connecting database
mysqli_select_db($conn,"addmission");

?>