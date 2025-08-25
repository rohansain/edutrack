<!-- //this page is used to insert complete result of all the students of each class -->
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


// INSERTING FOR CLASS 1 RESULT
//connecting result_class1
mysqli_select_db($conn,"result_class1");

//first test marks
$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16001', '10', '10', '10', '09', '09', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16002', '09', '09', '10', '09', '08', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16003', '09', '07', '07', '05', '09', '37')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16004', '08', '10', '10', '05', '08', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16005', '07', '10', '08', '10', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16006', '10', '09', '09', '10', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16007', '06', '10', '07', '08', '08', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16008', '10', '08', '09', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16009', '09', '07', '06', '09', '08', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16010', '08', '06', '09', '08', '09', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16011', '10', '10', '08', '09', '09', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16012', '09', '09', '05', '09', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16013', '09', '07', '07', '05', '09', '37')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16014', '08', '10', '10', '09', '08', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16015', '07', '10', '08', '09', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16016', '10', '09', '09', '10', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16017', '09', '10', '07', '08', '08', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16018', '09', '08', '09', '09', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16019', '09', '07', '08', '09', '08', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16020', '08', '10', '09', '08', '09', '44')";
mysqli_query($conn, $sql);

//second test marks
$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16001', '10', '09', '10', '10', '10', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16002', '10', '10', '09', '09', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16003', '08', '09', '08', '08', '07', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16004', '09', '09', '08', '08', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16005', '08', '08', '09', '07', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16006', '09', '10', '07', '09', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16007', '08', '10', '07', '08', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16008', '09', '10', '08', '08', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16009', '09', '09', '09', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16010', '08', '09', '10', '07', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16011', '10', '09', '06', '10', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16012', '10', '10', '09', '10', '09', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16013', '10', '09', '08', '08', '07', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16014', '09', '09', '08', '06', '09', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16015', '10', '08', '09', '07', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16016', '09', '10', '07', '08', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16017', '08', '08', '07', '08', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16018', '09', '10', '09', '08', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16019', '09', '09', '07', '09', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16020', '08', '09', '07', '07', '10', '41')";
mysqli_query($conn, $sql);


//THIRD test marks
$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16001', '09', '10', '10', '10', '10', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16002', '09', '10', '10', '10', '10', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16003', '08', '10', '08', '09', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16004', '08', '10', '08', '09', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16005', '09', '10', '06', '09', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16006', '09', '09', '06', '08', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16007', '08', '09', '07', '06', '09', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16008', '08', '10', '07', '10', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16009', '10', '10', '08', '09', '09', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16010', '10', '10', '08', '08', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16011', '09', '09', '10', '10', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16012', '09', '08', '10', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16013', '08', '08', '08', '09', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16014', '08', '10', '10', '09', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16015', '09', '10', '10', '09', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16016', '09', '09', '09', '08', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16017', '08', '06', '07', '06', '09', '36')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16018', '08', '08', '07', '10', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16019', '10', '09', '08', '09', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16020', '10', '09', '07', '08', '10', '44')";
mysqli_query($conn, $sql);

//half yearly exam marks
$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16001', '60', '62', '50', '60', '67', '299')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16002', '59', '64', '52', '62', '64', '301')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16003', '58', '64', '52', '59', '63', '296')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16004', '58', '65', '51', '58', '62', '294')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16005', '57', '66', '54', '57', '62', '296')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16006', '55', '67', '55', '58', '61', '296')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16007', '59', '60', '56', '59', '61', '295')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16008', '52', '62', '56', '56', '60', '286')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16009', '61', '59', '57', '54', '50', '281')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16010', '63', '58', '45', '49', '65', '280')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16011', '60', '55', '50', '60', '67', '292')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16012', '59', '64', '56', '62', '64', '305')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16013', '58', '64', '52', '50', '63', '285')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16014', '58', '45', '51', '58', '62', '274')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16015', '57', '66', '54', '57', '62', '296')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16016', '55', '67', '45', '58', '61', '286')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16017', '59', '60', '56', '59', '41', '275')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16018', '52', '42', '56', '56', '60', '266')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16019', '51', '59', '57', '54', '50', '271')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16020', '53', '58', '45', '49', '65', '270')";
mysqli_query($conn, $sql);

//Annual exam marks
$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16001', '81', '90', '70', '80', '80', '401')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16002', '82', '90', '70', '75', '82', '399')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16003', '82', '91', '71', '76', '86', '406')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16004', '83', '91', '72', '78', '83', '407')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16005', '83', '92', '78', '77', '89', '419')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16006', '84', '93', '78', '80', '87', '422')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16007', '85', '93', '74', '80', '88', '420')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16008', '86', '94', '79', '89', '80', '425')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16009', '83', '94', '80', '85', '85', '427')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16010', '89', '95', '75', '70', '88', '417')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16011', '81', '90', '60', '80', '80', '391')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16012', '82', '90', '70', '65', '82', '389')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16013', '82', '81', '71', '76', '86', '396')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16014', '83', '71', '72', '78', '83', '387')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16015', '83', '92', '78', '77', '79', '409')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16016', '84', '93', '68', '80', '87', '412')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16017', '85', '93', '84', '80', '88', '430')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16018', '86', '94', '79', '79', '80', '415')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16019', '83', '84', '80', '85', '85', '417')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class1_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('16020', '89', '85', '75', '70', '88', '407')";
mysqli_query($conn, $sql);



// INSERTING FOR CLASS 2 RESULT
//connecting result_class2
mysqli_select_db($conn,"result_class2");

//first test marks
$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26001', '10', '10', '09', '10', '10', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26002', '09', '10', '08', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26003', '09', '10', '08', '10', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26004', '10', '09', '10', '08', '09', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26005', '08', '10', '07', '10', '08', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26006', '07', '09', '06', '07', '09', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26007', '10', '10', '06', '07', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26008', '08', '07', '09', '09', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26009', '10', '10', '09', '08', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26010', '06', '06', '07', '07', '07', '33')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26011', '10', '10', '06', '10', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26012', '09', '10', '07', '09', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26013', '09', '10', '08', '08', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26014', '10', '09', '07', '08', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26015', '08', '10', '07', '09', '08', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26016', '07', '09', '08', '07', '09', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26017', '10', '09', '06', '07', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26018', '08', '09', '09', '09', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26019', '10', '10', '07', '08', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26020', '06', '06', '05', '07', '07', '31')";
mysqli_query($conn, $sql);

//second test marks
$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26001', '09', '10', '08', '10', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26002', '09', '10', '07', '09', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26003', '09', '10', '06', '09', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26004', '08', '10', '05', '08', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26005', '08', '10', '06', '08', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26006', '10', '09', '07', '07', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26007', '07', '07', '08', '07', '10', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26008', '06', '08', '06', '08', '09', '37')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26009', '07', '09', '07', '09', '09', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26010', '08', '10', '08', '10', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26011', '10', '10', '08', '10', '10', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26012', '10', '10', '07', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26013', '09', '09', '06', '09', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26014', '08', '09', '05', '08', '10', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26015', '08', '09', '06', '08', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26016', '10', '09', '08', '07', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26017', '07', '08', '08', '07', '10', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26018', '06', '08', '07', '08', '09', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26019', '08', '09', '07', '09', '09', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26020', '09', '10', '08', '10', '10', '45')";
mysqli_query($conn, $sql);


//THIRD test marks
$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26001', '10', '10', '09', '10', '10', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26002', '09', '10', '09', '09', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26003', '10', '10', '08', '09', '09', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26004', '09', '10', '07', '08', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26005', '09', '10', '07', '07', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26006', '08', '09', '07', '08', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26007', '09', '09', '08', '09', '08', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26008', '08', '10', '09', '07', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26009', '08', '09', '08', '09', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26010', '06', '08', '09', '08', '07', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26011', '09', '10', '09', '10', '10', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26012', '09', '09', '09', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26013', '10', '09', '08', '09', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26014', '09', '09', '07', '08', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26015', '09', '08', '07', '07', '09', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26016', '10', '09', '07', '08', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26017', '09', '09', '06', '09', '08', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26018', '08', '10', '09', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26019', '08', '09', '07', '09', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26020', '08', '08', '09', '08', '07', '40')";
mysqli_query($conn, $sql);


//half yearly exam marks
$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26001', '60', '62', '52', '55', '65', '294')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26002', '59', '64', '52', '56', '64', '295')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26003', '58', '63', '53', '57', '65', '296')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26004', '59', '66', '45', '58', '67', '295')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26005', '57', '67', '47', '58', '68', '297')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26006', '60', '68', '49', '54', '68', '299')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26007', '61', '64', '48', '60', '65', '298')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26008', '62', '63', '49', '61', '62', '297')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26009', '59', '64', '50', '62', '61', '297')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26010', '58', '66', '55', '63', '61', '303')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26011', '50', '62', '52', '55', '65', '284')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26012', '59', '54', '52', '56', '64', '285')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26013', '58', '53', '53', '57', '65', '286')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26014', '59', '66', '45', '48', '67', '285')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26015', '57', '57', '47', '58', '68', '287')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26016', '50', '68', '49', '54', '68', '289')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26017', '51', '64', '48', '60', '65', '288')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26018', '62', '63', '49', '61', '52', '287')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26019', '59', '64', '50', '52', '61', '287')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26020', '58', '66', '55', '53', '61', '293')";
mysqli_query($conn, $sql);

//Annual exam marks
$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26001', '89', '80', '70', '80', '90', '409')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26002', '88', '80', '71', '81', '91', '411')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26003', '87', '80', '71', '82', '92', '412')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26004', '84', '81', '72', '83', '90', '410')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26005', '83', '82', '72', '84', '80', '401')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26006', '82', '82', '77', '85', '88', '414')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26007', '82', '83', '73', '85', '87', '410')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26008', '81', '83', '74', '86', '92', '416')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26009', '85', '84', '75', '87', '85', '416')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26010', '83', '84', '70', '88', '82', '407')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26011', '89', '90', '70', '80', '90', '419')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26012', '88', '85', '71', '81', '91', '416')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26013', '80', '80', '71', '82', '92', '405')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26014', '74', '81', '72', '83', '90', '400')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26015', '83', '88', '72', '84', '80', '406')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26016', '82', '82', '77', '70', '88', '399')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26017', '82', '63', '73', '85', '87', '390')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26018', '81', '83', '54', '86', '92', '396')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26019', '85', '84', '65', '87', '85', '406')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class2_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('26020', '83', '81', '70', '88', '82', '404')";
mysqli_query($conn, $sql);


// INSERTING FOR CLASS 3 RESULT
//connecting result_class3
mysqli_select_db($conn,"result_class3");

//first test marks
$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36001', '09', '10', '09', '10', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36002', '08', '09', '08', '09', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36003', '07', '08', '07', '08', '10', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36004', '06', '09', '06', '08', '09', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36005', '05', '07', '06', '06', '10', '34')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36006', '09', '09', '08', '07', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36007', '08', '09', '08', '08', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36008', '07', '10', '09', '09', '08', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36009', '06', '07', '08', '06', '09', '36')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36010', '10', '08', '06', '08', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36011', '09', '08', '09', '10', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36012', '09', '09', '08', '09', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36013', '08', '08', '07', '08', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36014', '07', '09', '06', '08', '09', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36015', '06', '07', '06', '06', '10', '36')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36016', '09', '09', '08', '08', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36017', '09', '09', '08', '08', '09', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36018', '08', '10', '09', '09', '08', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36019', '07', '07', '08', '06', '09', '35')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36020', '10', '08', '07', '08', '08', '39')";
mysqli_query($conn, $sql);


//second test marks
$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36001', '06', '08', '05', '08', '05', '32')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36002', '06', '08', '06', '09', '06', '35')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36003', '07', '09', '08', '08', '06', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36004', '08', '09', '07', '07', '09', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36005', '08', '10', '07', '08', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36006', '09', '10', '07', '06', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36007', '09', '10', '08', '09', '07', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36008', '07', '07', '08', '06', '08', '36')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36009', '10', '08', '09', '08', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36010', '09', '08', '10', '09', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36011', '07', '08', '06', '08', '05', '34')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36012', '07', '08', '06', '09', '07', '37')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36013', '09', '09', '08', '08', '06', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36014', '08', '08', '07', '10', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36015', '08', '10', '09', '08', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36016', '09', '10', '07', '08', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36017', '09', '10', '08', '09', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36018', '07', '07', '08', '08', '08', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36019', '10', '08', '09', '10', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36020', '09', '10', '10', '09', '09', '47')";
mysqli_query($conn, $sql);

//THIRD test marks
$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36001', '10', '10', '09', '09', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36002', '10', '10', '08', '09', '09', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36003', '09', '10', '07', '08', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36004', '08', '09', '06', '09', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36005', '08', '09', '08', '09', '08', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36006', '09', '08', '06', '08', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36007', '08', '09', '09', '07', '07', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36008', '07', '09', '09', '05', '10', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36009', '05', '06', '06', '04', '07', '28')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36010', '09', '07', '10', '05', '09', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36011', '08', '10', '09', '09', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36012', '08', '10', '08', '09', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36013', '09', '08', '07', '08', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36014', '08', '07', '06', '09', '08', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36015', '08', '07', '08', '09', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36016', '09', '08', '06', '08', '10', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36017', '08', '09', '07', '07', '07', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36018', '07', '09', '07', '05', '10', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36019', '07', '08', '06', '05', '07', '33')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36020', '09', '07', '07', '05', '09', '37')";
mysqli_query($conn, $sql);

//half yearly exam marks
$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36001', '52', '50', '44', '66', '67', '279')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36002', '45', '59', '45', '63', '63', '275')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36003', '46', '61', '46', '54', '65', '272')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36004', '47', '65', '47', '52', '66', '277')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36005', '49', '52', '48', '65', '69', '283')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36006', '51', '54', '49', '55', '54', '263')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36007', '52', '62', '51', '58', '54', '277')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36008', '53', '60', '50', '55', '53', '271')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36009', '56', '49', '55', '54', '52', '266')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36010', '62', '49', '44', '50', '50', '255')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36011', '57', '50', '44', '66', '67', '284')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36012', '50', '59', '45', '63', '63', '280')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36013', '46', '61', '46', '59', '65', '277')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36014', '52', '65', '47', '52', '66', '282')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36015', '54', '52', '48', '65', '69', '288')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36016', '56', '54', '49', '55', '54', '268')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36017', '57', '62', '51', '58', '54', '282')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36018', '53', '60', '50', '55', '58', '276')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36019', '56', '49', '55', '54', '57', '271')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36020', '62', '49', '44', '50', '55', '255')";
mysqli_query($conn, $sql);

//Annual exam marks
$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36001', '90', '90', '81', '80', '90', '431')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36002', '71', '80', '66', '81', '90', '387')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36003', '71', '81', '69', '67', '97', '385')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36004', '72', '87', '78', '80', '95', '412')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36005', '78', '86', '74', '87', '93', '418')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36006', '79', '85', '64', '89', '93', '410')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36007', '80', '84', '63', '91', '91', '409')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36008', '82', '82', '66', '93', '82', '405')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36009', '84', '90', '62', '95', '83', '414')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36010', '89', '92', '60', '67', '84', '392')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36011', '80', '90', '81', '80', '90', '421')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36012', '71', '75', '66', '76', '90', '377')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36013', '71', '81', '64', '67', '92', '375')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36014', '72', '87', '68', '80', '95', '402')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36015', '78', '86', '74', '77', '93', '408')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36016', '79', '75', '64', '89', '93', '400')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36017', '70', '84', '63', '91', '91', '399')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36018', '82', '72', '66', '93', '82', '395')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36019', '84', '90', '62', '85', '83', '404')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class3_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('36020', '89', '82', '60', '67', '84', '382')";
mysqli_query($conn, $sql);


// INSERTING FOR CLASS 4 RESULT
//connecting result_class4
mysqli_select_db($conn,"result_class4");

//first test marks
$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46001', '09', '10', '07', '10', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46002', '09', '09', '08', '10', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46003', '08', '10', '06', '09', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46004', '08', '09', '05', '09', '07', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46005', '06', '08', '07', '08', '06', '35')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46006', '07', '09', '08', '08', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46007', '07', '07', '07', '09', '09', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46008', '09', '10', '06', '07', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46009', '08', '10', '06', '07', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46010', '09', '10', '09', '07', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46011', '09', '10', '08', '10', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46012', '09', '09', '08', '08', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46013', '08', '08', '06', '09', '09', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46014', '08', '09', '07', '09', '07', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46015', '08', '08', '07', '08', '06', '37')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46016', '09', '09', '08', '08', '08', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46017', '09', '07', '07', '09', '09', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46018', '09', '10', '08', '07', '08', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46019', '08', '10', '08', '07', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46020', '10', '10', '09', '07', '09', '45')";
mysqli_query($conn, $sql);

//second test marks
$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46001', '09', '10', '06', '10', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46002', '09', '10', '06', '10', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46003', '09', '07', '07', '09', '09', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46004', '08', '06', '07', '08', '10', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46005', '08', '08', '08', '09', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46006', '08', '08', '09', '08', '08', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46007', '06', '08', '07', '07', '09', '37')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46008', '07', '09', '07', '09', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46009', '08', '10', '07', '10', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46010', '10', '10', '08', '09', '08', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46011', '10', '10', '06', '10', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46012', '09', '10', '08', '10', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46013', '09', '07', '07', '07', '09', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46014', '10', '08', '07', '08', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46015', '08', '08', '06', '09', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46016', '09', '10', '09', '08', '08', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46017', '10', '08', '07', '07', '09', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46018', '09', '09', '07', '09', '08', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46019', '08', '10', '07', '08', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46020', '10', '09', '08', '09', '08', '44')";
mysqli_query($conn, $sql);

//THIRD test marks
$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46001', '10', '10', '09', '10', '10', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46002', '10', '10', '09', '09', '10', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46003', '10', '09', '08', '09', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46004', '09', '10', '08', '08', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46005', '08', '10', '09', '08', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46006', '10', '10', '07', '07', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46007', '10', '10', '06', '07', '09', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46008', '09', '10', '06', '08', '08', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46009', '08', '10', '07', '09', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46010', '06', '08', '08', '07', '08', '37')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46011', '08', '10', '09', '10', '10', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46012', '08', '10', '09', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46013', '10', '09', '08', '09', '09', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46014', '09', '10', '08', '08', '07', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46015', '08', '08', '09', '08', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46016', '10', '10', '07', '07', '08', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46017', '09', '09', '06', '07', '09', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46018', '09', '08', '06', '08', '08', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46019', '08', '10', '07', '08', '09', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46020', '06', '06', '08', '07', '08', '35')";
mysqli_query($conn, $sql);


//half yearly exam marks
$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46001', '50', '64', '50', '52', '67', '283')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46002', '51', '69', '51', '53', '58', '282')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46003', '62', '68', '52', '55', '59', '296')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46004', '53', '67', '53', '67', '58', '298')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46005', '55', '68', '53', '67', '60', '303')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46006', '56', '57', '55', '66', '61', '295')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46007', '58', '58', '56', '65', '62', '298')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46008', '44', '58', '57', '60', '63', '282')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46009', '49', '49', '58', '61', '64', '281')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46010', '60', '48', '50', '62', '65', '285')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46011', '55', '64', '52', '52', '67', '290')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46012', '51', '60', '50', '53', '58', '272')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46013', '52', '68', '52', '55', '59', '286')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46014', '53', '67', '53', '67', '58', '298')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46015', '55', '68', '53', '57', '60', '293')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46016', '56', '57', '55', '56', '61', '285')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46017', '58', '58', '56', '45', '62', '278')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46018', '44', '58', '47', '60', '63', '272')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46019', '49', '49', '48', '61', '64', '271')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46020', '60', '48', '50', '62', '55', '275')";
mysqli_query($conn, $sql);

//Annual exam marks
$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46001', '73', '80', '60', '72', '76', '361')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46002', '89', '80', '69', '78', '89', '405')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46003', '87', '83', '68', '76', '76', '390')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46004', '88', '73', '64', '76', '89', '387')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46005', '91', '73', '63', '78', '67', '372')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46006', '92', '75', '66', '78', '98', '409')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46007', '83', '79', '78', '87', '78', '405')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46008', '73', '89', '78', '90', '96', '426')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46009', '83', '90', '77', '87', '87', '424')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46010', '77', '91', '80', '90', '76', '414')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46011', '73', '85', '60', '72', '76', '366')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46012', '89', '80', '69', '78', '89', '496')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46013', '77', '83', '68', '76', '76', '380')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46014', '78', '73', '64', '76', '89', '377')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46015', '81', '73', '63', '78', '67', '362')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46016', '82', '75', '66', '78', '98', '399')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46017', '73', '79', '78', '87', '78', '395')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46018', '73', '89', '78', '90', '86', '416')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46019', '83', '80', '77', '87', '87', '414')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class4_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('46020', '77', '81', '80', '90', '76', '404')";
mysqli_query($conn, $sql);



// INSERTING FOR CLASS 5 RESULT
//connecting result_class5
mysqli_select_db($conn,"result_class5");

//first test marks
$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56001', '10', '10', '08', '09', '09', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56002', '09', '10', '08', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56003', '06', '09', '07', '10', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56004', '06', '09', '06', '07', '10', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56005', '07', '09', '09', '08', '08', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56006', '08', '09', '07', '08', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56007', '05', '07', '08', '07', '07', '34')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56008', '09', '08', '07', '09', '10', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56009', '08', '09', '06', '08', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56010', '09', '09', '08', '07', '09', '42')";
mysqli_query($conn, $sql);


//second test marks
$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56001', '09', '10', '08', '09', '10', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56002', '09', '10', '07', '09', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56003', '08', '09', '07', '08', '10', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56004', '06', '09', '06', '08', '09', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56005', '05', '08', '06', '07', '08', '34')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56006', '07', '07', '08', '09', '07', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56007', '08', '10', '07', '07', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56008', '09', '10', '06', '08', '06', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56009', '10', '10', '09', '08', '06', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56010', '08', '09', '08', '09', '09', '43')";
mysqli_query($conn, $sql);


//THIRD test marks
$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56001', '10', '06', '09', '10', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56002', '10', '07', '08', '09', '10', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56003', '09', '08', '07', '08', '09', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56004', '08', '07', '10', '07', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56005', '08', '09', '08', '06', '07', '38')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56006', '09', '05', '08', '05', '08', '35')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56007', '08', '07', '09', '08', '08', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56008', '07', '04', '06', '07', '07', '31')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56009', '06', '07', '07', '08', '06', '34')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56010', '07', '10', '07', '05', '10', '39')";
mysqli_query($conn, $sql);


//half yearly exam marks
$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56001', '47', '62', '40', '50', '60', '259')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56002', '63', '60', '43', '49', '60', '275')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56003', '60', '67', '47', '55', '61', '290')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56004', '59', '62', '48', '54', '61', '284')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56005', '59', '61', '43', '53', '62', '278')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56006', '58', '63', '47', '54', '59', '281')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56007', '57', '65', '48', '58', '57', '285')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56008', '49', '66', '46', '53', '58', '272')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56009', '44', '68', '51', '52', '54', '269')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56010', '47', '64', '59', '50', '52', '272')";
mysqli_query($conn, $sql);


//Annual exam marks
$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56001', '80', '87', '70', '80', '84', '401')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56002', '80', '98', '72', '82', '85', '417')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56003', '70', '96', '71', '73', '93', '403')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56004', '78', '95', '70', '82', '94', '419')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56005', '79', '92', '73', '73', '93', '410')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56006', '82', '91', '74', '78', '94', '419')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56007', '83', '93', '75', '84', '89', '424')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56008', '93', '92', '72', '73', '88', '418')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56009', '72', '90', '67', '84', '80', '393')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class5_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `EVS`, `GK`, `TOTAL`) VALUES ('56010', '77', '82', '69', '93', '73', '394')";
mysqli_query($conn, $sql);




// INSERTING FOR CLASS 6 RESULT
//connecting result_class6
mysqli_select_db($conn,"result_class6");

//first test marks
$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66001', '10', '10', '08', '08', '09', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66002', '09', '10', '07', '07', '09', '09', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66003', '09', '09', '07', '08', '08', '09', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66004', '08', '08', '08', '08', '07', '09', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66005', '08', '07', '06', '09', '08', '08', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66006', '09', '09', '06', '10', '08', '09', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66007', '10', '09', '07', '10', '08', '08', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66008', '09', '08', '08', '10', '09', '07', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66009', '05', '06', '07', '07', '08', '06', '39')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66010', '06', '08', '07', '08', '09', '08', '46')";
mysqli_query($conn, $sql);


//second test marks
$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66001', '10', '10', '09', '09', '09', '10', '57')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66002', '09', '09', '08', '10', '09', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66003', '08', '08', '07', '09', '07', '09', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66004', '08', '08', '07', '10', '08', '07', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66005', '06', '08', '06', '10', '07', '08', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66006', '07', '09', '09', '09', '06', '10', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66007', '08', '09', '08', '09', '09', '08', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66008', '10', '07', '07', '09', '09', '10', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66009', '07', '06', '09', '08', '07', '06', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66010', '08', '08', '08', '08', '09', '08', '49')";
mysqli_query($conn, $sql);


//third test marks
$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66001', '10', '10', '10', '10', '09', '10', '59')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66002', '10', '10', '08', '09', '10', '09', '56')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66003', '09', '09', '08', '10', '08', '10', '54')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66004', '10', '08', '10', '08', '10', '10', '56')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66005', '08', '10', '06', '09', '08', '10', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66006', '07', '08', '10', '10', '09', '09', '53')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66007', '06', '07', '08', '10', '08', '08', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66008', '09', '06', '07', '09', '10', '10', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66009', '09', '09', '06', '07', '08', '10', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66010', '10', '08', '09', '08', '07', '08', '50')";
mysqli_query($conn, $sql);


//half yearly marks
$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66001', '60', '68', '63', '62', '50', '60', '363')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66002', '62', '69', '40', '60', '51', '60', '342')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66003', '63', '65', '43', '59', '52', '61', '343')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66004', '59', '66', '45', '58', '56', '62', '346')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66005', '58', '63', '53', '55', '57', '63', '349')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66006', '58', '62', '49', '54', '40', '63', '326')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66007', '57', '61', '48', '54', '49', '67', '336')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66008', '59', '60', '53', '53', '48', '67', '340')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66009', '52', '63', '56', '50', '60', '66', '347')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66010', '45', '69', '55', '59', '55', '59', '342')";
mysqli_query($conn, $sql);


//annual marks
$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66001', '90', '90', '69', '80', '89', '90', '508')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66002', '80', '92', '63', '81', '87', '92', '495')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66003', '70', '91', '64', '85', '84', '91', '485')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66004', '92', '88', '68', '86', '83', '94', '511')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66005', '94', '81', '78', '87', '85', '88', '513')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66006', '87', '87', '79', '89', '77', '89', '508')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66007', '89', '86', '73', '83', '74', '87', '492')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66008', '82', '85', '71', '85', '73', '82', '478')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66009', '81', '81', '81', '78', '63', '80', '464')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class6_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('66010', '78', '80', '85', '73', '83', '78', '550')";
mysqli_query($conn, $sql);




// INSERTING FOR CLASS 7 RESULT
//connecting result_class7
mysqli_select_db($conn,"result_class7");

//first test marks
$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76001', '06', '07', '08', '08', '09', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76002', '07', '09', '10', '09', '06', '09', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76003', '09', '09', '09', '10', '08', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76004', '08', '08', '07', '06', '08', '06', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76005', '08', '10', '06', '07', '08', '10', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76006', '09', '08', '10', '07', '10', '07', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76007', '09', '08', '06', '10', '08', '08', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76008', '09', '07', '07', '09', '08', '09', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76009', '10', '09', '09', '06', '08', '10', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76010', '06', '08', '09', '08', '06', '08', '45')";
mysqli_query($conn, $sql);


//second test marks
$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76001', '10', '10', '09', '08', '09', '10', '56')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76002', '09', '10', '07', '09', '08', '09', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76003', '08', '09', '10', '08', '08', '09', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76004', '08', '08', '08', '10', '07', '09', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76005', '07', '07', '08', '09', '10', '08', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76006', '09', '07', '06', '08', '08', '10', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76007', '06', '09', '07', '10', '08', '08', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76008', '09', '06', '08', '07', '09', '08', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76009', '09', '06', '07', '07', '07', '06', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76010', '10', '09', '07', '06', '09', '07', '48')";
mysqli_query($conn, $sql);


//third test marks
$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76001', '10', '10', '09', '07', '09', '08', '53')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76002', '10', '09', '09', '10', '09', '10', '57')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76003', '08', '08', '07', '09', '07', '07', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76004', '10', '08', '10', '10', '09', '07', '54')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76005', '06', '08', '06', '10', '07', '09', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76006', '10', '09', '10', '09', '06', '10', '54')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76007', '08', '10', '08', '09', '09', '10', '54')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76008', '09', '07', '10', '09', '10', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76009', '07', '09', '09', '10', '07', '10', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76010', '08', '07', '09', '08', '10', '08', '50')";
mysqli_query($conn, $sql);


//half yearly marks
$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76001', '60', '65', '63', '65', '66', '68', '387')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76002', '62', '61', '40', '61', '51', '60', '335')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76003', '66', '65', '58', '59', '48', '68', '364')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76004', '59', '66', '45', '48', '56', '58', '332')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76005', '58', '51', '53', '55', '50', '63', '330')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76006', '50', '62', '47', '54', '48', '49', '310')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76007', '57', '63', '67', '54', '49', '69', '359')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76008', '66', '60', '64', '68', '48', '67', '373')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76009', '52', '53', '56', '50', '54', '65', '330')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76010', '51', '69', '60', '52', '55', '58', '345')";
mysqli_query($conn, $sql);


//annual marks
$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76001', '90', '88', '68', '79', '81', '92', '498')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76002', '89', '88', '69', '78', '82', '90', '496')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76003', '88', '89', '68', '77', '83', '91', '496')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76004', '87', '90', '70', '78', '84', '94', '503')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76005', '86', '91', '71', '76', '85', '93', '502')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76006', '85', '92', '72', '75', '86', '94', '504')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76007', '84', '92', '73', '74', '87', '95', '505')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76008', '83', '93', '74', '73', '89', '90', '502')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76009', '82', '95', '77', '82', '84', '89', '509')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class7_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('76010', '81', '94', '68', '87', '83', '83', '496')";
mysqli_query($conn, $sql);




// INSERTING FOR CLASS 8 RESULT
//connecting result_class8
mysqli_select_db($conn,"result_class8");

//first test marks
$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86001', '10', '09', '09', '10', '09', '10', '57')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86002', '09', '08', '09', '09', '08', '10', '53')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86003', '09', '09', '07', '09', '07', '09', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86004', '07', '08', '08', '10', '08', '10', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86005', '06', '07', '07', '08', '09', '08', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86006', '06', '07', '06', '08', '07', '07', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86007', '09', '10', '07', '08', '10', '08', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86008', '09', '09', '09', '08', '10', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86009', '10', '10', '10', '08', '09', '09', '56')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86010', '09', '10', '07', '08', '07', '10', '51')";
mysqli_query($conn, $sql);


//second test marks
$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86001', '09', '08', '07', '08', '09', '10', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86002', '09', '10', '07', '07', '07', '06', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86003', '08', '09', '10', '09', '07', '07', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86004', '08', '08', '07', '10', '06', '07', '46')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86005', '08', '07', '07', '08', '10', '09', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86006', '05', '07', '07', '07', '09', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86007', '09', '10', '07', '09', '10', '08', '53')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86008', '09', '09', '09', '10', '10', '10', '57')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86009', '10', '08', '07', '08', '09', '09', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86010', '09', '10', '07', '08', '07', '10', '51')";
mysqli_query($conn, $sql);


//third test marks
$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86001', '07', '06', '08', '09', '08', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86002', '10', '10', '08', '10', '09', '10', '57')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86003', '08', '08', '08', '09', '10', '10', '53')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86004', '06', '06', '05', '07', '07', '10', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86005', '08', '09', '06', '10', '09', '10', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86006', '06', '07', '08', '07', '06', '07', '41')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86007', '10', '10', '08', '10', '09', '10', '57')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86008', '10', '10', '09', '09', '10', '10', '58')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86009', '08', '09', '08', '09', '07', '09', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86010', '09', '07', '08', '09', '08', '08', '49')";
mysqli_query($conn, $sql);


//half yearly marks
$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86001', '58', '60', '45', '60', '62', '62', '347')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86002', '66', '68', '50', '54', '56', '58', '352')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86003', '60', '66', '50', '61', '54', '59', '350')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86004', '64', '68', '52', '57', '58', '61', '360')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86005', '62', '67', '48', '49', '47', '50', '323')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86006', '66', '67', '60', '65', '61', '59', '378')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86007', '59', '58', '57', '56', '52', '50', '332')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86008', '52', '58', '53', '49', '49', '48', '309')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86009', '60', '61', '60', '63', '62', '63', '369')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86010', '66', '69', '53', '59', '58', '57', '362')";
mysqli_query($conn, $sql);


//annual marks
$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86001', '81', '82', '60', '80', '78', '90', '471')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86002', '87', '86', '68', '82', '79', '91', '493')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86003', '86', '89', '69', '83', '72', '92', '491')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86004', '85', '84', '72', '84', '90', '90', '505')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86005', '76', '82', '73', '82', '74', '78', '465')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86006', '79', '80', '75', '88', '77', '79', '478')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86007', '73', '84', '79', '86', '74', '83', '479')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86008', '70', '91', '73', '89', '75', '85', '483')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86009', '73', '92', '70', '84', '79', '79', '477')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class8_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('86010', '77', '94', '74', '85', '80', '94', '504')";
mysqli_query($conn, $sql);




// INSERTING FOR CLASS 9 RESULT
//connecting result_class9
mysqli_select_db($conn,"result_class9");

//first test marks
// mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96001', '09', '10', '10', '09', '10', '10', '58')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96002', '08', '09', '10', '08', '09', '10', '54')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96003', '09', '09', '10', '08', '10', '10', '56')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96004', '08', '10', '09', '10', '08', '09', '54')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96005', '07', '08', '10', '07', '10', '08', '50')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96006', '07', '07', '09', '06', '07', '09', '45')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96007', '08', '10', '10', '06', '07', '10', '51')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96008', '07', '08', '07', '09', '09', '09', '49')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96009', '08', '10', '10', '09', '08', '10', '55')";

mysqli_query($conn, $sql);
$sql = "INSERT INTO `class9_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96010', '09', '06', '06', '07', '07', '07', '42')";


//second test marks
$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96001', '10', '10', '06', '09', '10', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96002', '09', '10', '07', '08', '09', '10', '53')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96003', '09', '09', '08', '07', '08', '09', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96004', '08', '08', '07', '10', '07', '08', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96005', '07', '08', '09', '08', '06', '07', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96006', '08', '09', '05', '08', '05', '08', '43')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96007', '08', '08', '07', '09', '08', '08', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96008', '09', '07', '04', '06', '07', '07', '40')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96009', '08', '06', '07', '07', '08', '06', '42')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96010', '08', '07', '10', '07', '05', '10', '47')";
mysqli_query($conn, $sql);


//third test marks
$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96001', '09', '09', '10', '06', '10', '10', '54')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96002', '08', '09', '10', '06', '10', '09', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96003', '09', '09', '07', '07', '09', '09', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96004', '06', '08', '06', '07', '08', '10', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96005', '08', '09', '06', '08', '09', '10', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96006', '09', '10', '08', '09', '08', '08', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96007', '07', '06', '08', '07', '07', '09', '44')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96008', '07', '07', '09', '07', '09', '08', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96009', '09', '08', '10', '07', '10', '10', '54')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96010', '09', '10', '10', '08', '09', '08', '54')";
mysqli_query($conn, $sql);


//half yearly marks
$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96001', '69', '67', '65', '60', '59', '58', '378')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96002', '59', '58', '50', '59', '53', '59', '338')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96003', '66', '68', '60', '64', '60', '65', '383')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96004', '45', '46', '40', '48', '50', '49', '278')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96005', '53', '50', '52', '50', '50', '59', '314')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96006', '60', '61', '62', '63', '64', '68', '375')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96007', '60', '59', '54', '60', '58', '50', '341')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96008', '43', '44', '40', '41', '38', '50', '256')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96009', '52', '54', '59', '42', '54', '55', '316')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96010', '66', '68', '58', '60', '63', '62', '377')";
mysqli_query($conn, $sql);


//annual marks
$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96001', '90', '89', '86', '84', '80', '83', '512')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96002', '84', '80', '84', '80', '86', '90', '504')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96003', '70', '71', '72', '75', '77', '70', '435')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96004', '68', '60', '63', '70', '73', '70', '404')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96005', '82', '83', '84', '89', '82', '85', '505')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96006', '89', '98', '80', '80', '85', '87', '519')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96007', '70', '72', '71', '74', '79', '72', '438')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96008', '70', '78', '79', '82', '82', '80', '471')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96009', '88', '92', '79', '86', '84', '83', '512')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class9_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('96010', '89', '79', '68', '89', '94', '90', '509')";
mysqli_query($conn, $sql);




// INSERTING FOR CLASS 10 RESULT
//connecting result_class10
mysqli_select_db($conn,"result_class10");

//first test marks
$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106001', '10', '09', '10', '06', '10', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106002', '08', '09', '10', '06', '10', '09', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106003', '07', '09', '07', '07', '09', '09', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106004', '09', '08', '06', '07', '08', '10', '48')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106005', '09', '08', '08', '08', '09', '10', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106006', '09', '08', '08', '09', '08', '10', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106007', '08', '06', '08', '07', '07', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106008', '10', '07', '09', '07', '09', '08', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106009', '10', '08', '10', '07', '10', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_1` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106010', '09', '10', '10', '08', '09', '08', '54')";
mysqli_query($conn, $sql);


//second test marks
$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106001', '10', '09', '10', '10', '09', '10', '58')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106002', '08', '09', '10', '08', '10', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106003', '07', '08', '10', '08', '09', '09', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106004', '06', '08', '10', '08', '09', '10', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106005', '08', '09', '10', '06', '09', '09', '51')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106006', '08', '09', '09', '06', '08', '10', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106007', '08', '08', '09', '07', '06', '09', '47')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106008', '07', '08', '10', '07', '10', '10', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106009', '09', '10', '10', '08', '09', '09', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_2` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106010', '08', '10', '10', '08', '08', '10', '54')";
mysqli_query($conn, $sql);


//third test marks
$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106001', '10', '09', '10', '09', '08', '10', '56')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106002', '09', '09', '10', '08', '09', '10', '55')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106003', '09', '09', '10', '08', '10', '10', '56')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106004', '08', '10', '09', '10', '08', '09', '54')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106005', '07', '08', '10', '07', '10', '08', '50')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106006', '07', '07', '09', '06', '07', '09', '45')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106007', '09', '10', '10', '06', '07', '10', '52')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106008', '09', '08', '07', '09', '07', '09', '49')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106009', '10', '09', '10', '09', '08', '10', '56')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_3` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106010', '07', '06', '06', '07', '09', '07', '42')";
mysqli_query($conn, $sql);


//half yearly marks
$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106001', '55', '52', '58', '44', '66', '67', '342')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106002', '41', '45', '59', '49', '63', '63', '320')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106003', '49', '46', '61', '46', '54', '65', '321')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106004', '50', '47', '65', '48', '52', '66', '328')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106005', '53', '49', '51', '48', '65', '69', '335')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106006', '50', '51', '54', '49', '55', '54', '313')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106007', '47', '52', '62', '51', '59', '54', '325')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106008', '60', '53', '55', '50', '58', '53', '329')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106009', '53', '56', '49', '55', '58', '52', '323')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_4` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106010', '55', '62', '49', '53', '50', '50', '319')";
mysqli_query($conn, $sql);


//annual marks
$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106001', '87', '90', '67', '82', '87', '94', '507')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106002', '80', '92', '70', '79', '69', '92', '482')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106003', '82', '82', '72', '78', '79', '90', '483')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106004', '79', '87', '79', '72', '75', '96', '488')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106005', '76', '88', '74', '75', '83', '83', '479')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106006', '69', '79', '70', '70', '84', '88', '460')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106007', '72', '87', '72', '74', '83', '85', '473')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106008', '70', '80', '74', '70', '80', '89', '463')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106009', '86', '89', '69', '75', '88', '84', '491')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `class10_5` (`rollnumber`, `ENGLISH`, `HINDI`, `MATH`, `SCIENCE`, `SST`, `FRENCH`, `TOTAL`) VALUES ('106010', '81', '81', '68', '79', '89', '79', '477')";
mysqli_query($conn, $sql);





?>