<?php
    include 'partials/addmissionDB_connect.php';//isse database or table apne aap ban jayenge


if($_SERVER["REQUEST_METHOD"] == "POST"){
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
$sql ="INSERT INTO `addmision_request$FCLASS` (`sname`, `sclass`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('$FNAME', '$FCLASS', '$FMNAME', '$FFNAME', '$FMOTHEROCCUPATION', '$FFATHEROCCUPATION', ' $FMOBILE', '$FEMAIL', '$FADDRESS', '$FDOB', '$FDISTRICT', '$FSTATE');";
mysqli_query($conn, $sql);


echo "You will be notify latter";
}
