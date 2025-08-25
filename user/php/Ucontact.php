<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/contactDB_connect.php'; //isse database or table apne aap ban jayenge
    $fname = $_POST['fname'];
    $name = $_POST['name'];
    $isstudent = $_POST['course'];
    $fmail = $_POST['fmail'];
    $nationcode = $_POST['nationcode'];
    $mobile = $_POST['mobile'];
    $query = $_POST['query'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `request_info` (`fname`, `lname`, `isstudent`, `gmail`, `mobile`, `query`, `query_info`, `time`) VALUES ('$fname', '$name', '$isstudent', '$fmail', '$mobile', '$query', '$desc', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $showAlert = true;
    } else {
        $showError = "please try again after some time";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Roaem Public School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/Ucontact.css">
</head>

<body>
    <?php
    if ($showAlert) {
        echo "<script>
    alert('request sent');
</script>";
    }
    if ($showError) {
        echo "<script>
    alert('$showError');
</script>";
    }
    ?>
    <?php require 'nav.php' ?>
    <div class="Ucontainer">
        <center>
            <h1>Contact-Us</h1>
        </center>
        <form action="Ucontact.php" name="roForm" onsubmit="return valid_form()" method="post">
            <table>
                <tr>
                    <td><label for="fname">FirstName :</label></td>
                    <td><input type="text" id="fnameRo" name="fname" required><span class="valid " id="validfname"></span></td>
                </tr>
                <tr>
                    <td><label for="lname">lastName :</label></td>
                    <td><input type="text" id="lnameRo" name="name" required><span class="valid " id="validlname"></span></td>
                </tr>
                <tr>
                    <td>Are you school student:</td>
                    <td><select name="course">
                            <option value="no">no</option>
                            <option value="yes" selected>yes</option>
                        </select></td>
                </tr>
                <!-- <tr>
            <td>passing year</td>
            <td><select name="passing year" >
                <option value="2019-2022">2019-2022</option>
                <option value="2020-2023">2020-2023</option>
                <option value="2021-2024">2021-2024</option>         
            </select></td>
        </tr> -->
                <td>Gmail :</td>
                <td><input type="Gmail" id="fmail" name="fmail" required><span class="valid " id="validmail"></span></td>
                </tr>

                <tr>
                    <td>Contact:</td>
                    <td>
                        <select name="nationcode" id="">
                            <option value="india">91</option>
                            <option value="america">92</option>
                            <option value="england">93</option>
                        </select>
                        <input type="number" id="fno" name="mobile"><span class="valid" id="validphone"></span>
                    </td>
                <tr>
                    <td rowspan="3">Select your Query</td>
                    <td><input type="radio" name="query" value="complaint">complaint</td>

                </tr>
                <tr>
                    <td><input type="radio" name="query" value="suggestion">suggestion</td>
                </tr>
                <tr>
                    <td><input type="radio" name="query" value="Others">Others</td>
                </tr>
                <tr>
                    <td colspan="3"><textarea cols="50" name="desc" placeholder="enter your query"></textarea></td>
                </tr>
                </tr>
                <tr>
                    <td><input type="submit"> </td>
                    <td><input type="reset"></td>
                </tr>
            </table>
        </form>
        <?php require 'Ufooter.php' ?>

    </div>
</body>

</html>