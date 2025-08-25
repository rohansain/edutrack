<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<?php
// <!-- getting form data -->
    if(isset($_POST['resubmit'])){
        $roll = $_POST['Roll_no'];
        $enroll = $_POST['Enrollment'];
        $class = $_POST['class'];

        include 'partials/roaemDB_connect.php';

        // is detail ke according ham data fetch krenge
        $sql= "SELECT * FROM student_info_class$class where `rollno` = $roll";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if($num != 0){
            $row = mysqli_fetch_assoc($result);
            $sname = $row['sname'];
            $smname = $row['smname'];
            $sfname = $row['sfname'];
            $m_occupation = $row['m_occupation'];
            $f_occupation = $row['f_occupation'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $address = $row['address'];
            $dob = $row['dob'];
            $district = $row['district'];
            $state = $row['state'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Astudentedit2.css">
    <title>Document</title>
</head>

<body>
    <div class="app">
        <?php require 'Anav.php' ?>
        <div class="content">
            <h1>STUDENT ENROLLMENT FORM</h1>
            <marquee>PLEASE SUBMIT STUDENT INFORMATION !!</marquee>
            <form action="update_student.php" method="post">
                <table>
                    <tr>
                        <td>ENROLLMENT NO</td>
                        <td>:</td>
                        <td><input type="text" name="FENROLLMENT" placeholder="Enter Enrollment No" required value="<?php echo $enroll?>"></td>
                    </tr>
                    <tr>
                        <td>ROLL NO</td>
                        <td>:</td>
                        <td><input type="NUMBER" name="FROLL" placeholder="Enter Roll No" required value="<?php echo $roll?>"></td>
                    </tr>
                    <tr>
                        <td>NAME</td>
                        <td>:</td>
                        <td><input type="text" name="FNAME" placeholder="Enter Student Name" required value="<?php echo $sname?>"></td>
                    </tr>
                    
                    <tr>
                        <td>MOTHER's NAME</td>
                        <td>:</td>
                        <td><input type="text" name="FMNAME" placeholder="Enter Mother's Name" required value="<?php echo $smname?>"></td>
                    </tr>
                    <tr>
                        <td>FATHER's NAME</td>
                        <td>:</td>
                        <td><input type="text" name="FFNAME" placeholder="Enter Father's Name" required value="<?php echo $sfname?>"></td>
                    </tr>

                    <tr>
                        <td>MOTHER'S OCCUPATION
                        <td>:</td>
                        </td>
                        <td><input type="text" name="FMOTHEROCCUPATION" placeholder="Enter Mother's Occupation"
                                required value="<?php echo $m_occupation?>"></td>
                    </tr>
                    <tr>
                        <td>FATHER'S OCCUPATION</td>
                        <td>:</td>
                        <td><input type="text" name="FFATHEROCCUPATION" placeholder="Enter Father's Occupation"
                                required value="<?php echo $f_occupation?>"></td>
                    </tr>

                    <tr>
                        <td>MOBILE</td>
                        <td>:</td>
                        <td><select style="  border-radius: 08px;
                    background-color: aqua;">
                                <option>+91</option>
                                <option>+92</option>
                            </select>
                            <input type="number" name="FMOBILE" placeholder="Enter Mobile No" maxlength="10" required value="<?php echo $mobile?>">
                        </td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td>:</td>
                        <td><input type="text" name="FEMAIL" placeholder="Enter EMAIL" required value="<?php echo $email?>"></td>
                    </tr>
                    <tr>
                        <td>ADDRESS</td>
                        <td>:</td>
                        <td><textarea name="FADDRESS" cols="35" rows="2" placeholder="Enter Address"
                                required><?php echo $address ?></textarea></td>
                    </tr>
                    <tr>
                        <td>DATE OF BIRTH</td>
                        <td>:</td>
                        <td><input type="date" name="FDOB" placeholder="Enter DOB" required value="<?php echo $dob?>"></td>
                    </tr>
                    <tr>
                        <td>DISTRICT</td>
                        <td>:</td>
                        <td><select name="FDISTRICT" required>" style="  border-radius: 08px;
                    background-color: aqua;">
                                <option value="NONE">NONE</option>
                                <option value="AJMER">AJMER</option>
                                <option value="ALWAR">ALWAR</option>
                                <option value="DAUSA">DAUSA</option>
                                <option value="KOTA">KOTA</option>
                                <option value="ALWAR">ALWAR</option>
                                <option value="JAIPUR" selected>JAIPUR</option>
                            </select>
                    </tr>
                    <tr>
                        <td>STATE</td>
                        <td>:</td>
                        <td><select name="FSTATE" required style="  border-radius: 08px;
                    background-color: aqua;">
                                <option value="other">other</option>
                                <option value="DELHI">DELHI</option>
                                <option value="GUJRAT">GUJRAT</option>
                                <option value="PUNJAB">PUNJAB</option>
                                <option value="RAJASTHAN" selected>RAJASTHAN</option>
                            </select>

                    </tr>
                    <tr>
                        <td><input type="submit" name="FSUBMIT" value="submit"></td>
                        <td><input type="reset" name="FRESET" value="reset now"></td>
                    </tr>
            </form>
            </table>

        </div>
    </div>
    </div>
    </div>
</div>
</body>

</html>