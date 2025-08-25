<?php

// only verified user can add other user
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $class = $_POST['class'];
    include 'partials/addmissionDB_connect.php';


    // is detail ke according ham data fetch krenge
    $sql= "SELECT * FROM Addmision_request$class";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $display="<tr>
    <th>Sr.no</th>
    <th>Student_name</th>
    <th>Father's name</th>
    <th>Father's Occupation</th>
    <th>Mother's name</th>
    <th>Mother's occupation</th>
    <th>mobile</th>
    <th>email</th>
    <th>address</th>
    <th>date of birth</th>
    <th>district</th>
    <th>State</th>
</tr>";
    if(!$num==0){


    for($i=1; $i<=$num; $i++){
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

        $display.="<tr>
        <td>$i</td>
        <td>$sname</td>
        <td>$sfname</td>
        <td>$f_occupation</td>
        <td>$smname</td>
        <td>$m_occupation</td>
        <td>$mobile</td>
        <td>$email</td>
        <td>$address</td>
        <td>$dob</td>
        <td>$district</td>
        <td>$state</td>
    </tr>";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Aaddmission_request2.css">
    <title>Addmission Request</title>
</head>

<body>
    <div class="app">

        <?php require 'Anav.php' ?>
        <main class="content">
        <table>
            <thead></thead>
            <caption>Addmission Request of Class <?php echo $class?></caption>
        
        <?php echo $display?>
    </table>
        </main>
    </div>
</body>

</html>