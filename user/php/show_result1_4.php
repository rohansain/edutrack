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


  
//connecting database for student information to get user personal data
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



//is variable ki value increment krenge agar data mila to agar iski value 3 hui to hm sabhi subject ke marks ka test wise total krenge verna nhi krenge 
$var_check = 0;


//getting first TEST marks of the student
$temp = "class".$sclass."_1";
$sql= "select * from $temp where rollnumber = ".$srollnumber;
$D2_1result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_1result);

if($num != 0){
    $D2_1row = mysqli_fetch_assoc($D2_1result);
    $D2_1english = $D2_1row['ENGLISH'];
    $D2_1hindi = $D2_1row['HINDI'];
    $D2_1math = $D2_1row['MATH'];
    $D2_1evs = $D2_1row['EVS'];
    $D2_1gk = $D2_1row['GK'];
    $D2_1total = $D2_1row['TOTAL'];
    $var_check++;
}


//getting second TEST marks of the student to get user personal data
$temp = "class".$sclass."_2";
$sql= "select * from $temp where rollnumber = ".$srollnumber;
$D2_2result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_2result);

if($num != 0){
    $D2_2row = mysqli_fetch_assoc($D2_2result);
    $D2_2english = $D2_2row['ENGLISH'];
    $D2_2hindi = $D2_2row['HINDI'];
    $D2_2math = $D2_2row['MATH'];
    $D2_2evs = $D2_2row['EVS'];
    $D2_2gk = $D2_2row['GK'];
    $D2_2total = $D2_2row['TOTAL'];
    $var_check++;
}


//getting HALF YEARLY marks of the student
$temp = "class".$sclass."_4";
$sql= "select * from $temp where rollnumber = ".$srollnumber;
$D2_4result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($D2_4result);

if($num != 0){
    $D2_4row = mysqli_fetch_assoc($D2_4result);
    $D2_4english = $D2_4row['ENGLISH'];
    $D2_4hindi = $D2_4row['HINDI'];
    $D2_4math = $D2_4row['MATH'];
    $D2_4evs = $D2_4row['EVS'];
    $D2_4gk = $D2_4row['GK'];
    $D2_4total = $D2_4row['TOTAL'];
    $var_check++;
}

//WE WILL ADD MARKS IF ALL TABLE RETURN VALUES
if($var_check == 3){
        //SUBJECT WISE TOTAL NUMBER
        $HINDI_TOTAL = $D2_1hindi+$D2_2hindi+$D2_4hindi;
        $ENGLISH_TOTAL = $D2_1english+$D2_2english+$D2_4english;
        $MATH_TOTAL = $D2_1math+$D2_2math+$D2_4math;
        $EVS_TOTAL = $D2_1evs+$D2_2evs+$D2_4evs;
        $GK_TOTAL = $D2_1gk+$D2_2gk+$D2_4gk;

        //TOATAL MARKS
        $FINAL_TOTAL = $D2_1total+$D2_2total+$D2_4total;

        // percentage
        $percentage = $FINAL_TOTAL*100/450;
        $percentage = number_format($percentage,2);
}
//agar user ki dob roaem_databse mai hui or rollnumber bhi hua and result bhi store hua to hum data print karenge
if($D1dob == $sdob  &&  $D1rollno == $srollnumber  &&  $num != 0){
    echo "
    <!DOCTYPE html>
<html lang='en'>

<head>
    <title>Half-Result</title>
    <link rel='stylesheet' href='../css/result/Display_half_result_css_1to5.css'>
</head>

<body>
    <div class='container'>
        <div class='header' id='heading1'>
        <img src='../photo/roaem_logo.png' name='1_IMAGE' class='img'>
        </div>
        <div class='header' id='heading2'>
            <h2 name='Q_SCHOOLNAME'>ROAEM PUBLIC SCHOOL</h2>
        </div>
        <div class='' id='heading3'>
            <h4 name='Q_MOBILE'>+91 9123479110</h4>
            <h4 name='Q_GMAIL'>roaempublicschool@Gmail.com</h4>
        </div>
    </div>


    <div class='SecondRow' id=''>
        <h3 name='Q_ANNUAL_WORD'>HALF YEARLY Result 2022-2023</h3>
    </div>

    <div class='container'>
        <div class='ThirdRow' id=''>
            <h4 name='Q_ENROLLMENTNO'>Enrollment no.:$D1enrollment</h4>
        </div>
        <div class='ThirdRow' id=''>
            <h4 name='Q_CLASS'>Class:$sclass</h4>
        </div>
        <div class='ThirdRow' id=''>
            <h4 name='Q_ROLLNO'>Roll No.:$srollnumber</h4>
        </div>
    </div>


    <div class='FourthRow'>
        <h4 name='Q_STUDENTNAME_WORD'>Student's Name:$D1sname</h4>
        <h4 name='Q_FATHERNAME_WORD'>Father's Name :$D1sfname</h4>
        <h4 name='Q_MOTHERNAME_WORD'>Mother's Name :$D1smname</h4>
        <h4 name='Q_DATEOFBIRTH_WORD'>Date Of Birth :$D1dob</h4>
        <h4 name='Q_ADDRESS_WORD'>Address :$D1add</h4>
    </div>

    <div class='FifthRow'>
        <table>
            <tr>
                <th name='Q_SUBJECT' rowspan='2'>Subject</th>
                <th name='Q_1STUNIT' colspan='2'>1st Unit</th>
                <th name='Q_2NDUNIT' colspan='2'>2nd Unit</th>
                <th name='Q_HALFYEARLY' colspan='2'>Half Yearly</th>
               <th name='Q_GRANDTOTAL' colspan='2'>Grand Total</th>
            </tr>
            <tr>
                <th name='Q_MARKSOBT_1'>Marks Obt.</th>
                <th name='Q_MAXMARKS_1'>Max. Marks</th>
                <th name='Q_MARKSOBT_2'>Marks Obt.</th>
                <th name='Q_MAXMARKS_2'>Max. Marks</th>
                <th name='Q_MARKSOBT_HALFYEARLY'>Marks Obt.</th>
                <th name='Q_MAXMARKS_HALFYEARLY'>Max. Marks</th>
                <th name='Q_MARKSOBT_GT'>Marks Obt.</th>
                <th name='Q_MAXMARKS_GT'>Max. Marks</th>
            </tr>
            <tr>
                <th name='Q_HINDI'>Hindi</th>
                <td name='Q_HINDI_OBT_1ST'>$D2_1hindi</td>
                <td name='Q_HINDI_MAX_1ST'>10</td>
                <td name='Q_HINDI_OBT_2ND'>$D2_2hindi</td>
                <td name='Q_HINDI_MAX_2ND'>10</td>
                <td name='Q_HINDI_OBT_HALFYEARLY'>$D2_4hindi</td>
                <td name='Q_HINDI_MAX_HALFYEARLY'>70</td>
                <td name='Q_HINDI_OBT_TOTAL'>$HINDI_TOTAL</td>
                <td name='Q_HINDI_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q_ENGLISH'>English</th>
                <td name='Q_ENGLISH_OBT_1ST'>$D2_1english</td>
                <td name='Q_ENGLISH_MAX_1ST'>10</td>
                <td name='Q_ENGLISH_OBT_2ND'>$D2_2english</td>
                <td name='Q_ENGLISH_MAX_2ND'>10</td>
                <td name='Q_ENGLISH_OBT_HALFYEARLY'>$D2_4english</td>
                <td name='Q_ENGLISH_MAX_HALFYEARLY'>70</td>
                <td name='Q_ENGLISH_OBT_TOTAL'>$ENGLISH_TOTAL</td>
                <td name='Q_ENGLISH_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q_MATHS'>Maths</th>
                <td name='Q_MATHS_OBT_1ST'>$D2_1math</td>
                <td name='Q_MATHS_MAX_1ST'>10</td>
                <td name='Q_MATHS_OBT_2ND'>$D2_2math</td>
                <td name='Q_MATHS_MAX_2ND'>10</td>
                <td name='Q_MATHS_OBT_HALFYEARLY'>$D2_4math</td>
                <td name='Q_MATHS_MAX_HALFYEARLY'>70</td>
                <td name='Q_MATHS_OBT_TOTAL'>$MATH_TOTAL</td>
                <td name='Q_MATHS_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q_EVS'>EVS</th>
                <td name='Q_EVS_OBT_1ST'>$D2_1evs</td>
                <td name='Q_EVS_MAX_1ST'>10</td>
                <td name='Q_EVS_OBT_2ND'>$D2_1evs</td>
                <td name='Q_EVS_MAX_2ND'>10</td>
                <td name='Q_EVS_OBT_HALFYEARLY'>$D2_4evs</td>
                <td name='Q_EVS_MAX_HALFYEARLY'>70</td>
                <td name='Q_EVS_OBT_TOTAL'>$EVS_TOTAL</td>
                <td name='Q_EVS_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q_GK'>G.K.</th>
                <td name='Q_GK_OBT_1ST'>$D2_1gk</td>
                <td name='Q_GK_MAX_1ST'>10</td>
                <td name='Q_GK_OBT_2ND'>$D2_1gk</td>
                <td name='Q_GK_MAX_2ND'>10</td>
                <td name='Q_GK_OBT_HALFYEARLY'>$D2_4gk</td>
                <td name='Q_GK_MAX_HALFYEARLY'>70</td>
                <td name='Q_GK_OBT_TOTAL'>$GK_TOTAL</td>
                <td name='Q_GK_MAX_TOTAL'>90</td>
            </tr>
            <tr>
                <th name='Q_TOTAL'>Total</th>
                <td name='Q_TOTAL_OBT_1ST'>$D2_1total</td>
                <td name='Q_TOTAL_MAX_1ST'>50</td>
                <td name='Q_TOTAL_OBT_2ND'>$D2_2total</td>
                <td name='Q_TOTAL_MAX_2ND'>50</td>
                <td name='Q_TOTAL_OBT_HALFYEARLY'>$D2_4total</td>
                <td name='Q_TOTAL_MAX_HALFYEARLY'>350</td>
                <td name='Q_TOTAL_OBT_GT'>$FINAL_TOTAL</td>
                <td name='Q_TOTAL_MAX_GT'>450</td>
            </tr>
        </table>
    </div>

    <div class='SixthRow'>
        <span name='Q_TOTALMARKS' class='SixthRow'>Total Marks:&nbsp;450</span>
        <span name='Q_OBTAINEDMARKS' class=''>Obtained Marks:&nbsp;$FINAL_TOTAL<br></span>
        <hr>
    </div>

    <div class='SeventhRow'>
        <span name='Q_PERCENTAGE' class='SeventhRow'>Percentage:$percentage%</span>
        <span name='Q_ATTENDANCE' class='SeventhRow'>Attendance:178/188</span>
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

echo "NO DATA FOUND ";
}
?>