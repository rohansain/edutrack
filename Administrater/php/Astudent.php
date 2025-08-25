<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Astudent.css">
    <title>Document</title>
</head>

<body>
    <div class="app">
        <?php require 'Anav.php' ?>
        <div class="content">
            <h1>STUDENT ENROLLMENT FORM</h1>
            <marquee>PLEASE SUBMIT STUDENT INFORMATION !!</marquee>
            <form action="enroll.php" method="post">
                <table>
                    <tr>
                        <td>ENROLLMENT NO</td>
                        <td>:</td>
                        <td><input type="text" name="FENROLLMENT" placeholder="Enter Enrollment No" required></td>
                    </tr>
                    <tr>
                        <td>ROLL NO</td>
                        <td>:</td>
                        <td><input type="NUMBER" name="FROLL" placeholder="Enter Roll No" required></td>
                    </tr>
                    <tr>
                        <td>NAME</td>
                        <td>:</td>
                        <td><input type="text" name="FNAME" placeholder="Enter Student Name" required></td>
                    </tr>
                    <tr>
                        <td>CLASS</td>
                        <td>:</td>
                        <td><select name="FCLASS" required style="  border-radius: 08px;
                    background-color: aqua;">
                                <option value="1">CLASS:1</option>
                                <option value="2">CLASS:2</option>
                                <option value="3">CLASS:3</option>
                                <option value="4">CLASS:4</option>
                                <option value="5">CLASS:5</option>
                                <option value="6">CLASS:6</option>
                                <option value="7">CLASS:7</option>
                                <option value="8">CLASS:8</option>
                                <option value="9">CLASS:9</option>
                                <option value="10">CLASS:10</option>
                            </select>
                    </tr>
                    <tr>
                        <td>MOTHER's NAME</td>
                        <td>:</td>
                        <td><input type="text" name="FMNAME" placeholder="Enter Mother's Name" required></td>
                    </tr>
                    <tr>
                        <td>FATHER's NAME</td>
                        <td>:</td>
                        <td><input type="text" name="FFNAME" placeholder="Enter Father's Name" required></td>
                    </tr>

                    <tr>
                        <td>MOTHER'S OCCUPATION
                        <td>:</td>
                        </td>
                        <td><input type="text" name="FMOTHEROCCUPATION" placeholder="Enter Mother's Occupation"
                                required></td>
                    </tr>
                    <tr>
                        <td>FATHER'S OCCUPATION</td>
                        <td>:</td>
                        <td><input type="text" name="FFATHEROCCUPATION" placeholder="Enter Father's Occupation"
                                required></td>
                    </tr>

                    <tr>
                        <td>MOBILE</td>
                        <td>:</td>
                        <td><select style="  border-radius: 08px;
                    background-color: aqua;">
                                <option>+91</option>
                                <option>+92</option>
                            </select>
                            <input type="number" name="FMOBILE" placeholder="Enter Mobile No" maxlength="10" required>
                        </td>
                    </tr>
                    <tr>
                        <td>EMAIL</td>
                        <td>:</td>
                        <td><input type="text" name="FEMAIL" placeholder="Enter EMAIL" required></td>
                    </tr>
                    <tr>
                        <td>ADDRESS</td>
                        <td>:</td>
                        <td><textarea name="FADDRESS" cols="35" rows="2" placeholder="Enter Address"
                                required></textarea></td>
                    </tr>
                    <tr>
                        <td>DATE OF BIRTH</td>
                        <td>:</td>
                        <td><input type="date" name="FDOB" placeholder="Enter DOB" required></td>
                    </tr>
                    <tr>
                        <td>DISTRICT</td>
                        <td>:</td>
                        <td><select name="FDISTRICT" required style="  border-radius: 08px;
                    background-color: aqua;">
                                <option value="NONE">NONE</option>
                                <option value="AJMER">AJMER</option>
                                <option value="ALWAR">ALWAR</option>
                                <option value="DAUSA">DAUSA</option>
                                <option value="KOTA">KOTA</option>
                                <option value="ALWAR">ALWAR</option>
                                <option value="JAIPUR">JAIPUR</option>
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
                                <option value="RAJASTHAN">RAJASTHAN</option>
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