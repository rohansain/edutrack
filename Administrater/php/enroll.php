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

if($_POST['FSUBMIT'] == 'submit'){
    $FENROLLMENT = $_POST['FENROLLMENT'];
    $FROLL = $_POST['FROLL'];
    $FNAME = $_POST['FNAME'];
    $FCLASS = $_POST['FCLASS'];
    $FMNAME = $_POST['FMNAME'];
    $FFNAME = $_POST['FFNAME'];
    $FMOTHEROCCUPATION = $_POST['FMOTHEROCCUPATION'];
    $FFATHEROCCUPATION = $_POST['FFATHEROCCUPATION'];
    $FMOBILE = $_POST['FMOBILE'];
    $FEMAIL = $_POST['FEMAIL'];
    $FADDRESS = $_POST['FADDRESS'];
    $FDOB = $_POST['FDOB'];
    $FDISTRICT = $_POST['FDISTRICT'];
    $FSTATE = $_POST['FSTATE'];
    
    // inserting data into student_info_class1 table
$sql ="INSERT INTO `student_info_class$FCLASS` (`enrollment`, `rollno`, `sname`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('$FENROLLMENT', '$FROLL','$FNAME', '$FMNAME', '$FFNAME', '$FMOTHEROCCUPATION', '$FFATHEROCCUPATION', ' $FMOBILE', '$FEMAIL', '$FADDRESS', '$FDOB', '$FDISTRICT', '$FSTATE');";
$error=0;
try{
mysqli_query($conn, $sql);
}
catch(Exception $e){
    echo $e->getMessage();
    $error=1;
}
if($error==0)
echo "Data has been recorded";
}
else{
    echo "Try Again Letter";
}


?>