<?php
include 'partials/addmissionDB_connect.php'; //isse database or table apne aap ban jayenge


$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['FSUBMIT'])) {
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
    $sql = "INSERT INTO `addmision_request$FCLASS` (`sname`, `sclass`, `smname`, `sfname`, `m_occupation`, `f_occupation`, `mobile`, `email`, `address`, `dob`, `district`, `state`) VALUES ('$FNAME', '$FCLASS', '$FMNAME', '$FFNAME', '$FMOTHEROCCUPATION', '$FFATHEROCCUPATION', ' $FMOBILE', '$FEMAIL', '$FADDRESS', '$FDOB', '$FDISTRICT', '$FSTATE');";
    mysqli_query($conn, $sql);
    $showAlert = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Roaem Public School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Uaddmission.css">
</head>

<body>
    <?php
    if ($showAlert) {
        echo "<script>
    alert('Your request has been sent, You will be notify by your gmail or phone');
</script>";
    }
    ?>
    <?php require 'nav.php' ?>
    <h1>STUDENT INFORMATION FORM</h1>
    <marquee>This Information will be send to addmission team of our school and you will be notify latter</marquee>
    <form action="Uaddmission.php" method="post">
        <table>
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
                <td><input type="text" name="FMOTHEROCCUPATION" placeholder="Enter Mother's Occupation" required></td>
            </tr>
            <tr>
                <td>FATHER'S OCCUPATION</td>
                <td>:</td>
                <td><input type="text" name="FFATHEROCCUPATION" placeholder="Enter Father's Occupation" required></td>
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
                <td><textarea name="FADDRESS" cols="35" rows="2" placeholder="Enter Address" required></textarea></td>
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
                <td><input type="submit" name="FSUBMIT" class="submit" value="submit"></td>
                <td><input type="reset" name="FRESET" class="reset" value="reset now"></td>
            </tr>
    </form>
    </table>

    <?php require 'Ufooter.php' ?>



</body>

</html>