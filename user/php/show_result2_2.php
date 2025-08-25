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

//Getting second Test Marks
$temp = "class".$sclass."_2";
$sql= "select * from $temp where rollnumber = ".$srollnumber;
$D2_2result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_2result);

if($num != 0){
    $D2_2row = mysqli_fetch_assoc($D2_2result);
    $D2_2english = $D2_2row['ENGLISH'];
    $D2_2hindi = $D2_2row['HINDI'];
    $D2_2math = $D2_2row['MATH'];
    $D2_2sst = $D2_2row['SST'];
    $D2_2science = $D2_2row['SCIENCE'];
    $D2_2french = $D2_2row['FRENCH'];
    $D2_2total = $D2_2row['TOTAL'];

}

if($D1dob == $sdob  &&  $D1rollno == $srollnumber  &&  $num != 0){
    echo "
    <!DOCTYPE html>
<html lang='en'>

<head>
    <title>2nd UNIT Result 6 to 10th</title>
    <link rel='stylesheet' href='../css/result/Display_1st_result_6to10css.css'>

</head>

<body>
    <div class='container'>
        <div class='header' id='heading1'>
        <img src='../photo/roaem_logo.png' name='1_IMAGE' class='img'>
        </div>
        <div class='header' id='heading2'>
            <h2 name='1A_SCHOOLNAME'>ROAEM PUBLIC SCHOOL</h2>
        </div>
        <div class='' id='heading3'>
            <h4 name='1A_MOBILE'>+91 9123479110</h4>
            <h4 name='1A_GMAIL'>roaempublicschool@Gmail.com</h4>
        </div>
    </div>


    <div class='SecondRow' id=''>
        <h3 name='1A_ANNUAL_WORD'>2nd UNIT RESULT</h3>
    </div>

    <div class='container'>
        <div class='ThirdRow' id=''>
            <h4 name='1A_ENROLLMENTNO'>Enrollment no.:$D1enrollment</h4>
        </div>
        <div class='ThirdRow' id=''>
            <h4 name='1A_CLASS'>Class:$sclass</h4>
        </div>
        <div class='ThirdRow' id=''>
            <h4 name='1A_ROLLNO'>Roll No.:$srollnumber</h4>
        </div>
    </div>

    <div class='foucontainer'>
    <div class='FourthRow'>
        <h4 name='1A_STUDENTNAME_WORD'>Student's Name:$D1sname</h4>
        <h4 name='1A_DATEOFBIRTH_WORD'>Date Of Birth :$D1dob</h4>
    </div>
    </div>

    <div class='FifthRow'>
        <table>
            <tr>
                <th name='1A_SUBJECT' rowspan='2'>Subject</th>
                <th name='1A_1STUNIT' colspan='2'>1st Unit</th>
            </tr>
            <tr>
                <th name='1A_MARKSOBT_1'>Marks Obt.</th>
                <th name='1A_MAXMARKS_1'>Max. Marks</th>
            </tr>
            <tr>
                <th name='1A_HINDI'>Hindi</th>
                <td name='1A_HINDI_OBT_1ST'>$D2_2hindi</td>
                <td name='1A_HINDI_MAX_1ST'>10</td>

            </tr>
            <tr>
                <th name='1A_ENGLISH'>English</th>
                <td name='1A_ENGLISH_OBT_1ST'>$D2_2english</td>
                <td name='1A_ENGLISH_MAX_1ST'>10</td>

            </tr>
            <tr>
                <th name='1A_MATHS'>Maths</th>
                <td name='1A_MATHS_OBT_1ST'>$D2_2math</td>
                <td name='1A_MATHS_MAX_1ST'>10</td>

            </tr>
            <tr>
                <th name='Q1A_SCIENCE'>SCIENCE</th>
                <td name='Q1A_SCIENCE_OBT_1ST'>$D2_2science</td>
                <td name='Q1A_SCIENCE_MAX_1ST'>10</td>
                
            </tr>
            <tr>
                <th name='Q1A_SOCIALSCIENCE'>SOCIAL SCI.</th>
                <td name='Q1A_SOCIALSCIENCE_OBT_1ST'>$D2_2sst</td>
                <td name='Q1A_SOCIALSCIENCE_MAX_1ST'>10</td>
            </tr>
            <tr>
                <th name='Q1A_SANSKRIT'>FRENCH</th>
                <td name='Q1A_SANSKRIT_OBT_1ST'>$D2_2french</td>
                <td name='Q1A_SANSKRIT_MAX_1ST'>10</td>
            </tr>
            <tr>
                <th name='1A_TOTAL'>Total</th>
                <td name='1A_TOTAL_OBT_1ST'>$D2_2total</td>
                <td name='1A_TOTAL_MAX_1ST'>50</td>

            </tr>
        </table>
    </div>

    <div class='SeventhRow'>
        <span name='1A_ATTENDANCE' class='SeventhRow'>Attendance:30/31</span>
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
echo "please enter correct data ";
}
