<!-- /*
6th to 10th
first we will verify whether the information is correct or not 
    so first we check rollno and dob from main_info website
    then we will check whether the result of this student is stored or not 
    if both condition is true then we will show data 
*/ -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("can't connect to server");
}

$srollnumber = $_POST['rollnumber'];
$sclass = $_POST['sclass'];
$sdob = $_POST['sdob'];

// echo $srollnumber.$sclass.$sdob;

//connecting database for student information
mysqli_select_db($conn, "roaem_database");


$sql = "select * from student_info_class$sclass where rollno = " . $srollnumber;
$D1result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D1result);

if ($num != 0) {
    $D1row = mysqli_fetch_assoc($D1result);
    $D1rollno = $D1row['rollno'];
    $D1dob = $D1row['dob'];
    $D1enrollment = $D1row['enrollment'];
    $D1sname = $D1row['sname'];
    $D1smname = $D1row['smname'];
    $D1sfname = $D1row['sfname'];
    $D1add = $D1row['address'];
}


mysqli_select_db($conn, "result_class$sclass");


//is variable ki value increment krenge agar data mila to agar iski value 3 hui to hm sabhi subject ke marks ka test wise total krenge verna nhi krenge 
$var_check = 0;


//Getting First Test Marks
$temp = "class" . $sclass . "_1";
$sql = "select * from $temp where rollnumber = " . $srollnumber;
$D2_1result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_1result);

if ($num != 0) {
    $D2_1row = mysqli_fetch_assoc($D2_1result);
    $D2_1english = $D2_1row['ENGLISH'];
    $D2_1hindi = $D2_1row['HINDI'];
    $D2_1math = $D2_1row['MATH'];
    $D2_1sst = $D2_1row['SST'];
    $D2_1science = $D2_1row['SCIENCE'];
    $D2_1french = $D2_1row['FRENCH'];
    $D2_1total = $D2_1row['TOTAL'];
    $var_check++;
}


//Getting Second Test Marks
$temp = "class" . $sclass . "_2";
$sql = "select * from $temp where rollnumber = " . $srollnumber;
$D2_2result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_2result);

if ($num != 0) {
    $D2_2row = mysqli_fetch_assoc($D2_2result);
    $D2_2english = $D2_2row['ENGLISH'];
    $D2_2hindi = $D2_2row['HINDI'];
    $D2_2math = $D2_2row['MATH'];
    $D2_2sst = $D2_2row['SST'];
    $D2_2science = $D2_2row['SCIENCE'];
    $D2_2french = $D2_2row['FRENCH'];
    $D2_2total = $D2_2row['TOTAL'];
    $var_check++;
}


//GETTING THIRD TEST
$temp = "class" . $sclass . "_3";
$sql = "select * from $temp where rollnumber = " . $srollnumber;
$D2_3result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_3result);

if ($num != 0) {
    $D2_3row = mysqli_fetch_assoc($D2_3result);
    $D2_3english = $D2_3row['ENGLISH'];
    $D2_3hindi = $D2_3row['HINDI'];
    $D2_3math = $D2_3row['MATH'];
    $D2_3sst = $D2_3row['SST'];
    $D2_3science = $D2_3row['SCIENCE'];
    $D2_3french = $D2_3row['FRENCH'];
    $D2_3total = $D2_3row['TOTAL'];
    $var_check++;
}


// GETTING half YEAR MARKS
$temp = "class" . $sclass . "_4";
$sql = "select * from $temp where rollnumber = " . $srollnumber;
$D2_4result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_4result);

if ($num != 0) {
    $D2_4row = mysqli_fetch_assoc($D2_4result);
    $D2_4english = $D2_4row['ENGLISH'];
    $D2_4hindi = $D2_4row['HINDI'];
    $D2_4math = $D2_4row['MATH'];
    $D2_4sst = $D2_4row['SST'];
    $D2_4science = $D2_4row['SCIENCE'];
    $D2_4french = $D2_4row['FRENCH'];
    $D2_4total = $D2_4row['TOTAL'];
    $var_check++;
}

// GETTING FINAL YEAR MARKS
$temp = "class" . $sclass . "_5";
$sql = "select * from $temp where rollnumber = " . $srollnumber;
$D2_5result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_5result);

if ($num != 0) {
    $D2_5row = mysqli_fetch_assoc($D2_5result);
    $D2_5english = $D2_5row['ENGLISH'];
    $D2_5hindi = $D2_5row['HINDI'];
    $D2_5math = $D2_5row['MATH'];
    $D2_5sst = $D2_5row['SST'];
    $D2_5science = $D2_5row['SCIENCE'];
    $D2_5french = $D2_5row['FRENCH'];
    $D2_5total = $D2_5row['TOTAL'];
    $var_check++;
}


//WE WILL ADD MARKS IF ALL TABLE RETURN VALUES
if ($var_check == 5) {
    $HINDI_TOTAL = $D2_1hindi + $D2_2hindi + $D2_3hindi + $D2_4hindi + $D2_5hindi;
    $MATH_TOTAL = $D2_1math + $D2_2math + $D2_3math + $D2_4math + $D2_5math;
    $ENGLISH_TOTAL = $D2_1english + $D2_2english + $D2_4english + $D2_3english + $D2_5english;
    $FRENCH_TOTAL = $D2_1french + $D2_2french + $D2_4french + $D2_3french + $D2_5french;
    $SST_TOTAL = $D2_1sst + $D2_2sst + $D2_4sst + $D2_3sst + $D2_5sst;
    $SCIENCE_TOTAL = $D2_1science + $D2_2science + $D2_4science + $D2_3science + $D2_5science;

    $FINAL_TOTAL = $HINDI_TOTAL + $MATH_TOTAL + $ENGLISH_TOTAL + $FRENCH_TOTAL + $SST_TOTAL + $SCIENCE_TOTAL;

    $percentage = $FINAL_TOTAL * 100 / 1200;
    $percentage = number_format($percentage, 2);
}




if ($D1dob == $sdob  &&  $D1rollno == $srollnumber  &&  $num != 0) {
    echo "
    <!DOCTYPE html>
<html lang='en'>

<head>
    <title>Final result</title>
    <link rel='stylesheet' href='../css/result/display_final.css'>
</head>

<body>
        <div class='main'>
         <div class='FirstRow'>
            <div class='header' id='heading1'>
            <img src='../photo/roaem_logo.png' name='R_IMAGE' class='img'>
            </div>
            <div class='header' id='heading2'>
                <h2 name='R_SCHOOLNAME'>ROAEM PUBLIC SCHOOL</h2>
            </div>
            <div class='' id='heading3'>
                <h4 name='R_MOBILE'>+91 9123479110</h4>
                <h4 name='R_GMAIL'>roaempublicschool@Gmail.com</h4>
            </div>
         </div>
    
    
         <div class='SecondRow' id=''>
            <h3 name='R_ANNUAL_WORD'>Annual Result 2022-2023</h3>
         </div>
    
          <div class='ThirdRow'>
            <div class='ThirdRow1' id=''>
                <h4 name='R_ENROLLMENTNO_SHOW'>Enrollment no.:&nbsp;&nbsp;$D1enrollment</h4>
            </div>
            <div class='ThirdRow2' id=''>
                <h4 name='R_CLASS_SHOW'>Class:&nbsp;&nbsp;$sclass</h4>
            </div>
            <div class='ThirdRow3' id=''>
                <h4 name='R_ROLL_SHOW'>Roll No.:&nbsp;&nbsp;$srollnumber</h4>
            </div>
         </div>
    
    
            <div class='FourthRow'>
                <h4 name='R_STUDENTNAME_SHOW'>Student's Name:&nbsp;&nbsp;$D1sname</h4>
                <h4 name='R_FATHERNAME_SHOW'>Father's Name :&nbsp;&nbsp;$D1sfname</h4>
                <h4 name='R_MOTHERNAME_SHOW'>Mother's Name :&nbsp;&nbsp;$D1smname</h4>
                <h4 name='R_DATEOFBIRTH_SHOW'>Date Of Birth :&nbsp;&nbsp;$D1dob</h4>
                <h4 name='R_ADDRESS_SHOW'>Address :&nbsp;&nbsp;$D1add</h4>
            </div>
    
         <div class='FifthRow'>
            <table>
                <tr>
                    <th name='R_SUBJECT' rowspan='2'>Subject</th>
                    <th name='R_1STUNIT' colspan='2'>1st Unit</th>
                    <th name='R_2NDUNIT' colspan='2'>2nd Unit</th>
                    <th name='R_HALFYEARLY' colspan='2'>Half Yearly</th>
                    <th name='R_3RDUNIT' colspan='2'>3rd Unit</th>
                    <th name='R_ANNUAL' colspan='2'>Annual</th>
                    <th name='R_GRANDTOTAL' colspan='2'>Grand Total</th>
                </tr>
                <tr>
                    <th name='R_MARKSOBT_H'>Marks Obt.</th>
                    <th name='R_MAXMARKS_H'>Max. Marks</th>
                    <th name='R_MARKSOBT_E'>Marks Obt.</th>
                    <th name='R_MAXMARKS_E'>Max. Marks</th>
                    <th name='R_MARKSOBT_M'>Marks Obt.</th>
                    <th name='R_MAXMARKS_M'>Max. Marks</th>
                    <th name='R_MARKSOBT_EV'>Marks Obt.</th>
                    <th name='R_MAXMARKS_EV'>Max. Marks</th>
                    <th name='R_MARKSOBT_G'>Marks Obt.</th>
                    <th name='R_MAXMARKS_G'>Max. Marks</th>
                    <th name='R_MARKSOBT_GT'>Marks Obt.</th>
                    <th name='R_MAXMARKS_GT'>Max. Marks</th>
                </tr>
                <tr>
                    <th name='R_HINDI'>Hindi</th>
                    <td name='R_HINDI_OBT_1ST'>$D2_1hindi</td>
                    <td name='R_HINDI_MAX_1ST'>10</td>
                    <td name='R_HINDI_OBT_2ND'>$D2_2hindi</td>
                    <td name='R_HINDI_MAX_2ND'>10</td>
                    <td name='R_HINDI_OBT_HALFYEARLY'>$D2_4hindi</td>
                    <td name='R_HINDI_MAX_HALFYEARLY'>70</td>
                    <td name='R_HINDI_OBT_3RD'>$D2_3hindi</td>
                    <td name='R_HINDI_MAX_3RD'>10</td>
                    <td name='R_HINDI_OBT_ANNUAL'>$D2_5hindi</td>
                    <td name='R_HINDI_MAX_ANNUAL'>100</td>
                    <td name='R_HINDI_OBT_TOTAL'>$HINDI_TOTAL</td>
                    <td name='R_HINDI_MAX_TOTAL'>200</td>
                </tr>
                <tr>
                    <th name='R_ENGLISH'>English</th>
                    <td name='R_ENGLISH_OBT_1ST'>$D2_1english</td>
                    <td name='R_ENGLISH_MAX_1ST'>10</td>
                    <td name='R_ENGLISH_OBT_2ND'>$D2_2english</td>
                    <td name='R_ENGLISH_MAX_2ND'>10</td>
                    <td name='R_ENGLISH_OBT_HALFYEARLY'>$D2_4english</td>
                    <td name='R_ENGLISH_MAX_HALFYEARLY'>70</td>
                    <td name='R_ENGLISH_OBT_3RD'>$D2_3english</td>
                    <td name='R_ENGLISH_MAX_3RD'>10</td>
                    <td name='R_ENGLISH_OBT_ANNUAL'>$D2_5english</td>
                    <td name='R_ENGLISH_MAX_ANNUAL'>100</td>
                    <td name='R_ENGLISH_OBT_TOTAL'>$ENGLISH_TOTAL</td>
                    <td name='R_ENGLISH_MAX_TOTAL'>200</td>
                </tr>
                <tr>
                    <th name='R_MATHS'>Maths</th>
                    <td name='R_MATHS_OBT_1ST'>$D2_1math</td>
                    <td name='R_MATHS_MAX_1ST'>10</td>
                    <td name='R_MATHS_OBT_2ND'>$D2_2math</td>
                    <td name='R_MATHS_MAX_2ND'>10</td>
                    <td name='R_MATHS_OBT_HALFYEARLY'>$D2_4math</td>
                    <td name='R_MATHS_MAX_HALFYEARLY'>70</td>
                    <td name='R_MATHS_OBT_3RD'>$D2_3math</td>
                    <td name='R_MATHS_MAX_3RD'>10</td>
                    <td name='R_MATHS_OBT_ANNUAL'>$D2_5math</td>
                    <td name='R_MATHS_MAX_ANNUAL'>100</td>
                    <td name='R_MATHS_OBT_TOTAL'>$MATH_TOTAL</td>
                    <td name='R_MATHS_MAX_TOTAL'>200</td>
                </tr>
                <tr>
                <th name='R_SCIENCE'>SCIENCE</th>
                <td name='R_SCIENCE_OBT_1ST'>$D2_1science</td>
                <td name='R_SCIENCE_MAX_1ST'>10</td>
                <td name='R_SCIENCE_OBT_2ND'>$D2_2science</td>
                <td name='R_SCIENCE_MAX_2ND'>10</td>
                <td name='R_SCIENCE_OBT_HALFYEARLY'>$D2_4science</td>
                <td name='R_SCIENCE_MAX_HALFYEARLY'>70</td>
                <td name='R_SCIENCE_OBT_3RD'>$D2_3science</td>
                <td name='R_SCIENCE_MAX_3RD'>10</td>
                <td name='R_SCIENCE_OBT_ANNUAL'>$D2_5science</td>
                <td name='R_SCIENCE_MAX_ANNUAL'>100</td>
                <td name='R_SCIENCE_OBT_TOTAL'>$SCIENCE_TOTAL</td>
                <td name='R_SCIENCE_MAX_TOTAL'>200</td>
                </tr>
                <tr>
                <th name='R_SOCIALSCIENC'>SST</th>
                <td name='R_SOCIALSCIENC_OBT_1ST'>$D2_1sst</td>
                <td name='R_SOCIALSCIENC_MAX_1ST'>10</td>
                <td name='R_SOCIALSCIENC_OBT_2ND'>$D2_2sst</td>
                <td name='R_SOCIALSCIENC_MAX_2ND'>10</td>
                <td name='R_SOCIALSCIENC_OBT_HALFYEARLY'>$D2_4sst</td>
                <td name='R_SOCIALSCIENC_MAX_HALFYEARLY'>70</td>
                <td name='R_SOCIALSCIENC_OBT_3RD'>$D2_3sst</td>
                <td name='R_SOCIALSCIENC_MAX_3RD'>10</td>
                <td name='R_SOCIALSCIENC_OBT_ANNUAL'>$D2_5sst</td>
                <td name='R_SOCIALSCIENC_MAX_ANNUAL'>100</td>
                <td name='R_SOCIALSCIENC_OBT_TOTAL'>$SST_TOTAL</td>
                <td name='R_SOCIALSCIENC_MAX_TOTAL'>200</td>
                </tr>
                <tr>
                <th name='R_SANSKRIT'>FRENCH</th>
                <td name='R_SANSKRIT_OBT_1ST'>$D2_1french</td>
                <td name='R_SANSKRIT_MAX_1ST'>10</td>
                <td name='R_SANSKRIT_OBT_2ND'>$D2_2french</td>
                <td name='R_SANSKRIT_MAX_2ND'>10</td>
                <td name='R_SANSKRIT_OBT_HALFYEARLY'>$D2_4french</td>
                <td name='R_SANSKRIT_MAX_HALFYEARLY'>70</td>
                <td name='R_SANSKRIT_OBT_3RD'>$D2_3french</td>
                <td name='R_SANSKRIT_MAX_3RD'>10</td>
                <td name='R_SANSKRIT_OBT_ANNUAL'>$D2_5french</td>
                <td name='R_SANSKRIT_MAX_ANNUAL'>100</td>
                <td name='R_SANSKRIT_OBT_TOTAL'>$FRENCH_TOTAL</td>
                <td name='R_SANSKRIT_MAX_TOTAL'>200</td>
                </tr>
                <tr>
                    <th name='R_TOTAL'>Total</th>
                    <td name='R_TOTAL_OBT_1ST'>$D2_1total</td>
                    <td name='R_TOTAL_MAX_1ST'>60</td>
                    <td name='R_TOTAL_OBT_2ND'>$D2_2total</td>
                    <td name='R_TOTAL_MAX_2ND'>60</td>
                    <td name='R_TOTAL_OBT_HALFYEARLY'>$D2_4total</td>
                    <td name='R_TOTAL_MAX_HALFYEARLY'>420</td>
                    <td name='R_TOTAL_OBT_3RD'>$D2_3total</td>
                    <td name='R_TOTAL_MAX_3RD'>60</td>
                    <td name='R_TOTAL_OBT_ANNUAL'>$D2_5total</td>
                    <td name='R_TOTAL_MAX_ANNUAL'>600</td>
                    <td name='R_TOTAL_OBT_GT'>$FINAL_TOTAL</td>
                    <td name='R_TOTAL_MAX_GT'>1200</td>
                </tr>
            </table>
            </div>
    
            <div class='SixthRow'>
            <span name='R_TOTALMARKS' class='sixthrow1'>Total Marks:&nbsp;&nbsp;1200</span>
            <span name='R_OBTAINEDMARKS' class='sixthrow2'>Obtained Marks:&nbsp;&nbsp;$FINAL_TOTAL<br></span>
            <hr>
            </div>
    
            <div class='SeventhRow'>
            <span name='R_PERCENTAGE' class='SeventhRow1'>Percentage:&nbsp;&nbsp;$percentage</span>
            <span name='R_ATTENDANCE' class='SeventhRow2'>Attendance:&nbsp;&nbsp;288/290</span>
            <!-- <span name='R_ISSUEDATE' class='SeventhRow3'>Issue Date:&nbsp;&nbsp;30-02-2023</span> -->
         </div>
    
         <div class='NineRow'>
            <div class='NoneRow1'>
                <span><img src='../photo/parent_sign.png' class='Signature' name='R_PARENTSIGN_SHOW'></span>
                <br>
                <span name='R_PARENTSIGN' class='NineBorder'>Parents sign</span>
            </div>
            <div class='NoneRow2'>
                <img src='../photo/teacher_neelam.png' class='Signature'>
                <br>
                <span name='R_CLASSTEACHERSIGN' class='NineBorder'>Class Teacher sign</span>
            </div>
            <div class='NoneRow3'>
                <img src='../photo/principal_sign&stam.png' class='Logo' name='R_STAMPANDLOGO_SHOW'>
                <br>
                <span name='R_STAMPANDSIGN' class='NineBorder'>Principal</span>
            </div>
         </div>
        </div>
    
    </body>
    
</html>
    ";
} else {
    echo $D1dob . "<br>";
    echo $sdob . "<br>";
    echo $D1rollno . "<br>";
    echo $srollnumber . "<br>";
    echo $num . "<br>";

    echo "no data found ";
}



// if($dob == $sdob && $D1rollno == $srollnumber){

// }
// $sql= "select * from details where D1rollno = ".$number;
// $result = mysqli_query($conn, $sql);
// $num = mysqli_num_rows($result);
?>