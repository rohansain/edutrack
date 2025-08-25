<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<?php

if(isset($_POST['FSUBMIT'])){
    include 'partials/roaemDB_connect.php';
    $FENROLLMENT = $_POST['FENROLLMENT'];
    $FROLL = $_POST['FROLL'];
    $FNAME = $_POST['FNAME'];
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
    $sql ="UPDATE `student_info_class1` SET `enrollment` = '$FENROLLMENT', `rollno` = '$FROLL', `sname` = '$FNAME', `smname` = '$FMNAME', `sfname` = '$FFNAME', `m_occupation` = '$FMOTHEROCCUPATION', `f_occupation` = '$FFATHEROCCUPATION', `mobile` = '$FMOBILE', `email` = '$FEMAIL', `address` = '$FADDRESS', `dob` = '$FDOB', `district` = '$FDISTRICT', `state` = '$FSTATE' WHERE `student_info_class1`.`rollno` = 16001;";
    mysqli_query($conn, $sql);
    
    
    echo "Data has been updated";
}
else{
    echo "Try Again Letter";
}
?>
