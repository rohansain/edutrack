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


//Getting First Test Marks
$temp = "class".$sclass."_1";
$sql= "select * from $temp where rollnumber = ".$srollnumber;
$D2_1result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_1result);

if($num != 0){
    $D2_1row = mysqli_fetch_assoc($D2_1result);
    $D2_1english = $D2_1row['ENGLISH'];
    $D2_1hindi = $D2_1row['HINDI'];
    $D2_1math = $D2_1row['MATH'];
    $D2_1sst = $D2_1row['SST'];
    $D2_1science = $D2_1row['SCIENCE'];
    $D2_1french = $D2_1row['FRENCH'];
    $D2_1total = $D2_1row['TOTAL'];

}


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


//Getting half yearly Marks
$temp = "class".$sclass."_4";
$sql= "select * from $temp where rollnumber = ".$srollnumber;
$D2_4result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_4result);

if($num != 0){
    $D2_4row = mysqli_fetch_assoc($D2_4result);
    $D2_4english = $D2_4row['ENGLISH'];
    $D2_4hindi = $D2_4row['HINDI'];
    $D2_4math = $D2_4row['MATH'];
    $D2_4sst = $D2_4row['SST'];
    $D2_4science = $D2_4row['SCIENCE'];
    $D2_4french = $D2_4row['FRENCH'];
    $D2_4total = $D2_4row['TOTAL'];

}

$HINDI_TOTAL = $D2_1hindi+$D2_2hindi+$D2_4hindi;
$MATH_TOTAL = $D2_1math+$D2_2math+$D2_4math;
$ENGLISH_TOTAL=$D2_1english+$D2_2english+$D2_4english;
$FRENCH_TOTAL=$D2_1french+$D2_2french+$D2_4french;
$SST_TOTAL = $D2_1sst+$D2_2sst+$D2_4sst;
$SCIENCE_TOTAL = $D2_1science+$D2_2science+$D2_4science;

$FINAL_TOTAL = $HINDI_TOTAL+$MATH_TOTAL+$ENGLISH_TOTAL+$FRENCH_TOTAL+$SST_TOTAL+$SCIENCE_TOTAL;

$percentage = $FINAL_TOTAL*100/540;
$percentage = number_format($percentage,2);



if($D1dob == $sdob  &&  $D1rollno == $srollnumber  &&  $num != 0){
    echo "
    <!DOCTYPE html>
<html lang='en'>

<head>
    <title>Half Result 6 to 10th</title>
    <link rel='stylesheet' href='../css/result/Display_half_result_css_1to5.css'>

</head>

<body>
    <div class='container'>
        <div class='header' id='heading1'>
        <img src='../photo/roaem_logo.png' name='1_IMAGE' class='img'>
        </div>
        <div class='header' id='heading2'>
            <h2 name='Q1_SCHOOLNAME'>ROAEM PUBLIC SCHOOL</h2>
        </div>
        <div class='' id='heading3'>
            <h4 name='Q1_MOBILE'>+91 9894449620</h4>
            <h4 name='Q1_GMAIL'>roaempublicschool@Gmail.com</h4>
        </div>
    </div>


    <div class='SecondRow' id=''>
        <h3 name='Q1_ANNUAL_WORD'>HALF YEARLY Result</h3>
    </div>

    <div class='container'>
        <div class='ThirdRow' id=''>
            <h4 name='Q1_ENROLLMENTNO'>Enrollment no.:$D1enrollment</h4>
        </div>
        <div class='ThirdRow' id=''>
            <h4 name='Q1_CLASS'>Class:$sclass</h4>
        </div>
        <div class='ThirdRow' id=''>
            <h4 name='Q1_ROLLNO'>Roll No.:$srollnumber</h4>
        </div>
    </div>


    <div class='FourthRow'>
        <h4 name='Q1_STUDENTNAME_WORD'>Student's Name:$D1sname</h4>
        <h4 name='Q1_FATHERNAME_WORD'>Father's Name :$D1sfname</h4>
        <h4 name='Q1_MOTHERNAME_WORD'>Mother's Name :$D1smname</h4>
        <h4 name='Q1_DATEOFBIRTH_WORD'>Date Of Birth :$D1dob</h4>
        <h4 name='Q1_ADDRESS_WORD'>Address :$D1add</h4>
    </div>

    <div class='FifthRow'>
        <table>
            <tr>
                <th name='Q1_SUBJECT' rowspan='2'>Subject</th>
                <th name='Q1_1STUNIT' colspan='2'>1st Unit</th>
                <th name='Q1_2NDUNIT' colspan='2'>2nd Unit</th>
                <th name='Q1_HALFYEARLY' colspan='2'>Half Yearly</th>
               <th name='Q1_GRANDTOTAL' colspan='2'>Grand Total</th>
            </tr>
            <tr>
                <th name='Q1_MARKSOBT_1'>Marks Obt.</th>
                <th name='Q1_MAXMARKS_1'>Max. Marks</th>
                <th name='Q1_MARKSOBT_2'>Marks Obt.</th>
                <th name='Q1_MAXMARKS_2'>Max. Marks</th>
                <th name='Q1_MARKSOBT_HALFYEARLY'>Marks Obt.</th>
                <th name='Q1_MAXMARKS_HALFYEARLY'>Max. Marks</th>
                <th name='Q1_MARKSOBT_GT'>Marks Obt.</th>
                <th name='Q1_MAXMARKS_GT'>Max. Marks</th>
            </tr>
            <tr>
                <th name='Q1_HINDI'>Hindi</th>
                <td name='Q1_HINDI_OBT_1ST'>$D2_1hindi</td>
                <td name='Q1_HINDI_MAX_1ST'>10</td>
                <td name='Q1_HINDI_OBT_2ND'>$D2_2hindi</td>
                <td name='Q1_HINDI_MAX_2ND'>10</td>
                <td name='Q1_HINDI_OBT_HALFYEARLY'>$D2_4hindi</td>
                <td name='Q1_HINDI_MAX_HALFYEARLY'>70</td>
                <td name='Q1_HINDI_OBT_TOTAL'>$HINDI_TOTAL</td>
                <td name='Q1_HINDI_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q1_ENGLISH'>English</th>
                <td name='Q1_ENGLISH_OBT_1ST'>$D2_1english</td>
                <td name='Q1_ENGLISH_MAX_1ST'>10</td>
                <td name='Q1_ENGLISH_OBT_2ND'>$D2_2english</td>
                <td name='Q1_ENGLISH_MAX_2ND'>10</td>
                <td name='Q1_ENGLISH_OBT_HALFYEARLY'>$D2_4english</td>
                <td name='Q1_ENGLISH_MAX_HALFYEARLY'>70</td>
                <td name='Q1_ENGLISH_OBT_TOTAL'>$ENGLISH_TOTAL</td>
                <td name='Q1_ENGLISH_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q1_MATHS'>Maths</th>
                <td name='Q1_MATHS_OBT_1ST'>$D2_1math</td>
                <td name='Q1_MATHS_MAX_1ST'>10</td>
                <td name='Q1_MATHS_OBT_2ND'>$D2_2math</td>
                <td name='Q1_MATHS_MAX_2ND'>10</td>
                <td name='Q1_MATHS_OBT_HALFYEARLY'>$D2_4math</td>
                <td name='Q1_MATHS_MAX_HALFYEARLY'>70</td>
                <td name='Q1_MATHS_OBT_TOTAL'>$MATH_TOTAL</td>
                <td name='Q1_MATHS_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q1_SCIENCE'>SCIENCE</th>
                <td name='Q1_SCIENCE_OBT_1ST'>$D2_1science</td>
                <td name='Q1_SCIENCE_MAX_1ST'>10</td>
                <td name='Q1_SCIENCE_OBT_2ND'>$D2_2science</td>
                <td name='Q1_SCIENCE_MAX_2ND'>10</td>
                <td name='Q1_SCIENCE_OBT_HALFYEARLY'>$D2_4science</td>
                <td name='Q1_SCIENCE_MAX_HALFYEARLY'>70</td>
                <td name='Q1_SCIENCE_OBT_TOTAL'>$SCIENCE_TOTAL</td>
                <td name='Q1_SCIENCE_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q1_SOCIALSCIENCE'>SOCIAL SCI.</th>
                <td name='Q1_SOCIALSCIENCE_OBT_1ST'>$D2_1sst</td>
                <td name='Q1_SOCIALSCIENCE_MAX_1ST'>10</td>
                <td name='Q1_SOCIALSCIENCE_OBT_2ND'>$D2_2sst</td>
                <td name='Q1_SOCIALSCIENCE_MAX_2ND'>10</td>
                <td name='Q1_SOCIALSCIENCE_OBT_HALFYEARLY'>$D2_4sst</td>
                <td name='Q1_SOCIALSCIENCE_MAX_HALFYEARLY'>70</td>
                <td name='Q1_SOCIALSCIENCE_OBT_TOTAL'>$SST_TOTAL</td>
                <td name='Q1_SOCIALSCIENCE_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q1_SANSKRIT'>FRENCH</th>
                <td name='Q1_SANSKRIT_OBT_1ST'>$D2_1french</td>
                <td name='Q1_SANSKRIT_MAX_1ST'>10</td>
                <td name='Q1_SANSKRIT_OBT_2ND'>$D2_2french</td>
                <td name='Q1_SANSKRIT_MAX_2ND'>10</td>
                <td name='Q1_SANSKRIT_OBT_HALFYEARLY'>$D2_4french</td>
                <td name='Q1_SANSKRIT_MAX_HALFYEARLY'>70</td>
                <td name='Q1_SANSKRIT_OBT_TOTAL'>$FRENCH_TOTAL</td>
                <td name='Q1_SANSKRIT_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q1_TOTAL'>Total</th>
                <td name='Q1_TOTAL_OBT_1ST'>$D2_1total</td>
                <td name='Q1_TOTAL_MAX_1ST'>60</td>
                <td name='Q1_TOTAL_OBT_2ND'>$D2_2total</td>
                <td name='Q1_TOTAL_MAX_2ND'>60</td>
                <td name='Q1_TOTAL_OBT_HALFYEARLY'>$D2_4total</td>
                <td name='Q1_TOTAL_MAX_HALFYEARLY'>420</td>
                <td name='Q1_TOTAL_OBT_GT'>$FINAL_TOTAL</td>
                <td name='Q1_TOTAL_MAX_GT'>540</td>
            </tr>
        </table>
    </div>

    <div class='SixthRow'>
        <span name='Q1_TOTALMARKS' class='SixthRow'>Total Marks:&nbsp;540</span>
        <span name='Q1_OBTAINEDMARKS' class=''>Obtained Marks:&nbsp;$FINAL_TOTAL<br></span>
        <hr>
    </div>

    <div class='SeventhRow'>
        <span name='Q1_PERCENTAGE' class='SeventhRow'>Percentage:&nbsp;$percentage%</span>
        <span name='Q1_ATTENDANCE' class='SeventhRow'>Attendance:&nbsp;180/188</span>
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
