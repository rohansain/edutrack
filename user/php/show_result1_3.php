<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("can't connect to server");
}

$srollnumber = $_POST['rollnumber'];
$sclass = $_POST['sclass'];
$sdob = $_POST['sdob'];

// echo $srollnumber.$sclass.$sdob;


  
//connecting database for student information
mysqli_select_db($conn,"roaem_database");


$sql= "select * from student_info_class$sclass where rollno = ".$srollnumber;
$D1result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D1result);

if($num != 0){
$D1row = mysqli_fetch_assoc($D1result);
$D1rollno = $D1row['rollno'];
$D1dob = $D1row['dob'];
$D1enrollment = $D1row['enrollment'];
$D1sname = $D1row['sname'];
$D1smname = $D1row['smname'];
$D1sfname = $D1row['sfname'];
$D1add= $D1row['address'];
}

mysqli_select_db($conn,"result_class$sclass");

//getting THIRD TEST marks of the student to get user personal data
$temp = "class".$sclass."_3";
$sql= "select * from $temp where rollnumber = ".$srollnumber;
$D2_3result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_3result);

if($num != 0){
    $D2_3row = mysqli_fetch_assoc($D2_3result);
    $D2_3english = $D2_3row['ENGLISH'];
    $D2_3hindi = $D2_3row['HINDI'];
    $D2_3math = $D2_3row['MATH'];
    $D2_3evs = $D2_3row['EVS'];
    $D2_3gk = $D2_3row['GK'];
    $D2_3total = $D2_3row['TOTAL'];
}

//agar user ki dob roaem_databse mai hui or rollnumber bhi hua and result bhi store hua to hum data print karenge
if($D1dob == $sdob  &&  $D1rollno == $srollnumber  &&  $num != 0){
    echo "
    <!DOCTYPE html>
<html lang='en'>

<head>
    <title>3rd UNIT Result</title>
    
<link rel='stylesheet' href='../css/result/Display_1st_result_1to5css.css'>

</head>

<body>
    <div class='container'>
        <div class='header' id='heading1'>
            <img src='../photo/roaem_logo.png' name='1_IMAGE' class='img'>
        </div>
        <div class='header' id='heading2'>
            <h2 name='_SCHOOLNAME'>ROAEM PUBLIC SCHOOL</h2>
        </div>
        <div class='' id='heading3'>
            <h4 name='1_MOBILE'>+91 9123479110</h4>
            <h4 name='1_GMAIL'>roaempublicschool@Gmail.com</h4>
        </div>
    </div>


    <div class='SecondRow' id=''>
        <h3 name='1_ANNUAL_WORD'>3RD UNIT RESULT</h3>
    </div>

    <div class='container'>
        <div class='ThirdRow' id=''>
            <h4 name='1_ENROLLMENTNO'>Enrollment no.:$D1enrollment</h4>
        </div>
        <div class='ThirdRow' id=''>
            <h4 name='1_CLASS'>Class:$sclass</h4>
        </div>
        <div class='ThirdRow' id=''>
            <h4 name='1_ROLLNO'>Roll No.:$D1rollno</h4>
        </div>
    </div>

    
    <div class='foucontainer'>
    <div class='FourthRow'>
        <h4 name='1_STUDENTNAME_WORD'>Student's Name:$D1sname</h4>
        <h4 name='1_DATEOFBIRTH_WORD'>Date Of Birth :$D1dob </h4>
    </div>
    </div>

    <div class='FifthRow'>
        <table>
            <tr>
                <th name='1_SUBJECT' rowspan='2'>Subject</th>
                <th name='1_1STUNIT' colspan='2'>1st Unit</th>
            </tr>
            <tr>
                <th name='1_MARKSOBT_1'>Marks Obt.</th>
                <th name='1_MAXMARKS_1'>Max. Marks</th>
            </tr>
            <tr>
                <th name='1_HINDI'>Hindi</th>
                <td name='1_HINDI_OBT_1ST'>$D2_3hindi</td>
                <td name='1_HINDI_MAX_1ST'>10</td>

            </tr>
            <tr>
                <th name='1_ENGLISH'>English</th>
                <td name='1_ENGLISH_OBT_1ST'>$D2_3english</td>
                <td name='1_ENGLISH_MAX_1ST'>10</td>

            </tr>
            <tr>
                <th name='1_MATHS'>Maths</th>
                <td name='1_MATHS_OBT_1ST'>$D2_3math</td>
                <td name='1_MATHS_MAX_1ST'>10</td>

            </tr>
            <tr>
                <th name='1_EVS'>EVS</th>
                <td name='1_EVS_OBT_1ST'>$D2_3evs</td>
                <td name='1_EVS_MAX_1ST'>10</td>

            </tr>
            <tr>
                <th name='1_GK'>G.K.</th>
                <td name='1_GK_OBT_1ST'>$D2_3gk</td>
                <td name='1_GK_MAX_1ST'>10</td>
            </tr>
            <tr>
                <th name='1_TOTAL'>Total</th>
                <td name='1_TOTAL_OBT_1ST'>$D2_3total</td>
                <td name='1_TOTAL_MAX_1ST'>50</td>

            </tr>
        </table>
    </div>

    <div class='SeventhRow'>
        <span name='1_ATTENDANCE' class='SeventhRow'>Attendance:28/31</span>
    </div>

    <div class='EightRow'>

    </div>

    <div class='NineRow'>
        <div class='NineRow1'>
            <span><img src='../photo/parent_sign.png' class='Signature'> </span>
            <hr>
            <span name='1_PARENTSIGN' class='ExWidth'>Parents or Guardian signature</span>
        </div>
        <div class='NineRow1'><img src='../photo/teacher_neelam.png' class='Signature'>
            <hr>
            <span name='1_CLASSTEACHERSIGN' class='ExWidth'>Class Teacher signature</span>
        </div>
        <div> <img src='../photo/principal_sign&stam.png' class='Logo' name='1_STAMPANDLOGO_SHOW'>
            <hr>
            <span name='1_STAMPANDSIGN' class=''>Principal Sign & Stamp</span>
        </div>
    </div>

</body>

</html>
    ";
}
else{
//     echo $D1dob."<br>";
//     echo $sdob."<br>";
//     echo $D1rollno."<br>";
//     echo $srollnumber."<br>";
//     echo $num."<br>";

echo "please enter correct data ";
}
